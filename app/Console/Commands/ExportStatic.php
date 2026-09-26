<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class ExportStatic extends Command
{
    protected $signature = 'app:export-static';

    protected $description = 'Export Laravel pages to static HTML files in dist/';


    public function handle(): int
    {
        /*
        |--------------------------------------------------------------------------
        | DIST FOLDER
        |--------------------------------------------------------------------------
        */

        $distPath = base_path('dist');


        /*
        |--------------------------------------------------------------------------
        | DELETE OLD DIST
        |--------------------------------------------------------------------------
        */

        if (File::isDirectory($distPath)) {

            File::deleteDirectory($distPath);

        }


        /*
        |--------------------------------------------------------------------------
        | CREATE DIST
        |--------------------------------------------------------------------------
        */

        File::makeDirectory(
            $distPath,
            0755,
            true
        );


        /*
        |--------------------------------------------------------------------------
        | COPY PUBLIC FILES
        |--------------------------------------------------------------------------
        */

        $this->info('Copying public assets...');

        $this->copyDirectory(
            public_path(),
            $distPath
        );


        /*
        |--------------------------------------------------------------------------
        | REMOVE INDEX.PHP
        |--------------------------------------------------------------------------
        */

        if (
            File::exists(
                $distPath . '/index.php'
            )
        ) {

            File::delete(
                $distPath . '/index.php'
            );

        }


        /*
        |--------------------------------------------------------------------------
        | GET ROUTES
        |--------------------------------------------------------------------------
        */

        $routes = collect(
            Route::getRoutes()->getRoutes()
        )

        ->filter(function ($route) {

            return $route->getName() !== null;

        })

        ->filter(function ($route) {

            return in_array(
                'GET',
                $route->methods()
            );

        })

        ->filter(function ($route) {

            return !str_contains(
                $route->uri(),
                '{'
            );

        });


        $this->info(
            "Exporting {$routes->count()} routes..."
        );


        /*
        |--------------------------------------------------------------------------
        | EXPORT ROUTES
        |--------------------------------------------------------------------------
        */

        foreach ($routes as $route) {

            $name = $route->getName();

            $uri = $route->uri();


            try {

                /*
                |--------------------------------------------------------------------------
                | CREATE REQUEST
                |--------------------------------------------------------------------------
                */

                $url = '/' .
                    ltrim(
                        $uri,
                        '/'
                    );


                if ($url === '/') {

                    $url = '/';

                }


                $request = Request::create(
                    $url,
                    'GET'
                );


                /*
                |--------------------------------------------------------------------------
                | BIND ROUTE
                |--------------------------------------------------------------------------
                */

                $route->bind(
                    $request
                );


                /*
                |--------------------------------------------------------------------------
                | GET CONTROLLER / CLOSURE
                |--------------------------------------------------------------------------
                */

                $action =
                    $route->getAction('uses');


                /*
                |--------------------------------------------------------------------------
                | EXECUTE ROUTE
                |--------------------------------------------------------------------------
                */

                $response = app()->call(
                    $action
                );


                /*
                |--------------------------------------------------------------------------
                | REDIRECT
                |--------------------------------------------------------------------------
                */

                if (
                    $response instanceof
                    \Illuminate\Http\RedirectResponse
                ) {

                    $this->warn(
                        "Skipping redirect: {$name}"
                    );

                    continue;

                }


                /*
                |--------------------------------------------------------------------------
                | GET HTML
                |--------------------------------------------------------------------------
                */

                if (
                    $response instanceof
                    \Illuminate\Http\Response
                ) {

                    $html =
                        $response->getContent();

                } else {

                    $html =
                        (string) $response;

                }


                /*
                |--------------------------------------------------------------------------
                | REMOVE LOCALHOST
                |--------------------------------------------------------------------------
                */

                $html = preg_replace(
                    '/https?:\/\/localhost/',
                    '',
                    $html
                );


                /*
                |--------------------------------------------------------------------------
                | REMOVE EXTRA LOCALHOST
                |--------------------------------------------------------------------------
                */

                $html = str_replace(
                    'http://127.0.0.1',
                    '',
                    $html
                );

                $html = str_replace(
                    'http://localhost',
                    '',
                    $html
                );


                /*
                |--------------------------------------------------------------------------
                | CREATE FILE
                |--------------------------------------------------------------------------
                */

                if (
                    $uri === '/' ||
                    $uri === ''
                ) {

                    $filePath =
                        $distPath .
                        '/index.html';

                } else {

                    $dirPath =
                        $distPath .
                        '/' .
                        trim(
                            $uri,
                            '/'
                        );


                    File::makeDirectory(
                        $dirPath,
                        0755,
                        true
                    );


                    $filePath =
                        $dirPath .
                        '/index.html';

                }


                /*
                |--------------------------------------------------------------------------
                | WRITE HTML
                |--------------------------------------------------------------------------
                */

                File::put(
                    $filePath,
                    $html
                );


                $this->info(
                    "  Exported: {$name} -> {$uri}"
                );


            } catch (\Throwable $e) {

                $this->error(
                    "  Failed: {$name} ({$uri}) - " .
                    $e->getMessage()
                );

            }

        }


        /*
        |--------------------------------------------------------------------------
        | DONE
        |--------------------------------------------------------------------------
        */

        $this->newLine();

        $this->info(
            'Static export complete!'
        );

        $this->info(
            'Output: dist/'
        );


        return Command::SUCCESS;
    }



    /*
    |--------------------------------------------------------------------------
    | COPY DIRECTORY
    |--------------------------------------------------------------------------
    */

    private function copyDirectory(
        string $source,
        string $destination
    ): void {

        if (
            !File::isDirectory(
                $destination
            )
        ) {

            File::makeDirectory(
                $destination,
                0755,
                true
            );

        }


        foreach (
            File::allFiles($source)
            as $file
        ) {

            $relativePath =
                ltrim(
                    str_replace(
                        $source,
                        '',
                        $file->getPathname()
                    ),
                    DIRECTORY_SEPARATOR
                );


            $destinationFile =
                $destination .
                DIRECTORY_SEPARATOR .
                $relativePath;


            $destinationDirectory =
                dirname(
                    $destinationFile
                );


            if (
                !File::isDirectory(
                    $destinationDirectory
                )
            ) {

                File::makeDirectory(
                    $destinationDirectory,
                    0755,
                    true
                );

            }


            File::copy(
                $file->getPathname(),
                $destinationFile
            );

        }

    }
}