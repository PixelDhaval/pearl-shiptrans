@extends('layout.layout')

@php
$headTitle = 'About';
$title='ABOUT';
$subTitle = 'About us';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

<!--About Four Start-->
<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-four__left">
                    <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="about-four__img">
                            <img src="{{ asset('assets/images/backgrounds/about-2.jpg') }}" style="width: 80%;" alt="">
                        </div>
                        <div class="about-four__img-two">
                            <img src="{{ asset('assets/images/backgrounds/about-1.jpg') }}" style="width: 80%; margin: 0 10%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-four__right">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">About company</p>
                            <div class="section-title-shape-1">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Navigating Excellence in Shipping & Logistics
                        </h2>
                    </div>
                    <p class="about-four__text-2">Pearl Shiptrans Pvt Ltd, formerly known as Pearl Shipping, is the flagship company of our group—one of the most trusted and well-established shipping companies in Gujarat. Since our humble beginnings in 1989, we have grown into a leader in stevedoring, vessel agency, chartering, and custom clearance, ensuring seamless cargo movement across ports.</p>
                    <p class="about-four__text-2">Led by Capt. J.S. Kalra, a shipping veteran with 40 years of experience, our company thrives on expertise, reliability, and customer-centric solutions. With 16 years of sailing experience as a master mariner, Capt. Kalra has successfully built a business that upholds global shipping standards and operational excellence.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Four End-->

<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="testimonial-two-shape-1"
        style="background-image: url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="testimonial-two__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">testimonials</p>
                            <div class="section-title-shape-1">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">What our happy customers are talking about our
                            company</h2>
                    </div>
                    
                    <div class="testimonial-two__point-box">
                        <ul class="list-unstyled testimonial-two__point">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Over 35 Years of<br>
                                     Shipping Excellence
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Led by Industry <br>Experts with 40+ <br>Years of Experience</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled testimonial-two__point testimonial-two__point-two">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Comprehensive Shipping <br>& Logistics Services</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Trusted Partner for <br>Global Trade & <br>Cargo Handling</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-two__right">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                        data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 0,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
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
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                        <div class="testimonial-two__wrap">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two-shape-2">
                                        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__content-box">
                                        <h5 class="testimonial-two__client-name">Jessica Brown</h5>
                                        <p class="testimonial-two__text-2">Pearl Shiptrans Pvt Ltd has been a game-changer for our supply chain. Their efficiency and professionalism are unmatched!</p>
                                    </div>
                                    <div class="testimonial-two__client-review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial-two__founder-box">
                                    <div class="testimonial-two__founder">
                                        <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                        <div class="testimonial-two__founder-shape">
                                            <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-img-box">
                                        <div class="testimonial-two__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two-shape-2">
                                        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__content-box">
                                        <h5 class="testimonial-two__client-name">Smith Vectoria</h5>
                                        <p class="testimonial-two__text-2">From stevedoring to freight forwarding, their team has handled our cargo flawlessly. Highly recommend their services.</p>
                                    </div>
                                    <div class="testimonial-two__client-review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial-two__founder-box">
                                    <div class="testimonial-two__founder">
                                        <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                        <div class="testimonial-two__founder-shape">
                                            <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-img-box">
                                        <div class="testimonial-two__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two__wrap">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two-shape-2">
                                        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__content-box">
                                        <h5 class="testimonial-two__client-name">Hallen Smith</h5>
                                        <p class="testimonial-two__text-2">Reliable, transparent, and always on time. The best logistics partner we’ve worked with!</p>
                                    </div>
                                    <div class="testimonial-two__client-review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial-two__founder-box">
                                    <div class="testimonial-two__founder">
                                        <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                        <div class="testimonial-two__founder-shape">
                                            <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-img-box">
                                        <div class="testimonial-two__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-inner">
                                    <div class="testimonial-two-shape-2">
                                        <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__content-box">
                                        <h5 class="testimonial-two__client-name">Kevin Martin</h5>
                                        <p class="testimonial-two__text-2">Pearl Shiptrans Pvt Ltd has been a game-changer for our supply chain. Their efficiency and professionalism are unmatched!</p>
                                    </div>
                                    <div class="testimonial-two__client-review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial-two__founder-box">
                                    <div class="testimonial-two__founder">
                                        <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                        <div class="testimonial-two__founder-shape">
                                            <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-two__client-img-box">
                                        <div class="testimonial-two__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-3-4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-two__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--CTA One Start-->
<section class="cta-one cta-four">
    <div class="cta-four-shape-1 float-bob-x">
        <img src="{{ asset('assets/images/shapes/cta-four-shape-1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="cta-one__content">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <h3 class="cta-one__title">Contact Us Today</h3>
                </div>
                <div class="cta-one__right">
                    <div class="cta-one__call">
                        <div class="cta-one__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="cta-one__call-number">
                            <a href="tel:+919879513198">+91 98795 13198</a>
                            <p>Call to Our Experts</p>
                        </div>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="{{ route('contact') }}" class="thm-btn cta-one__btn">Contact Us</a>
                    </div>
                </div>
                <div class="cta-one__img">
                    <img src="{{ asset('assets/images/resources/cta-one-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->


@endsection