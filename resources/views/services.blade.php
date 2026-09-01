@extends('app')

@section('title', 'Services')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/services.css') }}">
@endsection

@section('content')

<!-- SERVICES -->
<section id="services">

    <div class="section-header animate-in">
        <span class="section-label"><i class="fas fa-briefcase"></i> MY SERVICES</span>
        <h2>What I Offer</h2>
        <p>Professional services tailored to your needs</p>
    </div>

    <div class="services-grid">

        <!-- 1 -->
        <div class="service-card glass-card animate-in delay-1">
            <div class="service-icon">
                <i class="fas fa-globe"></i>
            </div>
            <h3>Website Development</h3>
            <p>
                I can create simple and responsive websites
                for personal projects, portfolios, and small businesses.
            </p>
        </div>

        <!-- 2 -->
        <div class="service-card glass-card animate-in delay-2">
            <div class="service-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h3>System Development</h3>
            <p>
                I can develop basic web-based systems with
                features such as registration, login, records,
                and database management.
            </p>
        </div>

        <!-- 3 -->
        <div class="service-card glass-card animate-in delay-3">
            <div class="service-icon">
                <i class="fas fa-pen-ruler"></i>
            </div>
            <h3>Graphic Layout Design</h3>
            <p>
                I can create posters, invitations, presentations,
                social media layouts, and other digital designs.
            </p>
        </div>

        <!-- 4 -->
        <div class="service-card glass-card animate-in delay-4">
            <div class="service-icon">
                <i class="fas fa-image"></i>
            </div>
            <h3>Photo Editing</h3>
            <p>
                I offer basic photo editing including background
                removal, retouching, color adjustment, and enhancement.
            </p>
        </div>

        <!-- 5 -->
        <div class="service-card glass-card animate-in delay-5">
            <div class="service-icon">
                <i class="fas fa-video"></i>
            </div>
            <h3>Video Editing</h3>
            <p>
                I can edit videos for school projects, social media,
                presentations, and other personal or promotional content.
            </p>
        </div>

        <!-- 6 -->
        <div class="service-card glass-card animate-in delay-6">
            <div class="service-icon">
                <i class="fas fa-chalkboard-user"></i>
            </div>
            <h3>Presentation Design</h3>
            <p>
                I can create organized and visually appealing
                PowerPoint presentations for school and other projects.
            </p>
        </div>

        <!-- 7 -->
        <div class="service-card glass-card animate-in delay-7">
            <div class="service-icon">
                <i class="fas fa-wrench"></i>
            </div>
            <h3>Computer & IT Support</h3>
            <p>
                I can provide basic computer setup, troubleshooting,
                software installation, and networking assistance.
            </p>
        </div>

        <!-- 8 -->
        <div class="service-card glass-card animate-in delay-8">
            <div class="service-icon">
                <i class="fas fa-share-nodes"></i>
            </div>
            <h3>Social Media Graphics</h3>
            <p>
                I can design simple promotional graphics, announcements,
                banners, and posts for social media platforms.
            </p>
        </div>

    </div>

    <div class="services-cta animate-in">
        <p>Interested in working together?</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i>
            Get In Touch
        </a>
    </div>

</section>

@endsection