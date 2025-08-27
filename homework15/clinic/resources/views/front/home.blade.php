{{-- Home Page --}}

{{-- Inheritance from the master layout page --}}
@extends('front.layouts.master')


{{-- Title section --}}
@section('title', 'Home Page')


{{-- Contents section --}}
@section('content')
    {{-- Header section --}}
    <div class="container-fluid bg-blue pt-3 text-white">

        <div class="container pb-5">
            <div class="row gap-2">
                <div class="col-sm order-sm-2">
                    <img src="{{ asset('/front/images/banner.jpg') }}" class="img-fluid banner-img banner-img"
                        alt="banner-image" height="200">
                </div>
                <div class="col-sm order-sm-1">
                    <h1 class="h1">Have a Medical Question?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus
                        itaque,laborumsaepeenim maxime, delectus, dicta cumque error cupiditate nobis officia quam
                        perferendis
                        consequaturcumiure
                        quod facere.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <x-success />
        {{-- Majors section --}}
        <h2 class="h1 fw-bold my-4 text-center">majors</h2>
        <div class="d-flex justify-content-center flex-wrap gap-4">
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('/front/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column justify-content-center gap-1">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                        Doctors</a>
                </div>
            </div>
        </div>

        {{-- Doctors section --}}
        <h2 class="h1 fw-bold my-4 text-center">doctors</h2>
        <section class="splide home__slider__doctors mb-5">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/index.html" class="btn btn-outline-primary card-button">Browse
                                    Doctors</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{ asset('/front/images/major.jpg') }}"
                                class="card-img-top rounded-circle card-image-circle" alt="major">
                            <div class="card-body d-flex flex-column justify-content-center gap-1">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    </div>

    <div class="banner d-block d-lg-grid d-md-block d-sm-block container">

        {{-- Information section --}}
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by
                    phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by
                    phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by
                    phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by
                    phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>

        {{-- Download app section --}}
        {{-- Left section --}}
        <div class="bottom--left bottom--content bg-blue text-white">
            <h4 class="title">download the application now</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam
                sequi
                possimus quaerat!</p>
            <div class="app-group">
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                        alt="">Google Play</div>
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                        alt="">App Store</div>
            </div>
        </div>
        {{-- Right section --}}
        <div class="bottom--right bg-blue text-white">
            <img src="{{ asset('/front/images/banner.jpg') }}" class="img-fluid banner-img">
        </div>

    </div>
@endsection
