<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'yap portfolio')</title>

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">


    <!-- Font Awesome -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <button id="navbarToggle" class="btn btn-dark" style="position:fixed;top:20px;left:20px;z-index:1051;">
        <i class="fas fa-bars"></i>
    </button>
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top hidden-navbar">
        <div class="container">
            <a class="navbar-brand" href="#home">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('mainNavbar');
            const toggle = document.getElementById('navbarToggle');
            toggle.addEventListener('click', function() {
                navbar.classList.toggle('hidden-navbar');
            });
            // Smooth scroll for navbar links
            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 60,
                                behavior: 'smooth'
                            });
                        }
                        navbar.classList.add('hidden-navbar');
                    }
                });
            });
        });
    </script>

    <!-- Main Content -->

    @yield('content')

    <!-- Footer -->

    <footer>

        <div class="container text-center">
            <p class="mb-0">© {{ date('Y') }} Portfolio. Built with Laravel {{ app()->version() }}</p>
        </div>

    </footer>

</body>

</html>