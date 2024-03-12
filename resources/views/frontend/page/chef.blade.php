@extends('frontend.layouts.master')

@section('content')

<!-- Hero Start -->
{{-- <div class="container-fluid bg-white mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Services</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Services</li>
        </ol>
    </div>
</div> --}}
<!-- Hero End -->
<div class="container-fluid bg-light py-6 mt-0">
    <div class="container">
        <div class="row g-5 align-items-center bg-white hero-border">
            <div class="col-lg-7 col-md-12">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Chef-At-Home</small>
                <h1 class="display-1 mb-4 animated bounceInDown">Chef-At-Home <br> Book <span class="text-primary">Cater</span>Serv For Your Dream Event</h1>
                <a href="{{ route('booking') }}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="{{ asset('frontend/img/Shef2.png') }}" class="img-fluid rounded animated bounceInUp" alt="">
            </div>
        </div>
    </div>
 </div>

<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5">Shef Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded menu-2">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            {{-- <i class="fas fa-cheese fa-7x text-primary mb-4"></i> --}}
                            <img src="{{ asset('frontend/img/Shef1.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                            <h4 class="mb-3">Mr.Nehal Chef</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInRight" data-wow-delay="0.3s">
                <div class="bg-white rounded menu-2">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <img src="{{ asset('frontend/img/Shef2.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                            <h4 class="mb-3">Mr.Zozo Chef</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInLeft" data-wow-delay="0.5s">
                <div class="bg-white rounded menu-2">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <img src="{{ asset('frontend/img/Shef3.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                            <h4 class="mb-3">Mr.Jhon Chef</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInDown" data-wow-delay="0.7s">
                <div class="bg-white rounded menu-2">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <img src="{{ asset('frontend/img/Shef1.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                            <h4 class="mb-3">Mr.Leo Chef</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@endsection

