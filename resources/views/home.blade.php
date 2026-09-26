@extends('app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="/styles/home.css">
@endsection

@section('content')

<!-- HERO -->
<section class="hero" id="home">

    <div class="hero-inner">

        <div class="hero-content">

            <div class="hero-badge animate-in">
                <span class="status-dot"></span>
                BSIT Student &bull; Video Editor &bull; Photo Editor &bull; IT & Digital Creative
            </div>

            <h1 class="animate-in delay-1">
                Hi, I'm <span class="gradient-text">Clarence Fugen.</span>
            </h1>

            <p class="animate-in delay-2">
                I build web systems and create digital content — from
                Laravel-powered websites to edited videos and photos.
                I combine Information Technology with video editing,
                photo editing, and graphic design to bring ideas to
                life on screen.
            </p>

            <div class="hero-stack animate-in delay-3">

                <span class="stack-tag">
                    <i class="fab fa-laravel"></i> Laravel
                </span>

                <span class="stack-tag">
                    <i class="fab fa-php"></i> PHP
                </span>

                <span class="stack-tag">
                    <i class="fas fa-palette"></i> Canva
                </span>

                <span class="stack-tag">
                    <i class="fab fa-html5"></i> HTML/CSS
                </span>

                <span class="stack-tag">
                    <i class="fas fa-video"></i> Video
                </span>

                <span class="stack-tag">
                    <i class="fas fa-camera"></i> Photo
                </span>

            </div>


            <!-- BUTTONS -->
            <div class="buttons animate-in delay-4">

                <a href="/projects" class="btn btn-primary">
                    <i class="fas fa-rocket"></i>
                    View My Work
                </a>

                <a href="/contact" class="btn">
                    <i class="fas fa-paper-plane"></i>
                    Contact Me
                </a>

            </div>

        </div>


        <!-- PROFILE IMAGE -->
        <div class="hero-avatar-wrapper">

            <div class="hero-avatar-ring"></div>

            <div class="hero-avatar">

                <img
                    src="/images/id.jpg"
                    alt="Clarence Fugen"
                >

            </div>

        </div>

    </div>

</section>

@endsection