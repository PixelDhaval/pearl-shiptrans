@extends('layout.layout')

@php
$headTitle = 'Warehousing & Storage';
$title = 'Services';
$subTitle = 'Warehousing & Storage';
$counterone = 'false';
$css = '
<link rel="stylesheet" href="' . asset('assets/vendors/insur-three-icon/style.css') . '" />';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

<!--Insurance Details Start-->
<section class="insurance-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="insurance-details__left">
                    <div class="insurance-details__services-box">
                        <ul class="insurance-details__services-list list-unstyled">
                            <li><a href="{{ route('stevedoring') }}">Stevedoring<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('vesselAgency') }}">Vessel Agency<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('chartering') }}">Chartering<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('customClearance') }}">Custom Clearance<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('railHaulage') }}">Rail Haulage<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('roadHaulage') }}">Road Haulage<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('freightForwarding') }}">Freight Forwarding<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('cfs') }}">CFS<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('cranesAndForklifts') }}">Cranes &
                                    Forklifts<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('odc') }}">Over Dimension Cargo Handling<span
                                        class="icon-right-arrow1"></span></a></li>
                            <li><a href="{{ route('bondedWarehouse') }}">Bonded Warehouse Services<span
                                        class="icon-right-arrow1"></span></a></li>
                        </ul>
                    </div>

                    <div class="insurance-details__need-help">
                        <div class="insurance-details__need-help-bg"
                            style="background-image: url('{{ asset('assets/images/update-10-02-2023/resources/insurance-details-need-help-bg.jpg') }}')">
                        </div>
                        <div class="insurance-details__need-help-icon">
                            <span class="insur-three-icon-call"></span>
                        </div>
                        <h2 class="insurance-details__need-help-title">Talk to our
                            <br>agent
                        </h2>
                        <div class="insurance-details__need-help-contact">
                            <a href="tel:+919879513198">+91 98795 13198</a>
                            <p>Call to Our Experts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="insurance-details__right">
                    <div class="insurance-details__img-1 mb-3">
                        <img src="{{ asset('assets/images/resources/warehouse-1.jpg') }}" alt="">
                    </div>
                    <p class="insurance-details__text-1">At Pearl Shiptrans Pvt Ltd, we offer state-of-the-art warehousing and storage solutions, ensuring the safety, accessibility, and efficient management of your cargo. Our strategically located facilities are equipped with modern security systems, climate control options, and advanced inventory management, providing seamless storage solutions for businesses of all sizes.</p>
                    <p class="insurance-details__text-2">Secure & Efficient Storage Solutions for Your Cargo</p>
                    <p class="insurance-details__text-3">Whether you need short-term storage, long-term warehousing, or specialized handling, we guarantee cost-effective and secure storage for your goods.</p>
                    <h2 class="section-title-four__title">Why Choose Our Warehousing & Storage Services?</h2>
                    <div class="insurance-details__opportunities">
                        <div class="insurance-details__opportunities-img">
                            <img src="{{ asset('assets/images/resources/warehouse-2.jpg') }}"
                                alt="">

                        </div>
                        <div class="insurance-details__opportunities-points-box">
                            <h3 class="insurance-details__opportunities-points-title">Secure & Well-Managed Facilities</h3>
                            <ul class="about-seven__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>24/7 security and surveillance for complete cargo safety</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Climate-controlled storage options for sensitive goods
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Organized inventory management for easy tracking and retrieval
                                        </p>
                                    </div>
                            </ul>
                        </div>
                    </div>

                    <ul class="insurance-details__points list-unstyled">
                        <li>
                            <div class="insurance-details__points-left">
                                <div class="insurance-details__points-icon">
                                    <span class="icon-easy-to-use"></span>
                                </div>
                                <h3 class="insurance-details__points-title">Flexible Storage Solutions</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>Short-term and long-term storage tailored to your needs</p>
                            </div>
                        </li>
                        <li>
                            <div class="insurance-details__points-left">
                                <div class="insurance-details__points-icon">
                                    <span class="icon-contract"></span>
                                </div>
                                <h3 class="insurance-details__points-title">Cargo Handling Efficiency</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>Efficient handling of bulk, breakbulk, and containerized cargo</p>
                            </div>
                        </li>
                        <li>
                            <div class="insurance-details__points-left">
                                <div class="insurance-details__points-icon">
                                    <span class="icon-fund"></span>
                                </div>
                                <h3 class="insurance-details__points-title">Integrated Logistics Support</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>Seamless integration with logistics and distribution services</p>
                            </div>
                        </li>
                    </ul>
                    <p class="insurance-details__text-2">With Pearl Shiptrans, ensure your cargo is stored safely, managed efficiently, and delivered on time!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Insurance Details End-->

<!--Tracking Start-->
<section class="tracking">
    <div class="container">
        <div class="tracking__inner">
            <div class="tracking-shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
            </div>
            <div class="tracking-shape-2 float-bob-x">
                <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
            </div>
            <div class="tracking-shape-3 float-bob-x">
                <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
            </div>
            <div class="tracking-shape-4 float-bob-y">
                <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
            </div>
            <div class="tracking__left">
                <div class="tracking__icon">
                    <span class="icon-folder"></span>
                </div>
                <div class="tracking__content">
                    <p class="tracking__sub-title">Get In Touch</p>
                    <h3 class="tracking__title">Partner with us for seamless shipping solutions!</h3>
                </div>
            </div>
            <div class="tracking__btn-box">
                <a href="{{ route('contact') }}" class="thm-btn tracking__btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!--Tracking End-->

@endsection