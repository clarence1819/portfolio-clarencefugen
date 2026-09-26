@extends('app')

@section('title', 'Video & Photos')

@section('styles')

<link rel="stylesheet" href="/styles/media.css">

@endsection


@section('content')


<section class="media" id="media">


    <!-- =========================
         HEADER
    ========================== -->

    <div class="section-header animate-in">

        <span class="section-label">

            <i class="fas fa-photo-film"></i>

            SHOWCASE

        </span>


        <h2>
            Video & Photo Work
        </h2>


        <p>
            A collection of my video edits and photo enhancements
        </p>

    </div>



    <!-- =========================
         GALLERY BOX
    ========================== -->

    <div class="media-gallery-box glass-card animate-in delay-1">


        <div class="media-layout">


            <!-- =========================
                 VIDEO
            ========================== -->

            <div class="video-showcase">


                <h3 class="media-category">

                    <i class="fas fa-play-circle"></i>

                    Video Edits

                </h3>


                <div class="video-grid">


                    <div class="video-card">

                        <video
                            controls
                            preload="metadata"
                            playsinline
                        >

                            <source
                                src="/videos/edited.mp4"
                                type="video/mp4"
                            >

                            Your browser does not support
                            the video element.

                        </video>

                    </div>



                    <div class="video-card">

                        <video
                            controls
                            preload="metadata"
                            playsinline
                        >

                            <source
                                src="/videos/edited1.mp4"
                                type="video/mp4"
                            >

                            Your browser does not support
                            the video element.

                        </video>

                    </div>



                    <div class="video-card">

                        <video
                            controls
                            preload="metadata"
                            playsinline
                        >

                            <source
                                src="/videos/edited2.mp4"
                                type="video/mp4"
                            >

                            Your browser does not support
                            the video element.

                        </video>

                    </div>


                </div>

            </div>



            <!-- =========================
                 PHOTOS
            ========================== -->

            <div class="photo-showcase">


                <h3 class="media-category">

                    <i class="fas fa-images"></i>

                    Photo Edits

                </h3>



                <div class="photo-gallery">


                    <figure class="photo-item">

                        <img
                            src="/images/photo-2.jpg"
                            alt="Edited photo"
                            loading="lazy"
                        >

                        <figcaption>
                            Photo Edit
                        </figcaption>

                    </figure>



                    <figure class="photo-item">

                        <img
                            src="/images/canva.jpg"
                            alt="Canva design"
                            loading="lazy"
                        >

                        <figcaption>
                            Canva Design
                        </figcaption>

                    </figure>



                    <figure class="photo-item">

                        <img
                            src="/images/adobe.jpg"
                            alt="Adobe design"
                            loading="lazy"
                        >

                        <figcaption>
                            Adobe Design
                        </figcaption>

                    </figure>



                    <figure class="photo-item">

                        <img
                            src="/images/ads.jpg"
                            alt="Poster design"
                            loading="lazy"
                        >

                        <figcaption>
                            Poster
                        </figcaption>

                    </figure>



                    <figure class="photo-item">

                        <img
                            src="/images/RZ.jpg"
                            alt="Logo design"
                            loading="lazy"
                        >

                        <figcaption>
                            Logo
                        </figcaption>

                    </figure>


                </div>

            </div>


        </div>

    </div>


</section>


@endsection