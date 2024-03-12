        <!-- Navbar start -->
        <div class="container-fluid nav-bar bg-white">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ route('subscription') }}" class="nav-item nav-link">Subscription</a>
                            <a href="{{ route('chef') }}" class="nav-item nav-link">Chef-At-Home</a>
                            {{-- <a href="" class="nav-item nav-link">Menu</a> --}}
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="{{ route('menu') }}" class="dropdown-item">Menu-1</a>
                                    <a href="{{ route('menu2') }}" class="dropdown-item">Menu-2</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="{{ route('booking') }}" class="dropdown-item">Booking</a>
                                    <a href="{{ route('blog') }}" class="dropdown-item">Our Blog</a>
                                    <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                                    <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="{{ route('booking') }}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
