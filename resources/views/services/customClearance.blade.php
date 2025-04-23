@extends('layout.layout')

@php
$headTitle = 'Custom Clearance';
$title = 'Services';
$subTitle = 'Custom Clearance';
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
                            <li><a href="{{ route('warehousingStorage') }}">Warehousing &
                                    Storage<span
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
                        <img src="{{ asset('assets/images/resources/custom-clearance-1.jpg') }}" alt="">
                    </div>
                    <p class="insurance-details__text-1">At Pearl Shiptrans Pvt Ltd, we provide efficient and reliable customs clearance services, ensuring smooth, timely, and compliant import and export operations. Our team of experienced professionals handles all regulatory formalities, minimizing delays and ensuring seamless cargo movement through ports.</p>
                    <p class="insurance-details__text-2">Hassle-Free Documentation & Regulatory Compliance</p>
                    <p class="insurance-details__text-3">With in-depth knowledge of customs laws, tariffs, and trade regulations, we help businesses navigate complex clearance procedures while optimizing costs and avoiding penalties.</p>
                    <h2 class="section-title-four__title">Why Choose Our Custom Clearance Services?</h2>
                    <div class="insurance-details__opportunities">
                        <div class="insurance-details__opportunities-img">
                            <img src="{{ asset('assets/images/resources/custom-clearance-2.jpg') }}"
                                alt="">

                        </div>
                        <div class="insurance-details__opportunities-points-box">
                            <h3 class="insurance-details__opportunities-points-title">Expert Regulatory Handling</h3>
                            <ul class="about-seven__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Complete documentation for import/export clearance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Compliance with international trade laws and customs regulations
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Liaison with customs officials for smooth approvals
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
                                <h3 class="insurance-details__points-title">Efficient Shipment Processing:</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>Quick processing to minimize shipment delays</p>
                            </div>
                        </li>
                        <li>
                            <div class="insurance-details__points-left">
                                <div class="insurance-details__points-icon">
                                    <span class="icon-contract"></span>
                                </div>
                                <h3 class="insurance-details__points-title">Customs Duty Assistance</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>Duty and tariff calculation assistance</p>
                            </div>
                        </li>
                        <li>
                            <div class="insurance-details__points-left">
                                <div class="insurance-details__points-icon">
                                    <span class="icon-fund"></span>
                                </div>
                                <h3 class="insurance-details__points-title">Real-Time Tracking & Updates</h3>
                            </div>
                            <div class="insurance-details__points-right">
                                <p>End-to-end tracking and status updates</p>
                            </div>
                        </li>
                    </ul>
                    <p class="insurance-details__text-2">With Pearl Shiptrans, experience seamless, stress-free, and compliant customs clearance for your global trade needs!</p>
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