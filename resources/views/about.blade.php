@extends('app')

@section('title', 'About')

@section('styles')
    <link rel="stylesheet" href="/styles/about.css">
@endsection

@section('content')

<!-- ABOUT -->
<section class="about" id="about">

    <div class="section-header animate-in">
        <span class="section-label"><i class="fas fa-user"></i> ABOUT ME</span>
        <h2>Who I Am</h2>
        <p>A passionate BSIT student blending technology with creativity</p>
    </div>

    <div class="about-grid">

        <div class="about-text glass-card animate-in delay-1">
            <div class="about-text-inner">
                <h3>My Journey</h3>
                <p>
                    I am a Bachelor of Science in Information Technology
                    student interested in web development, system
                    development, networking, and digital design.
                </p>
                <p>
                    Alongside my IT work, I'm also a video editor and
                    photo editor — I edit videos for social media and
                    events, and retouch and enhance photos for personal
                    and client projects. My goal is to keep growing both
                    my technical and creative skills, and use them to
                    build useful, good-looking digital work.
                </p>
            </div>
        </div>

        <div class="about-stats">

            <div class="stat-card glass-card animate-in delay-2">
                <div class="stat-icon"><i class="fas fa-code"></i></div>
                <div class="stat-number">10+</div>
                <div class="stat-label">Projects Built</div>
            </div>

            <div class="stat-card glass-card animate-in delay-3">
                <div class="stat-icon"><i class="fas fa-video"></i></div>
                <div class="stat-number">20+</div>
                <div class="stat-label">Videos Edited</div>
            </div>

            <div class="stat-card glass-card animate-in delay-4">
                <div class="stat-icon"><i class="fas fa-camera"></i></div>
                <div class="stat-number">50+</div>
                <div class="stat-label">Photos Enhanced</div>
            </div>

            <div class="stat-card glass-card animate-in delay-5">
                <div class="stat-icon"><i class="fas fa-palette"></i></div>
                <div class="stat-number">30+</div>
                <div class="stat-label">Designs Created</div>
            </div>

        </div>

    </div>

</section>

@endsection