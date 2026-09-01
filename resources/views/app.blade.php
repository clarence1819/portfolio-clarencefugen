<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clarence Fugen — IT & Digital Creative. Web development, video editing, photo editing, and graphic design portfolio.">

    <title>@yield('title', 'Clarence Fugen') | IT & Digital Creative</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <!-- Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >

    <!-- Global styles -->
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">

    <!-- Page-specific styles -->
    @yield('styles')
</head>

<body>

    <!-- ANIMATED BACKGROUND ORBS -->
    <div class="bg-orbs" aria-hidden="true">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>

    <!-- NAVIGATION -->
    <nav id="main-nav">
        <a href="{{ route('home') }}" class="logo">
            Clarence<span>.</span>
        </a>

        <!-- Hamburger button for mobile -->
        <button class="hamburger" id="hamburger-btn" aria-label="Toggle navigation" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="nav-links" id="nav-links">
            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('skills') }}"
                   class="{{ request()->routeIs('skills') ? 'active' : '' }}">
                    Skills
                </a>
            </li>

            <li>
                <a href="{{ route('services') }}"
                   class="{{ request()->routeIs('services') ? 'active' : '' }}">
                    Services
                </a>
            </li>

            <li>
                <a href="{{ route('media') }}"
                   class="{{ request()->routeIs('media') ? 'active' : '' }}">
                    Video & Photos
                </a>
            </li>

            <li>
                <a href="{{ route('projects') }}"
                   class="{{ request()->routeIs('projects') ? 'active' : '' }}">
                    Projects
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </nav>

    <!-- Mobile nav overlay -->
    <div class="nav-overlay" id="nav-overlay"></div>

    <main class="page-transition">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                Clarence<span>.</span>
            </div>
            <p class="footer-tagline">IT & Digital Creative</p>
            <div class="footer-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('skills') }}">Skills</a>
                <a href="{{ route('projects') }}">Projects</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="footer-divider"></div>
            <p class="footer-copy">
                &copy; {{ date('Y') }} Clarence Fugen. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script>
        // Hamburger menu toggle
        const hamburger = document.getElementById('hamburger-btn');
        const navLinks = document.getElementById('nav-links');
        const navOverlay = document.getElementById('nav-overlay');

        hamburger.addEventListener('click', () => {
            const isOpen = navLinks.classList.toggle('open');
            hamburger.classList.toggle('active');
            navOverlay.classList.toggle('active');
            hamburger.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        navOverlay.addEventListener('click', () => {
            navLinks.classList.remove('open');
            hamburger.classList.remove('active');
            navOverlay.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });

        // Close mobile nav when a link is clicked
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
                hamburger.classList.remove('active');
                navOverlay.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        // Scroll-based nav background enhancement
        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-in').forEach(el => observer.observe(el));
    </script>
</body>
</html>