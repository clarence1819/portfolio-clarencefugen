@extends('app')

@section('title', 'Video & Photos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/media.css') }}">
@endsection

@section('content')

<!-- VIDEO & PHOTO SHOWCASE -->
<section class="media" id="media">

    <div class="section-header animate-in">
        <span class="section-label"><i class="fas fa-photo-film"></i> SHOWCASE</span>
        <h2>Video & Photo Work</h2>
        <p>A collection of my video edits and photo enhancements</p>
    </div>

    <div class="media-gallery-box glass-card animate-in delay-1">

        <div class="media-layout">

            <!-- VIDEO SHOWCASE -->
            <div class="video-showcase">
                <h3 class="media-category">
                    <i class="fas fa-play-circle"></i>
                    Video Edits
                </h3>
                <div class="video-grid">
                    <div class="video-card">
                        <video
                            src="{{ asset('videos/edited.mp4') }}"
                            controls
                            preload="metadata"
                        ></video>
                    </div>
                    <div class="video-card">
                        <video
                            src="{{ asset('videos/edited1.mp4') }}"
                            controls
                            preload="metadata"
                        ></video>
                    </div>
                    <div class="video-card">
                        <video
                            src="{{ asset('videos/edited2.mp4') }}"
                            controls
                            preload="metadata"
                        ></video>
                    </div>
                </div>
            </div>

            <!-- PHOTO GALLERY -->
            <div class="photo-showcase">
                <h3 class="media-category">
                    <i class="fas fa-images"></i>
                    Photo Edits
                </h3>
                <div class="photo-gallery">
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/photo-2.jpg') }}"
                            alt="Edited photo 1"
                            loading="lazy"
                        >
                        <figcaption>Photo Edit</figcaption>
                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/canva.jpg') }}"
                            alt="Edited photo 2"
                            loading="lazy"
                        >
                        <figcaption>Photo Edit</figcaption>
                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/adobe.jpg') }}"
                            alt="Edited photo 3"
                            loading="lazy"
                        >
                        <figcaption>Photo Edit</figcaption>
                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/ads.jpg') }}"
                            alt="Portrait"
                            loading="lazy"
                        >
                        <figcaption>Poster</figcaption>
                    </figure>
                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/RZ.jpg') }}"
                            alt="Portrait"
                            loading="lazy"
                        >
                        <figcaption>Logo</figcaption>
                    </figure>

                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/clarence.jpg') }}"
                            alt="Portrait"
                            loading="lazy"
                        >
                        <figcaption>Portrait</figcaption>
                    </figure>

                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/clarence.jpg') }}"
                            alt="Portrait"
                            loading="lazy"
                        >
                        <figcaption>Portrait</figcaption>
                    </figure>
                    <figure class="photo-item">
                        <img
                            src="{{ asset('images/clarence.jpg') }}"
                            alt="Portrait"
                            loading="lazy"
                        >
                        <figcaption>Portrait</figcaption>
                    </figure>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection