<style>
    footer{
        background-color: rgba(0, 0, 0, 0.9);
    }
</style>
<footer class=" text-light mt-auto">
    <div class="container py-4">

        <div class="row">

            {{-- Website Info --}}
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">MyWebsite</h5>
                <p class="small">
                    This is a demo Laravel website layout. <br>
                    Built using Laravel Blade & Bootstrap 5.
                </p>
            </div>

            {{-- Quick Links --}}
            <div class="col-md-4 mb-3">
                <h6 class="fw-semibold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-light text-decoration-none">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-light text-decoration-none">Contact</a>
                    </li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div class="col-md-4 mb-3">
                <h6 class="fw-semibold">Contact</h6>
                <p class="small mb-1">Email: info@mywebsite.com</p>
                <p class="small mb-1">Phone: +91 90000 00000</p>
                <p class="small mb-0">Location: India</p>
            </div>
            {{-- Social Links --}}
            <div class="d-flex gap-2">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <hr class="border-secondary">

        {{-- Copyright --}}
        <div class="text-center">
            © {{ date('Y') }} MyWebsite. All rights reserved.
        </div>
    </div>
</footer>