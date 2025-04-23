@extends('layout.layout')

@php
$headTitle = 'Home';
$counterone = 'Six';
$css = '
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
$css2 = '
<link rel="stylesheet" href="' . asset('assets/css/color-4.css') . '" />';
$script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

<!-- /.preloader -->

<div class="page-wrapper">


    <div class="stricky-header stricked-menu main-menu main-menu-six">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-six clearfix">
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
                    <div class="image-layer"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-4.jpg') }}')">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-six__content">
                                    <h2 class="main-slider-six__title">Efficient Bulk <br> Cargo Handling
                                    </h2>
                                    <p class="main-slider-six__text">Streamlining bulk cargo operations with precision, safety, and speed across ports and terminals.
                                    </p>
                                    <div class="main-slider-six__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                            Started <span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-1.jpg') }}')">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-six__content">
                                    <h2 class="main-slider-six__title">Global Shipping<br>Local Expertise
                                    </h2>
                                    <p class="main-slider-six__text">Navigating your cargo across borders with<br> efficiency, reliability, and expertise.
                                    </p>
                                    <div class="main-slider-six__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                            Started <span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-2.jpg') }}')">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-six__content">
                                    <h2 class="main-slider-six__title">Comprehensive Logistics & <br>Freight Solutions
                                    </h2>
                                    <p class="main-slider-six__text">From port to destination<br>seamless transportation through sea, road, and rail.</p>
                                    <div class="main-slider-six__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                            Started <span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-3.jpg') }}')">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-six__content">
                                    <h2 class="main-slider-six__title">End-to-End <br>Supply Chain Management</h2>
                                    <p class="main-slider-six__text">Optimizing operations with warehousing, <br>custom clearance, and freight forwarding.
                                    </p>
                                    <div class="main-slider-six__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                            Started <span class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-six__nav">
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

    <!--Feature Six Start-->
    <section class="feature-six">
        <div class="container">
            <div class="row">
                <!--Feature Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-six__single">
                        <div class="feature-six__single-inner">
                            <div class="feature-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__shape-2">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__icon">
                                <span class="icon-insurance-2"></span>
                            </div>
                            <h3 class="feature-six__title"><a href="{{ route('about') }}">Complete Solutions</a></h3>
                            <p class="feature-six__text">Seamless logistics for global trade with end-to-end services.</p>
                        </div>
                    </div>
                </div>
                <!--Feature Six Single End-->
                <!--Feature Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-six__single">
                        <div class="feature-six__single-inner">
                            <div class="feature-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__shape-2">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__icon">
                                <span class="icon-cashback"></span>
                            </div>
                            <h3 class="feature-six__title"><a href="{{ route('contact') }}">Safe & Secure Storage</a></h3>
                            <p class="feature-six__text">Modern warehousing & CFS facilities for efficient cargo management.</p>
                        </div>
                    </div>
                </div>
                <!--Feature Six Single End-->
                <!--Feature Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-six__single">
                        <div class="feature-six__single-inner">
                            <div class="feature-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__shape-2">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                            </div>
                            <div class="feature-six__icon">
                                <span class="icon-cash-flow"></span>
                            </div>
                            <h3 class="feature-six__title"><a href="{{ route('about') }}">Multimodal Transport</a></h3>
                            <p class="feature-six__text">Integrated road, rail & sea freight for timely deliveries.</p>
                        </div>
                    </div>
                </div>
                <!--Feature Six Single End-->
            </div>
        </div>
    </section>
    <!--Feature Six End-->

    <!--About Seven Start-->
    <section class="about-seven">
        <div class="about-seven__shape-4 zoominout"></div>
        <div class="about-seven__shape-5 float-bob-y"></div>
        <div class="about-seven__shape-6 float-bob-x">
            <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-6.png') }}" alt="">
        </div>
        <div class="about-seven__shape-7">
            <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-7.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-seven__left">
                        <div class="about-seven__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-seven__img">
                                <img src="{{ asset('assets/images/resources/about.jpg') }}" alt="">
                            </div>
                            <div class="about-seven__experience">
                                <div class="about-seven__experience-count-box">
                                    <h3 class="odometer" data-count="25">00</h3>
                                    <span class="about-seven__experience-plus">+</span>
                                </div>
                                <p class="about-seven__experience-text">Years working
                                    <br> Experience
                                </p>
                                <div class="about-seven__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="about-seven__shape-2 float-bob-y">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-seven__right">
                        <div class="section-title-four text-left">
                            <span class="section-title-four__tagline">about our company</span>
                            <h2 class="section-title-four__title">Delivering Excellence in Shipping & Logistics
                            </h2>
                        </div>
                        <p class="about-seven__text">With years of experience, Pearl Shiptrans Pvt Ltd is your trusted partner for shipping, cargo handling, and logistics solutions. We specialize in end-to-end supply chain management, ensuring your cargo moves safely, efficiently, and on time.
                        </p>
                        <div class="about-seven__right-bottom">
                            <div class="about-seven__right-bottom-left">
                                <ul class="about-seven__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Reliable & efficient cargo handling
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Seamless documentation & custom clearance
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Comprehensive multimodal logistics solutions
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Advanced infrastructure for warehousing & freight forwarding
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Commitment to safety & regulatory compliance
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-seven__contact">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/about-seven-contact-icon.png') }}"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <p>Contact Us</p>
                                        <h3><a href="tel:+919879513198">+91 98795 13198</a></h3>
                                    </div>
                                </div>
                                <div class="about-seven__btn-box">
                                    <a href="{{ route('about') }}" class="about-seven__btn thm-btn-three">Discover More<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                            <div class="about-seven__right-counter">
                                <div class="about-seven__shape-3 zoominout"></div>
                                <ul class="about-seven__right-counter-list list-unstyled">
                                    <li>
                                        <div class="about-seven__count-box">
                                            <div class="about-seven__count count-box">
                                                <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                            </div>
                                            <span class="about-seven__count-plus">%</span>
                                        </div>
                                        <p>Success Rate</p>
                                    </li>
                                    <li>
                                        <div class="about-seven__count-box">
                                            <div class="about-seven__count count-box">
                                                <h3 class="count-text" data-stop="5482" data-speed="1500">00</h3>
                                            </div>
                                            <span class="about-seven__count-plus">+</span>
                                        </div>
                                        <p>Satisfied Clients</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Seven End-->

    <!--Services six Start-->
    <section class="services-six">
        <div class="container">
            <div class="section-title-four text-center">
                <span class="section-title-four__tagline">Our all services</span>
                <h2 class="section-title-four__title">Comprehensive Shipping & Logistics Solutions</h2>
            </div>
            <div class="services-six__bottom">
                <div class="services-six__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1350": {
                                "items": 4
                            }
                        }
                    }'>
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/stevedoring.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('stevedoring') }}">Stevedoring</a></h3>
                            <p class="services-six__text">Efficient loading/unloading at ports
                            </p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('stevedoring') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/vessel.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('vesselAgency') }}">Vessel Agency</a></h3>
                            <p class="services-six__text">Expert port & crew management
                            </p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('vesselAgency') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/chartering.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('chartering') }}">Chartering </a></h3>
                            <p class="services-six__text">Reliable vessel charter solutions
                            </p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('chartering') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/customs-clearance.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('customClearance') }}">Custom Clearance</a>
                            </h3>
                            <p class="services-six__text">Smooth documentation & compliance</p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('customClearance') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/warehouse.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('warehousingStorage') }}">Warehousing & Storage</a></h3>
                            <p class="services-six__text">Secure storage facilities</p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('warehousingStorage') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/train-cargo.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('railHaulage') }}">Rail Haulage</a></h3>
                            <p class="services-six__text">Seamless inland cargo movement</p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('railHaulage') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/road-haulage.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('roadHaulage') }}">Road Haulage</a></h3>
                            <p class="services-six__text">Seamless inland cargo movement</p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('roadHaulage') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                    <!-- Services Six Single Start-->
                    <div class="item">
                        <div class="services-six__single">
                            <div class="services-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                            </div>
                            <div class="services-six__icon">
                                <img src="{{ asset('assets/images/icon/freight.png') }}" alt="" style="width: 50%;">
                                <div class="services-six__icon-shape-1"></div>
                                <div class="services-six__icon-shape-2"></div>
                            </div>
                            <h3 class="services-six__title"><a href="{{ route('freightForwarding') }}">Freight Forwarding</a>
                            </h3>
                            <p class="services-six__text">Global supply chain solutions</p>
                            <div class="services-six__btn-box">
                                <a href="{{ route('freightForwarding') }}" class="services-six__btn thm-btn-three">Details<span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Services Six Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Services six End-->

    <!--Counter Three Start-->
    <section class="counter-three">
        <div class="counter-three__bg"
            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/counter-three-bg.png') }}')"></div>
        <div class="container">
            <div class="counter-three__inner">
                <ul class="counter-three__count-box list-unstyled">
                    <li>
                        <div class="counter-three__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-three__icon">
                            <span class="icon-agreement"></span>
                        </div>
                        <div class="counter-three__count count-box">
                            <h3 class="count-text" data-stop="500000" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-three__text">Tons Cargo Handled</p>
                    </li>
                    <li>
                        <div class="counter-three__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-three__icon">
                            <span class="icon-group"></span>
                        </div>
                        <div class="counter-three__count count-box">
                            <h3 class="count-text" data-stop="2000" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-three__text">Vessels Assisted</p>
                    </li>
                    <li>
                        <div class="counter-three__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-three__icon">
                            <span class="icon-ring"></span>
                        </div>
                        <div class="counter-three__count count-box">
                            <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-three__text">Logistics Partners</p>
                    </li>
                    <li>
                        <div class="counter-three__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-three__icon">
                            <span class="icon-insurance-2"></span>
                        </div>
                        <div class="counter-three__count count-box">
                            <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-three__text">Countries Global Network</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter Three End-->

    <!--Testimonial Six Start-->
    <section class="testimonial-six">
        <div class="container">
            <div class="section-title-four text-center">
                <span class="section-title-four__tagline">Testimonial</span>
                <h2 class="section-title-four__title">Our Lovely Customer </h2>
            </div>
            <div class="testimonial-six__bottom">
                <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 36,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1350": {
                                "items": 1
                            }
                        }
                    }'>
                    <!--Testimonial Six Single Start-->
                    <div class="item">
                        <div class="testimonial-six__single">
                            <div class="testimonial-six__single-top">
                                <div class="testimonial-six__ratting">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-six__text">Pearl Shiptrans Pvt Ltd has been a game-changer for our supply chain. Their efficiency and professionalism are unmatched!</p>
                            </div>
                            <div class="testimonial-six__client-info-box">
                                <div class="testimonial-six__quote-icon">
                                    <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                </div>
                                <div class="testimonial-six__client-img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-six__client-info">
                                    <h3>Remedios Linared</h3>
                                    <p>Web designar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Six Single Start-->
                    <!--Testimonial Six Single Start-->
                    <div class="item">
                        <div class="testimonial-six__single">
                            <div class="testimonial-six__single-top">
                                <div class="testimonial-six__ratting">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-six__text">From stevedoring to freight forwarding, their team has handled our cargo flawlessly. Highly recommend their services.</p>
                            </div>
                            <div class="testimonial-six__client-info-box">
                                <div class="testimonial-six__quote-icon">
                                    <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                </div>
                                <div class="testimonial-six__client-img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-six__client-info">
                                    <h3>Brandon Martinez</h3>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Six Single Start-->
                    <!--Testimonial Six Single Start-->
                    <div class="item">
                        <div class="testimonial-six__single">
                            <div class="testimonial-six__single-top">
                                <div class="testimonial-six__ratting">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="testimonial-six__text">Reliable, transparent, and always on time. The best logistics partner we’ve worked with!</p>
                            </div>
                            <div class="testimonial-six__client-info-box">
                                <div class="testimonial-six__quote-icon">
                                    <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                </div>
                                <div class="testimonial-six__client-img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-six__client-info">
                                    <h3>Marjorie Worley</h3>
                                    <p>Web Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Six Single Start-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Six End-->

    <!--Why Choose Five Start-->
    <section class="why-choose-five">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="why-choose-five__left">
                        <div class="why-choose-five__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-five__img">
                                <img src="{{ asset('assets/images/resources/why-choose.jpg') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-five__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-five__shape-2">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-five__shape-3">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-3.png') }}"
                                    alt="">
                            </div>
                            <div class="why-choose-five__shape-4">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-4.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="why-choose-five__right">
                        <div class="section-title-four text-left">
                            <span class="section-title-four__tagline">WHY YOU CHOOSE US</span>
                            <h2 class="section-title-four__title">Reliable, Efficient, and Customer-Centric Logistics Partner</h2>
                        </div>
                        <ul class="why-choose-five__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-insurance"></span>
                                </div>
                                <div class="content">
                                    <h3>Industry Expertise</h3>
                                    <p>Years of experience in global shipping</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-cashback"></span>
                                </div>
                                <div class="content">
                                    <h3>End-to-End Solutions</h3>
                                    <p>Comprehensive cargo & logistics support
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-profits"></span>
                                </div>
                                <div class="content">
                                    <h3>Global Network </h3>
                                    <p>Strong partnerships across major trade routes</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-profits"></span>
                                </div>
                                <div class="content">
                                    <h3>Cutting-Edge Infrastructure </h3>
                                    <p>Advanced warehousing & cargo handling</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-profits"></span>
                                </div>
                                <div class="content">
                                    <h3>24/7 Support</h3>
                                    <p>Dedicated customer service for real-time assistance</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Five End-->



</div><!-- /.page-wrapper -->

@endsection