@extends('layout.layout')

@php
$headTitle = 'Home Four';
$header='false';
$counterone = 'false';
$css= '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />
       <link rel="stylesheet" href="' . asset('assets/vendors/insur-three-icon/style.css') . '" />';
$css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script= '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
          <script src="' . asset('assets/js/insur.js') . '"></script>';
$footer='false';
@endphp

@section('content')

<div class="page-wrapper">

    <header class="main-header-five">
        <div class="main-header-five__top">
            <div class="container">
                <div class="main-header-five__top-inner">
                    <div class="main-header-five__top-address">
                        <ul class="list-unstyled main-header-five__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="fas fa-envelope"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="fas fa-map-marker"></span>
                                </i>
                                <div class="text">
                                    <p>30 Broklyn Golden Street. New York</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="fas fa-phone-alt"></span>
                                </i>
                                <div class="text">
                                    <p><a href="tel:8898006802">+88 ( 9800 ) 6802</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-five__top-right">
                        <div class="main-header-five__top-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-five">
            <div class="main-menu-five__wrapper">
                <div class="container">
                    <div class="main-menu-five__wrapper-inner">
                        <div class="main-menu-five__left">
                            <div class="main-menu-five__logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-10-02-2023/resources/logo-4.png') }}" alt=""></a>
                            </div>
                            <div class="main-menu-five__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="dropdown current scrollToLink">
                                        <a href="#home">Home </a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#about">About</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#insurance">Insurance</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#team">Team</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#news">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-five__right">
                            <div class="main-menu-five__search-get-quote-btn">
                                <div class="main-menu-five__search-box">
                                    <a href="#" class="main-menu-five__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu-five__get-quote-btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn-two main-menu-five__get-quote-btn">Get a
                                        Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="stricky-header stricked-menu main-menu main-menu-five">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-five clearfix" id="home">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider-five__img">
                        <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-five-img-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-1.jpg') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-five__content">
                                    <h2 class="main-slider-five__title">Secure Your <br> Future With Insur <br>
                                        Insurance</h2>
                                    <p class="main-slider-five__text">Lorem ipsum dolor sit am adipi we help you
                                        ensure everyone is in the right <br> jobs sicing elit, sed do consulting
                                        firms.</p>
                                    <div class="main-slider-five__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-two main-slider-five__btn">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-five__img">
                        <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-five-img-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-1.jpg') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-five__content">
                                    <h2 class="main-slider-five__title">Secure Your <br> Future With Insur <br>
                                        Insurance</h2>
                                    <p class="main-slider-five__text">Lorem ipsum dolor sit am adipi we help you
                                        ensure everyone is in the right <br> jobs sicing elit, sed do consulting
                                        firms.</p>
                                    <div class="main-slider-five__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-two main-slider-five__btn">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-five__img">
                        <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-five-img-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-1.jpg') }}" alt="">
                    </div>
                    <div class="main-slider-five__shape-2 float-bob-y">
                        <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-five-shape-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-five__content">
                                    <h2 class="main-slider-five__title">Secure Your <br> Future With Insur <br>
                                        Insurance</h2>
                                    <p class="main-slider-five__text">Lorem ipsum dolor sit am adipi we help you
                                        ensure everyone is in the right <br> jobs sicing elit, sed do consulting
                                        firms.</p>
                                    <div class="main-slider-five__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-two main-slider-five__btn">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-five__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Services Five Start-->
    <section class="services-five" id="services">
        <div class="container">
            <div class="services-five__inner">
                <div class="section-title-three text-center">
                    <div class="section-title-three__sub-title-box">
                        <p class="section-title-three__sub-title">Our Top Services</p>
                        <div class="section-title-three__shape"></div>
                    </div>
                    <h2 class="section-title-three__title">Covering All the Insurance <br> Services Fields</h2>
                </div>
                <div class="owl-carousel thm-owl__carousel--range owl-theme services-five__carousel" data-owl-options='{"loop": false,
                    "nav": false,
                    "autoWidth": true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "dots": false,
                    "margin": 10,
                    "items": 1,
                    "smartSpeed": 700,
                    "responsive": {
                        "0": {
                            "margin": 30,
                            "items": 1,
                            "autoWidth": false
                        },
                        "768": {
                            "margin": 30,
                            "items": 2,
                            "autoWidth": false
                        },
                        "992": {
                            "margin": 30,
                            "items": 3
                        },
                        "1200": {
                            "margin": 30,
                            "items": 4
                        }
                    }}'>
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-1.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-car"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="car-insurance') }}">Car
                                                insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('lifeInsurance') }}">Car insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-car"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-2.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-cardiogram"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="life-insurance') }}">life insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('carInsurance') }}">life insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-cardiogram"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-3.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-home"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="home-insurance') }}">home insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('homeInsurance') }}">home
                                            insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-home"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-4.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-cross"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="health-insurance') }}">health insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('healthInsurance') }}">health
                                            insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-cross"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-1.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-car"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="car-insurance') }}">Car
                                                insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('lifeInsurance') }}">Car insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-car"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-2.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-cardiogram"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="life-insurance') }}">life insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('carInsurance') }}">life insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-cardiogram"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-3.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-home"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="home-insurance') }}">home insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('homeInsurance') }}">home
                                            insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-home"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                    <!--Services Five Single Start-->
                    <div class="item">
                        <div class="services-five__single">
                            <div class="services-five__img-box">
                                <div class="services-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-5-4.jpg') }}" alt="">
                                    <div class="services-five__hover-content">
                                        <div class="services-five__hover-content-icon">
                                            <span class="insur-three-icon-cross"></span>
                                        </div>
                                        <h4 class="services-five__hover-content-title"><a href="health-insurance') }}">health insurance</a></h4>
                                        <p class="services-five__hover-content-text">There are many lipsum of <br>
                                            passages
                                            of available but the <br> have in that not some.</p>
                                    </div>
                                </div>
                                <div class="services-five__title-box">
                                    <h4 class="services-five__title"><a href="{{ route('healthInsurance') }}">health
                                            insurance</a>
                                    </h4>
                                    <div class="services-five__icon">
                                        <span class="insur-three-icon-cross"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End-->
                </div>
                <div class="thm-owl__carousel--range__input"><input type="text" value="" name="range">
                </div>
            </div>
        </div>
    </section>
    <!--Services Five End-->

    <!--About Six Start-->
    <section class="about-six" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-six__left">
                        <div class="about-six__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-six__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/resources/about-six-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-six__help">
                                <div class="about-six__help-icon">
                                    <span class="icon-insurance-2"></span>
                                </div>
                                <div class="about-six__help-content">
                                    <p class="about-six__help-text">We’re always here <br> to help you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-six__right">
                        <div class="section-title-three text-left">
                            <div class="section-title-three__sub-title-box">
                                <p class="section-title-three__sub-title">Welcome to Insur</p>
                                <div class="section-title-three__shape"></div>
                            </div>
                            <h2 class="section-title-three__title">We’re Providing Best Insurance Policy</h2>
                        </div>
                        <p class="about-six__text-1">We Have 30 Years of Insurance Experience Globaly</p>
                        <p class="about-six__text-2">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour, or
                            randomised simply free text.</p>
                        <div class="about-six__progress-ber">
                            <div class="about-six__progress-single">
                                <div class="about-six__progress-box">
                                    <div class="circle-progress" data-options='{ "value": 0.9,"thickness": 2,"emptyFill": "#f3f3f3","lineCap": "square", "size": 118, "fill": { "color": "#ff494a" } }'>
                                    </div><!-- /.circle-progress -->
                                    <div class="about-six__pack">
                                        <p>90%</p>
                                    </div>
                                </div>
                                <p class="about-six__progress-text">Our Claims <br> Success Rates</p>
                            </div>
                            <div class="about-six__progress-single">
                                <div class="about-six__progress-box">
                                    <div class="circle-progress" data-options='{ "value": 0.5,"thickness": 2,"emptyFill": "#f3f3f3","lineCap": "square", "size": 118, "fill": { "color": "#ff494a" } }'>
                                    </div><!-- /.circle-progress -->
                                    <div class="about-six__pack">
                                        <p>50%</p>
                                    </div>
                                </div>
                                <p class="about-six__progress-text">Our Satisfied <br> Customers</p>
                            </div>
                            <div class="about-six__progress-single">
                                <div class="about-six__progress-box">
                                    <div class="circle-progress" data-options='{ "value": 0.3,"thickness": 2,"emptyFill": "#f3f3f3","lineCap": "square", "size": 118, "fill": { "color": "#ff494a" } }'>
                                    </div><!-- /.circle-progress -->
                                    <div class="about-six__pack">
                                        <p>30%</p>
                                    </div>
                                </div>
                                <p class="about-six__progress-text">Save Your <br> Money</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Six End-->

    <!--Get Insurance Four Start-->
    <section class="get-insurance-four" id="insurance">
        <div class="get-insurance-four__shape-1" style="background-image: url('{{ asset('assets/images/update-10-02-2023/shapes/get-insurance-four-shape-1.png') }}')">
        </div>
        <div class="get-insurance-four__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/update-10-02-2023/shapes/get-insurance-four-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title-three text-left">
                <div class="section-title-three__sub-title-box">
                    <p class="section-title-three__sub-title">Get a Free Quote</p>
                    <div class="section-title-three__shape"></div>
                </div>
                <h2 class="section-title-three__title">Get an Insurance Quote <br> to Get Started</h2>
            </div>
            <div class="get-insurance-four__main-tab-box tabs-box">
                <div class="row">
                    <div class="col-xl-4">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#car-insurance" class="tab-btn">
                                <div class="content-box">
                                    <div class="icon-box">
                                        <span class="insur-three-icon-car"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Car Insurance</p>
                                    </div>
                                </div>
                            </li>
                            <li data-tab="#life-insurance" class="tab-btn active-btn">
                                <div class="content-box">
                                    <div class="icon-box">
                                        <span class="insur-three-icon-cardiogram"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Life Insurance</p>
                                    </div>
                                </div>
                            </li>
                            <li data-tab="#home-insurance" class="tab-btn">
                                <div class="content-box">
                                    <div class="icon-box">
                                        <span class="insur-three-icon-home"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Home Insurance</p>
                                    </div>
                                </div>
                            </li>
                            <li data-tab="#health-insurance" class="tab-btn">
                                <div class="content-box">
                                    <div class="icon-box">
                                        <span class="insur-three-icon-cross"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Health Insurance</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8">
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab" id="car-insurance">
                                <div class="get-insurance-four__main-content">
                                    <div class="get-insurance-four__main-content-left">
                                        <h4 class="get-insurance-four__main-content-title">Life Insurance</h4>
                                        <p class="get-insurance-four__main-content-text">Lorem ipsum dolor sit am
                                            adipi we help you ensure everyone is in the right jobs sicing elit, sed
                                            do consulting firms There are many variations of passages of ipsum
                                            available but the majority.</p>
                                        <div class="get-insurance-four__call">
                                            <div class="get-insurance-four__call-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="get-insurance-four__call-content">
                                                <p>Facing problem to get a quote!</p>
                                                <a href="tel:9288000000">+92 (8800) 0000</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="get-insurance-four__main-content-right">
                                        <form class="get-insurance-four__form">
                                            <div class="get-insurance-four__content-box">
                                                <div class="get-insurance-four__input-box">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <select class="selectpicker" aria-label="Default select example">
                                                        <option selected>Select type of insurance
                                                        </option>
                                                        <option value="1">Car insurance</option>
                                                        <option value="2">Life insurance</option>
                                                        <option value="3">Home insurance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="get-insurance__progress">
                                                <div class="get-insurance__progress-single">
                                                    <h4 class="get-insurance__progress-title">Limits of Balance:
                                                    </h4>
                                                    <div class="get-insurance__progress-range">
                                                        <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="70000" data-min="0" data-max="90000" value="">
                                                        <div class="get-insurance__balance-box">
                                                            <p class="get-insurance__balance">$<span></span></p>
                                                        </div>
                                                        <input type="hidden" class="get-insurance__balance__input">
                                                    </div><!-- /.get-insurance__progress-range -->
                                                </div>
                                            </div>
                                            <div class="get-insurance-four__content-bottom">
                                                <button type="submit" class="thm-btn-two get-insurance-four__btn">Get a Quote
                                                    Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab active-tab" id="life-insurance">
                                <div class="get-insurance-four__main-content">
                                    <div class="get-insurance-four__main-content-left">
                                        <h4 class="get-insurance-four__main-content-title">Life Insurance</h4>
                                        <p class="get-insurance-four__main-content-text">Lorem ipsum dolor sit am
                                            adipi we help you ensure everyone is in the right jobs sicing elit, sed
                                            do consulting firms There are many variations of passages of ipsum
                                            available but the majority.</p>
                                        <div class="get-insurance-four__call">
                                            <div class="get-insurance-four__call-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="get-insurance-four__call-content">
                                                <p>Facing problem to get a quote!</p>
                                                <a href="tel:9288000000">+92 (8800) 0000</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="get-insurance-four__main-content-right">
                                        <form class="get-insurance-four__form">
                                            <div class="get-insurance-four__content-box">
                                                <div class="get-insurance-four__input-box">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <select class="selectpicker" aria-label="Default select example">
                                                        <option selected>Select type of insurance
                                                        </option>
                                                        <option value="1">Car insurance</option>
                                                        <option value="2">Life insurance</option>
                                                        <option value="3">Home insurance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="get-insurance__progress">
                                                <div class="get-insurance__progress-single">
                                                    <h4 class="get-insurance__progress-title">Limits of Balance:
                                                    </h4>
                                                    <div class="get-insurance__progress-range">
                                                        <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="70000" data-min="0" data-max="90000" value="">
                                                        <div class="get-insurance__balance-box">
                                                            <p class="get-insurance__balance">$<span></span></p>
                                                        </div>
                                                        <input type="hidden" class="get-insurance__balance__input">
                                                    </div><!-- /.get-insurance__progress-range -->
                                                </div>
                                            </div>
                                            <div class="get-insurance-four__content-bottom">
                                                <button type="submit" class="thm-btn-two get-insurance-four__btn">Get a Quote
                                                    Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab" id="home-insurance">
                                <div class="get-insurance-four__main-content">
                                    <div class="get-insurance-four__main-content-left">
                                        <h4 class="get-insurance-four__main-content-title">Life Insurance</h4>
                                        <p class="get-insurance-four__main-content-text">Lorem ipsum dolor sit am
                                            adipi we help you ensure everyone is in the right jobs sicing elit, sed
                                            do consulting firms There are many variations of passages of ipsum
                                            available but the majority.</p>
                                        <div class="get-insurance-four__call">
                                            <div class="get-insurance-four__call-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="get-insurance-four__call-content">
                                                <p>Facing problem to get a quote!</p>
                                                <a href="tel:9288000000">+92 (8800) 0000</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="get-insurance-four__main-content-right">
                                        <form class="get-insurance-four__form">
                                            <div class="get-insurance-four__content-box">
                                                <div class="get-insurance-four__input-box">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <select class="selectpicker" aria-label="Default select example">
                                                        <option selected>Select type of insurance
                                                        </option>
                                                        <option value="1">Car insurance</option>
                                                        <option value="2">Life insurance</option>
                                                        <option value="3">Home insurance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="get-insurance__progress">
                                                <div class="get-insurance__progress-single">
                                                    <h4 class="get-insurance__progress-title">Limits of Balance:
                                                    </h4>
                                                    <div class="get-insurance__progress-range">
                                                        <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="70000" data-min="0" data-max="90000" value="">
                                                        <div class="get-insurance__balance-box">
                                                            <p class="get-insurance__balance">$<span></span></p>
                                                        </div>
                                                        <input type="hidden" class="get-insurance__balance__input">
                                                    </div><!-- /.get-insurance__progress-range -->
                                                </div>
                                            </div>
                                            <div class="get-insurance-four__content-bottom">
                                                <button type="submit" class="thm-btn-two get-insurance-four__btn">Get a Quote
                                                    Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab" id="health-insurance">
                                <div class="get-insurance-four__main-content">
                                    <div class="get-insurance-four__main-content-left">
                                        <h4 class="get-insurance-four__main-content-title">Life Insurance</h4>
                                        <p class="get-insurance-four__main-content-text">Lorem ipsum dolor sit am
                                            adipi we help you ensure everyone is in the right jobs sicing elit, sed
                                            do consulting firms There are many variations of passages of ipsum
                                            available but the majority.</p>
                                        <div class="get-insurance-four__call">
                                            <div class="get-insurance-four__call-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="get-insurance-four__call-content">
                                                <p>Facing problem to get a quote!</p>
                                                <a href="tel:9288000000">+92 (8800) 0000</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="get-insurance-four__main-content-right">
                                        <form class="get-insurance-four__form">
                                            <div class="get-insurance-four__content-box">
                                                <div class="get-insurance-four__input-box">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insurance-four__input-box">
                                                    <select class="selectpicker" aria-label="Default select example">
                                                        <option selected>Select type of insurance
                                                        </option>
                                                        <option value="1">Car insurance</option>
                                                        <option value="2">Life insurance</option>
                                                        <option value="3">Home insurance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="get-insurance__progress">
                                                <div class="get-insurance__progress-single">
                                                    <h4 class="get-insurance__progress-title">Limits of Balance:
                                                    </h4>
                                                    <div class="get-insurance__progress-range">
                                                        <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="70000" data-min="0" data-max="90000" value="">
                                                        <div class="get-insurance__balance-box">
                                                            <p class="get-insurance__balance">$<span></span></p>
                                                        </div>
                                                        <input type="hidden" class="get-insurance__balance__input">
                                                    </div><!-- /.get-insurance__progress-range -->
                                                </div>
                                            </div>
                                            <div class="get-insurance-four__content-bottom">
                                                <button type="submit" class="thm-btn-two get-insurance-four__btn">Get a Quote
                                                    Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Get Insurance Four End-->

    <!--Team Four Start-->
    <section class="team-four" id="team">
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__sub-title-box">
                    <p class="section-title-three__sub-title">Meet Our Team</p>
                    <div class="section-title-three__shape"></div>
                </div>
                <h2 class="section-title-three__title">Awesome Experienced <br> Team Ready to Help</h2>
            </div>
            <div class="team-four__inner">
                <div class="row">
                    <!--Team Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-four__single">
                            <div class="team-four__img-box">
                                <div class="team-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-4-1.jpg') }}" alt="">
                                </div>
                                <div class="team-four__content">
                                    <h4 class="team-four__name"><a href="{{ route('teamDetails') }}">Kevin Martin</a></h4>
                                    <p class="team-four__text">Manager</p>
                                    <ul class="list-unstyled team-four__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-four__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Four Single End-->
                    <!--Team Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-four__single">
                            <div class="team-four__img-box">
                                <div class="team-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-4-2.jpg') }}" alt="">
                                </div>
                                <div class="team-four__content">
                                    <h4 class="team-four__name"><a href="{{ route('teamDetails') }}">Jessica Brown</a></h4>
                                    <p class="team-four__text">Manager</p>
                                    <ul class="list-unstyled team-four__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-four__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Four Single End-->
                    <!--Team Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-four__single">
                            <div class="team-four__img-box">
                                <div class="team-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-4-1.jpg') }}" alt="">
                                </div>
                                <div class="team-four__content">
                                    <h4 class="team-four__name"><a href="{{ route('teamDetails') }}">Mike Hardson</a></h4>
                                    <p class="team-four__text">Manager</p>
                                    <ul class="list-unstyled team-four__social-two">
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                    <ul class="list-unstyled team-four__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Four Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Team Four End-->

    <!--Brand One Start-->
    <x-brandOne />
    <!--Brand One End-->

    <!--Why Choose Four Start-->
    <section class="why-choose-four">
        <div class="why-choose-four__bg-box">
            <div class="why-choose-four__bg-one" style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/why-choose-four-bg-1.jpg') }}')">
            </div>
        </div>
        <div class="why-choose-four__bg-box-two">
            <div class="why-choose-four__bg-two" style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/why-choose-four-bg-2.jpg') }}')">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-four__left">
                        <div class="section-title-three text-left">
                            <div class="section-title-three__sub-title-box">
                                <p class="section-title-three__sub-title">Why Choose Us</p>
                                <div class="section-title-three__shape"></div>
                            </div>
                            <h2 class="section-title-three__title">We Create Opportunity to Reach Our All the
                                Customers</h2>
                        </div>
                        <p class="why-choose-four__text">There are many variations of passages of Lorem Ipsum
                            available, <br> but the majority have suffered alteration in some form, by <br> injected
                            humour,
                            or randomised words.</p>
                        <div class="why-choose-four__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn-two why-choose-four__btn">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-four__right">
                        <ul class="list-unstyled why-choose-four__points">
                            <li>
                                <div class="why-choose-four__points-icon-box">
                                    <div class="why-choose-four__points-icon">
                                        <span class="icon-easy-to-use"></span>
                                    </div>
                                    <div class="why-choose-four__points-text">
                                        <p>Fast & Easy <br> Process</p>
                                    </div>
                                </div>
                                <div class="why-choose-four__points-content-box">
                                    <p class="why-choose-four__points-content">There are many not of age of rm
                                        available
                                        the majority.</p>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-four__points-icon-box">
                                    <div class="why-choose-four__points-icon">
                                        <span class="icon-contract"></span>
                                    </div>
                                    <div class="why-choose-four__points-text">
                                        <p>Quick Claim <br> Handle</p>
                                    </div>
                                </div>
                                <div class="why-choose-four__points-content-box">
                                    <p class="why-choose-four__points-content">There are many not of age of rm
                                        available
                                        the majority.</p>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-four__points-icon-box">
                                    <div class="why-choose-four__points-icon">
                                        <span class="icon-fund"></span>
                                    </div>
                                    <div class="why-choose-four__points-text">
                                        <p>Save Your <br> Money</p>
                                    </div>
                                </div>
                                <div class="why-choose-four__points-content-box">
                                    <p class="why-choose-four__points-content">There are many not of age of rm
                                        available
                                        the majority.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Four End-->

    <!--Testimonial Five Start-->
    <section class="testimonial-five">
        <div class="testimonial-five__shape-1" style="background-image: url('{{ asset('assets/images/update-10-02-2023/shapes/testimonial-five-shape-1.png') }}')">
        </div>
        <div class="container">
            <div class="section-title-three text-center">
                <div class="section-title-three__sub-title-box">
                    <p class="section-title-three__sub-title">Our Feedbacks</p>
                    <div class="section-title-three__shape"></div>
                </div>
                <h2 class="section-title-three__title">What They’re Talking?</h2>
            </div>
            <div class="testimonial-five__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 2
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                <!--Testimonial Five Single Start-->
                <div class="item">
                    <div class="testimonial-five__single">
                        <div class="testimonial-five__content">
                            <div class="testimonial-five__rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="testimonial-five__text">“All of our lorries are fitted with Satellite Tracking
                                and Temperature Controlled monitoring systems so that the transportation of high
                                value and temperature sensitive loads can be monitored at all times.</p>
                        </div>
                        <div class="testimonial-five__client-info">
                            <div class="testimonial-five__client-img">
                                <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-5-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-five__client-content">
                                <p class="testimonial-five__client-sub-title">Co Founder</p>
                                <h4 class="testimonial-five__client-name">David Cooper</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Five Single End-->
                <!--Testimonial Five Single Start-->
                <div class="item">
                    <div class="testimonial-five__single">
                        <div class="testimonial-five__content">
                            <div class="testimonial-five__rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="testimonial-five__text">“All of our lorries are fitted with Satellite Tracking
                                and Temperature Controlled monitoring systems so that the transportation of high
                                value and temperature sensitive loads can be monitored at all times.</p>
                        </div>
                        <div class="testimonial-five__client-info">
                            <div class="testimonial-five__client-img">
                                <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-5-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-five__client-content">
                                <p class="testimonial-five__client-sub-title">Co Founder</p>
                                <h4 class="testimonial-five__client-name">Sarah Albert</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Five Single End-->
                <!--Testimonial Five Single Start-->
                <div class="item">
                    <div class="testimonial-five__single">
                        <div class="testimonial-five__content">
                            <div class="testimonial-five__rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="testimonial-five__text">“All of our lorries are fitted with Satellite Tracking
                                and Temperature Controlled monitoring systems so that the transportation of high
                                value and temperature sensitive loads can be monitored at all times.</p>
                        </div>
                        <div class="testimonial-five__client-info">
                            <div class="testimonial-five__client-img">
                                <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-5-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-five__client-content">
                                <p class="testimonial-five__client-sub-title">Co Founder</p>
                                <h4 class="testimonial-five__client-name">Michale Smith</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Five Single End-->
            </div>
        </div>
    </section>
    <!--Testimonial Five End-->

    <!--News Five Start-->
    <section class="news-five" id="news">
        <div class="container">
            <div class="news-five__top">
                <div class="section-title-three text-left">
                    <div class="section-title-three__sub-title-box">
                        <p class="section-title-three__sub-title">Recent News Feed</p>
                        <div class="section-title-three__shape"></div>
                    </div>
                    <h2 class="section-title-three__title">Latest News & Articles <br> From the Blog</h2>
                </div>
                <div class="news-five__top-btn-box">
                    <a href="#" class="thm-btn-two news-five__top-btn">View All news</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="news-five__left">
                        <div class="news-five__left-img">
                            <img src="{{ asset('assets/images/update-10-02-2023/blog/news-5-1.jpg') }}" alt="">
                            <div class="news-five__left-content">
                                <ul class="list-unstyled news-five__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-five__title"><a href="{{ route('newsDetails') }}">Which Allows You to Pay
                                        <br>
                                        Insurance Bill</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="news-five__right">
                        <ul class="list-unstyled news-five__list">
                            <li>
                                <div class="news-five__list-img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/blog/news-5-2.jpg') }}" alt="">
                                </div>
                                <div class="news-five__list-content">
                                    <ul class="list-unstyled news-five__meta-two">
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-five__title-two"><a href="{{ route('newsDetails') }}">Which Allows You to
                                            <br> Pay Insurance Bill</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="news-five__list-img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/blog/news-5-3.jpg') }}" alt="">
                                </div>
                                <div class="news-five__list-content">
                                    <ul class="list-unstyled news-five__meta-two">
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-five__title-two"><a href="{{ route('newsDetails') }}">Lorem ipsum dolor
                                            sit
                                            <br> amet, consectetur</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="news-five__list-img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/blog/news-5-4.jpg') }}" alt="">
                                </div>
                                <div class="news-five__list-content">
                                    <ul class="list-unstyled news-five__meta-two">
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-five__title-two"><a href="{{ route('newsDetails') }}">Suspendisse posuere
                                            <br> leo ac laoreet</a></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Five End-->

    <!--Tracking Three Start-->
    <section class="tracking-three">
        <div class="container">
            <div class="tracking-three__inner">
                <div class="tracking-three__bg" style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/tracking-three-bg.jpg') }}')">
                </div>
                <div class="tracking-three__shape-1" style="background-image: url('{{ asset('assets/images/update-10-02-2023/shapes/tracking-three-shape-1.png') }}')">
                </div>
                <div class="tracking-three__title-box">
                    <p class="tracking-three__sub-title">Quisque vel ortor</p>
                    <h3 class="tracking-three__title">Start Tracking Your Claims</h3>
                </div>
                <div class="tracking-three__form-box">
                    <form class="tracking-three__form">
                        <div class="tracking-three__input-box">
                            <input type="text" placeholder="Enter Tracking Number" name="Number">
                            <button type="submit" class="tracking-three__btn thm-btn-two">Track your claim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Tracking Three End-->

    <!--Site Footer Start-->
    <footer class="site-footer-three">
        <div class="container">
            <div class="site-footer-three__top">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget-three__about">
                            <div class="footer-widget-three__logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-10-02-2023/resources/footer-logo-2.png') }}" alt=""></a>
                            </div>
                            <div class="footer-widget-three__about-text-box">
                                <p class="footer-widget-three__about-text">Aliqua id fugiat nostrud irure ex duis ea
                                    quis id quis ad et. Sunt qui esse pariatur duis deserunt.</p>
                            </div>
                            <div class="footer-widget-three__btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn-two footer-widget-three__btn">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget-three__links clearfix">
                            <h3 class="footer-widget-three__title">Links</h3>
                            <ul class="footer-widget-three__links-list list-unstyled clearfix">
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('insurance01') }}">Insurance</a></li>
                                <li><a href="{{ route('portfolio') }}">Latest Portfolio</a></li>
                                <li><a href="{{ route('faq') }}">Our Faqs</a></li>
                                <li><a href="{{ route('contact') }}">Get in Touch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget-three__latest-news clearfix">
                            <h3 class="footer-widget-three__title">Latest News</h3>
                            <ul class="footer-widget-three__latest-news-list list-unstyled clearfix">
                                <li>
                                    <div class="footer-widget-three__latest-news-img">
                                        <img src="{{ asset('assets/images/update-10-02-2023/resources/footer-widget-three-latest-news-img-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="footer-widget-three__latest-news-content">
                                        <p class="footer-widget-three__latest-news-date">20 Jan, 2023</p>
                                        <h4 class="footer-widget-three__latest-news-title"><a href="news-details') }}">Our Insurance Strategy <br> for Large
                                                Business</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-three__latest-news-img">
                                        <img src="{{ asset('assets/images/update-10-02-2023/resources/footer-widget-three-latest-news-img-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="footer-widget-three__latest-news-content">
                                        <p class="footer-widget-three__latest-news-date">20 Jan, 2023</p>
                                        <h4 class="footer-widget-three__latest-news-title"><a href="news-details') }}">Lorem ipsum dolor <br> sit amet</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget-three__contact clearfix">
                            <h3 class="footer-widget-three-contact__title">Contact</h3>
                            <ul class="footer-widget-three__contact-list list-unstyled clearfix">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-square-alt"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:8889990000">888 999 0000</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@insur.com">needhelp@insur.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="text">
                                        <p>30 road, broklyn street <br> new york 600</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-three__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer-three__bottom-inner">
                            <p class="site-footer-three__bottom-text">© All Copyright 2023 by <a href="#">Insur.com</a>
                            </p>
                            <div class="site-footer-three__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->

</div><!-- /.page-wrapper -->

@endsection