@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')


<!-- Profile & About Side by Side -->
<section class="section fade-in">
    <div class="container">
        <div class="profile-about-row">
            <div class="slide-in-left">
                <img src="{{ asset('images/yap.jpg') }}" alt="{{ $portfolio['name'] }}" class="profile-img">
            </div>
            <div class="about-info slide-in-right">
                <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>
                <h3 class="mb-4">{{ $portfolio['title'] }}</h3>
                <p class="lead mb-4">{{ $portfolio['bio'] }}</p>
                <ul class="list-unstyled mb-3">
                    <li><strong>Email:</strong> {{ $portfolio['email'] }}</li>
                    <li><strong>Phone:</strong> {{ $portfolio['phone'] }}</li>
                    <li><strong>Location:</strong> {{ $portfolio['location'] }}</li>
                </ul>
                <div>
                    <strong>Skills:</strong>
                    @foreach($portfolio['skills'] as $skill)
                        <span class="skill-tag">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->

<section id="projects" class="section projects-dark-bg fade-in">

    <div class="container">
    <h2 class="section-title text-white">My Projects</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card project-card fade-in" style="animation-delay:0.1s;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Animation</h4>
                        <p class="card-text">Creative animation projects using modern web and graphic tools. Includes motion graphics, SVG, and CSS/JS animation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card project-card fade-in" style="animation-delay:0.2s;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Coding</h4>
                        <p class="card-text">Web and software development projects, including Laravel, JavaScript, and full-stack solutions for real-world problems.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card project-card fade-in" style="animation-delay:0.3s;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Gaming</h4>
                        <p class="card-text">Game development and interactive experiences, from browser games to game design concepts and prototypes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section fade-in">
    <script>
        // Animate on scroll
        document.addEventListener('DOMContentLoaded', function() {
            function animateOnScroll() {
                document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(function(el) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 50) {
                        el.style.animationPlayState = 'running';
                    }
                });
            }
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <form method="POST" action="#" class="contact-form" autocomplete="off">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="facebook" class="form-label"><i class="fab fa-facebook"></i> Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook profile link">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="instagram" class="form-label"><i class="fab fa-instagram"></i> Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram profile link">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="gmail" class="form-label"><i class="fas fa-envelope"></i> Gmail</label>
                    <input type="email" class="form-control" id="gmail" name="gmail" placeholder="Gmail address">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label"><i class="fas fa-at"></i> Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Other email address">
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label"><i class="fas fa-comment-dots"></i> Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100"><i class="fas fa-paper-plane"></i> Send Message</button>
        </form>
    </div>
</section>

@endsection