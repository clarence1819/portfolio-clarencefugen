@extends('app')

@section('title', 'Projects')

@section('styles')
    <link rel="stylesheet" href="/styles/projects.css">
@endsection

@section('content')

<!-- PROJECTS -->
<section id="projects">

    <div class="section-header animate-in">
        <span class="section-label"><i class="fas fa-folder-open"></i> MY WORK</span>
        <h2>Featured Projects</h2>
        <p>A selection of my development and creative work</p>
    </div>

    <div class="project-grid">

        <!-- PROJECT 1 -->
        <div class="project-card glass-card animate-in delay-1">
            <div class="project-image">
                <img
                    src="{{ asset('images/laravel.jpg') }}"
                    alt="Laravel Web Systems"
                >
                <div class="project-overlay">
                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h3>Laravel Web Systems</h3>
                <p>
                    Web-based systems developed using
                    Laravel, PHP and database technologies.
                </p>
            </div>
        </div>


        <!-- PROJECT 2 -->
        <div class="project-card glass-card animate-in delay-2">
            <div class="project-image">
                <img
                    src="{{ asset('images/project-admission.jpg') }}"
                    alt="Admission Management System"
                    onerror="this.src='{{ asset('images/editing.jpg') }}'"
                >
                <div class="project-overlay">
                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>Bootstrap</span>
                        <span>CRUD</span>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h3>Admission Management System</h3>
                <p>
                    A web-based system designed to improve
                    the admission process and management of
                    student applications.
                </p>
            </div>
        </div>


        <!-- PROJECT 3 -->
        <div class="project-card glass-card animate-in delay-3">
            <div class="project-image">
                <img
                    src="{{ asset('images/project-design.jpg') }}"
                    alt="Digital Design Projects"
                    onerror="this.src='{{ asset('images/digital.jpg') }}'"
                >
                <div class="project-overlay">
                    <div class="project-tags">
                        <span>Canva</span>
                        <span>Figma</span>
                        <span>Design</span>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h3>Digital Design Projects</h3>
                <p>
                    Collection of digital layouts,
                    presentations and creative visual projects.
                </p>
            </div>
        </div>


        <!-- PROJECT 4 -->
        <div class="project-card glass-card animate-in delay-4">
            <div class="project-image">
                <img
                    src="{{ asset('images/project-video.jpg') }}"
                    alt="Video Editing Projects"
                    onerror="this.src='{{ asset('images/video-cover.jpg') }}'"
                >
                <div class="project-overlay">
                    <div class="project-tags">
                        <span>Premiere</span>
                        <span>CapCut</span>
                        <span>Video</span>
                    </div>
                </div>
            </div>
            <div class="project-info">
                <h3>Video Editing Projects</h3>
                <p>
                    Selected video editing and digital
                    content projects.
                </p>
            </div>
        </div>

    </div>

</section>

@endsection