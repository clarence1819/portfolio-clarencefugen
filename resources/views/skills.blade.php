@extends('app')

@section('title', 'Skills')

@section('styles')
    <link rel="stylesheet" href="/styles/skills.css">
@endsection

@section('content')

<!-- SKILLS -->
<section id="skills">

    <div class="section-header animate-in">
        <span class="section-label">
            <i class="fas fa-bolt"></i> MY SKILLS
        </span>

        <h2>What I Can Do</h2>

        <p>Technologies and creative tools I work with</p>
    </div>


    <div class="skills-grid">

        <!-- 1 -->
        <div class="skill-card glass-card animate-in delay-1">

            <div class="skill-icon">
                <i class="fas fa-code"></i>
            </div>

            <h3>Web Development</h3>

            <p>
                HTML, CSS, JavaScript, Bootstrap,
                PHP, Laravel and basic React development.
            </p>

            <div class="skill-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JS</span>
                <span>Laravel</span>
            </div>

        </div>


        <!-- 2 -->
        <div class="skill-card glass-card animate-in delay-2">

            <div class="skill-icon">
                <i class="fas fa-database"></i>
            </div>

            <h3>Database</h3>

            <p>
                MySQL, SQLite and database design
                for web-based systems.
            </p>

            <div class="skill-tags">
                <span>MySQL</span>
                <span>SQLite</span>
                <span>Design</span>
            </div>

        </div>


        <!-- 3 -->
        <div class="skill-card glass-card animate-in delay-3">

            <div class="skill-icon">
                <i class="fas fa-film"></i>
            </div>

            <h3>Video Editing</h3>

            <p>
                Cutting, transitions, color grading,
                motion titles and short-form video editing.
            </p>

            <div class="skill-tags">
                <span>Premiere</span>
                <span>CapCut</span>
                <span>Effects</span>
            </div>

        </div>


        <!-- 4 -->
        <div class="skill-card glass-card animate-in delay-4">

            <div class="skill-icon">
                <i class="fas fa-image"></i>
            </div>

            <h3>Photo Editing</h3>

            <p>
                Retouching, color correction, background
                cleanup and photo enhancement.
            </p>

            <div class="skill-tags">
                <span>Lightroom</span>
                <span>Photoshop</span>
                <span>Retouch</span>
            </div>

        </div>


        <!-- 5 -->
        <div class="skill-card glass-card animate-in delay-5">

            <div class="skill-icon">
                <i class="fas fa-pen-ruler"></i>
            </div>

            <h3>Graphic Design</h3>

            <p>
                Digital layouts, presentations, posters,
                and social media graphics.
            </p>

            <div class="skill-tags">
                <span>Canva</span>
                <span>Figma</span>
                <span>Layouts</span>
            </div>

        </div>


        <!-- 6 -->
        <div class="skill-card glass-card animate-in delay-6">

            <div class="skill-icon">
                <i class="fas fa-network-wired"></i>
            </div>

            <h3>IT & Networking</h3>

            <p>
                Basic networking, troubleshooting,
                system administration and computer setup.
            </p>

            <div class="skill-tags">
                <span>Networking</span>
                <span>Troubleshoot</span>
                <span>Admin</span>
            </div>

        </div>

    </div>

</section>

@endsection