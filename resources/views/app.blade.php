<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Clarence Fugen — IT & Digital Creative. Web development, video editing, photo editing, and graphic design portfolio."
    >

    <title>@yield('title', 'Clarence Fugen') | IT & Digital Creative</title>


    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet"
    >


    <!-- FONT AWESOME -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >


    <!-- GLOBAL CSS -->

    <link
        rel="stylesheet"
        href="/styles/app.css"
    >


    <!-- PAGE CSS -->

    @yield('styles')

</head>


<body>


    <!-- =========================
         BACKGROUND ORBS
    ========================== -->

    <div
        class="bg-orbs"
        aria-hidden="true"
    >

        <div class="orb orb-1"></div>

        <div class="orb orb-2"></div>

        <div class="orb orb-3"></div>

    </div>



    <!-- =========================
         NAVIGATION
    ========================== -->

    <nav id="main-nav">

        <!-- LOGO -->

        <a
            href="/"
            class="logo"
        >
            Clarence<span>.</span>
        </a>


        <!-- MOBILE BUTTON -->

        <button
            class="hamburger"
            id="hamburger-btn"
            aria-label="Toggle navigation"
            aria-expanded="false"
        >

            <span class="hamburger-line"></span>

            <span class="hamburger-line"></span>

            <span class="hamburger-line"></span>

        </button>


        <!-- NAVIGATION LINKS -->

        <ul
            class="nav-links"
            id="nav-links"
        >

            <li>
                <a href="/">
                    Home
                </a>
            </li>


            <li>
                <a href="/about/">
                    About
                </a>
            </li>


            <li>
                <a href="/skills/">
                    Skills
                </a>
            </li>


            <li>
                <a href="/services/">
                    Services
                </a>
            </li>


            <li>
                <a href="/media/">
                    Video & Photos
                </a>
            </li>


            <li>
                <a href="/projects/">
                    Projects
                </a>
            </li>


            <li>
                <a href="/contact/">
                    Contact
                </a>
            </li>

        </ul>

    </nav>



    <!-- MOBILE NAV OVERLAY -->

    <div
        class="nav-overlay"
        id="nav-overlay"
    ></div>



    <!-- =========================
         PAGE CONTENT
    ========================== -->

    <main class="page-transition">

        @yield('content')

    </main>



    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <div class="footer-inner">


            <div class="footer-brand">

                Clarence<span>.</span>

            </div>


            <p class="footer-tagline">

                IT & Digital Creative

            </p>


            <div class="footer-links">

                <a href="/">
                    Home
                </a>

                <a href="/about/">
                    About
                </a>

                <a href="/skills/">
                    Skills
                </a>

                <a href="/projects/">
                    Projects
                </a>

                <a href="/contact/">
                    Contact
                </a>

            </div>


            <div class="footer-divider"></div>


            <p class="footer-copy">

                &copy; {{ date('Y') }}
                Clarence Fugen.
                All Rights Reserved.

            </p>

        </div>

    </footer>



    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        // MOBILE MENU

        const hamburger =
            document.getElementById('hamburger-btn');

        const navLinks =
            document.getElementById('nav-links');

        const navOverlay =
            document.getElementById('nav-overlay');


        hamburger.addEventListener('click', () => {

            const isOpen =
                navLinks.classList.toggle('open');

            hamburger.classList.toggle('active');

            navOverlay.classList.toggle('active');

            hamburger.setAttribute(
                'aria-expanded',
                isOpen
            );

            document.body.style.overflow =
                isOpen ? 'hidden' : '';

        });


        navOverlay.addEventListener('click', () => {

            navLinks.classList.remove('open');

            hamburger.classList.remove('active');

            navOverlay.classList.remove('active');

            hamburger.setAttribute(
                'aria-expanded',
                'false'
            );

            document.body.style.overflow = '';

        });


        // CLOSE MOBILE MENU

        navLinks
            .querySelectorAll('a')
            .forEach(link => {

                link.addEventListener('click', () => {

                    navLinks.classList.remove('open');

                    hamburger.classList.remove('active');

                    navOverlay.classList.remove('active');

                    hamburger.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                    document.body.style.overflow = '';

                });

            });


        // NAVIGATION SCROLL EFFECT

        const nav =
            document.getElementById('main-nav');


        window.addEventListener('scroll', () => {

            if (window.scrollY > 60) {

                nav.classList.add('scrolled');

            } else {

                nav.classList.remove('scrolled');

            }

        });


        // ANIMATIONS

        const observerOptions = {

            threshold: 0.1,

            rootMargin: '0px 0px -50px 0px'

        };


        const observer =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                'visible'
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                observerOptions
            );


        document
            .querySelectorAll('.animate-in')
            .forEach(el => {

                observer.observe(el);

            });

    </script>


</body>

</html>