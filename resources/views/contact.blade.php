@extends('app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}">
@endsection

@section('content')

<!-- CONTACT -->
<section class="contact" id="contact">

    <div class="section-header animate-in">
        <span class="section-label"><i class="fas fa-envelope"></i> CONTACT</span>
        <h2>Let's Work Together</h2>
        <p>Got a project in mind? I'd love to hear from you</p>
    </div>

    <div class="contact-grid">

        <div class="contact-info-cards">

            <div class="contact-card glass-card animate-in delay-1">
                <div class="contact-card-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p>18negufyayence@gmail.com</p>
            </div>

            <div class="contact-card glass-card animate-in delay-2">
                <div class="contact-card-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Location</h3>
                <p>Philippines</p>
            </div>

            <div class="contact-card glass-card animate-in delay-3">
                <div class="contact-card-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Availability</h3>
                <p>Open for freelance projects</p>
            </div>

        </div>

        <div class="contact-message glass-card animate-in delay-4">
            <h3>Send a Message</h3>
            <p>
                If you need a website, video editing, photo editing,
                digital layout, or IT-related assistance, feel free to
                reach out through any of the channels below.
            </p>

            <div class="contact-actions">
                <a
                    href="mailto:18negufyayence@gmail.com"
                    class="btn btn-primary"
                >
                    <i class="fas fa-paper-plane"></i>
                    Email Me
                </a>
                <a
                    href="https://facebook.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn"
                >
                    <i class="fab fa-facebook"></i>
                    Facebook
                </a>
            </div>
        </div>

    </div>

</section>

@endsection