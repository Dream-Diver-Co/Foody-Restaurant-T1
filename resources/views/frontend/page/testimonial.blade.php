@extends('frontend.layouts.master')

@section('content')

<div class="container-fluid bg-light mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Testimonial</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Testimonial</li>
        </ol>
    </div>
</div>

<!-- Testimonial Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5">What Our Customers says!</h1>
        </div>
        <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-3.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-4.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-1.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-3.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="{{ asset('frontend/img/testimonial-4.jpg') }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">Person Name</h4>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
