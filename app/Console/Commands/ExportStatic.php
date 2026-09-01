<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class ExportStatic extends Command
{
    protected $signature = 'app:export-static {--url= : Base URL for asset generation (e.g. https://yoursite.netlify.app)}';

    protected $description = 'Export all web routes to static HTML files in dist/';

    public function handle(): int
    {
        $baseUrl = $this->option('url') ?: config('app.url', 'http://localhost');

        config(['app.url' => $baseUrl]);

        $distPath = base_path('dist');

        if (File::isDirectory($distPath)) {
            File::deleteDirectory($distPath);
        }
        File::makeDirectory($distPath, 0755, true);

        $this->copyDirectory(public_path(), $distPath);
        File::delete($distPath . '/index.php');

        $routes = collect(Route::getRoutes()->getRoutes())
            ->filter(fn ($route) => in_array('web', $route->gatherMiddleware()))
            ->filter(fn ($route) => $route->getName() !== null);

        $this->info("Exporting {$routes->count()} routes...");

        foreach ($routes as $route) {
            $name = $route->getName();
            $uri = $route->uri();

            try {
                $request = Request::create($uri, 'GET');
                $response = app('router')->dispatch($request);

                if ($response instanceof \Illuminate\Http\RedirectResponse) {
                    $this->warn("  Skipping redirect: {$name} ({$uri})");
                    continue;
                }

                $html = $response->getContent();

                if ($uri === '' || $uri === '/') {
                    $filePath = $distPath . '/index.html';
                } else {
                    $dirPath = $distPath . '/' . trim($uri, '/');
                    File::makeDirectory($dirPath, 0755, true);
                    $filePath = $dirPath . '/index.html';
                }

                File::put($filePath, $html);
                $this->info("  Exported: {$name} -> {$uri}");
            } catch (\Throwable $e) {
                $this->error("  Failed: {$name} ({$uri}) - {$e->getMessage()}");
            }
        }

        $this->info("Static export complete! Output: dist/");
        return Command::SUCCESS;
    }

    private function copyDirectory(string $source, string $destination): void
    {
        if (!is_dir($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        foreach (File::allFiles($source) as $item) {
            $relativePath = ltrim(str_replace($source, '', $item->getPathname()), DIRECTORY_SEPARATOR);
            $destFile = $destination . DIRECTORY_SEPARATOR . $relativePath;
            $destDir = dirname($destFile);

            if (!File::isDirectory($destDir)) {
                File::makeDirectory($destDir, 0755, true);
            }

            File::copy($item->getPathname(), $destFile);
        }
    }
}
