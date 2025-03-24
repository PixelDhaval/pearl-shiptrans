@extends('layout.layout')

@php
$headTitle = 'Contact';
$title='Contact';
$subTitle = 'Contact';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Contact us</p>
                            <div class="section-title-shape-1">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Feel free to get in touch with experts</h2>
                    </div>
                    <div class="contact-page__call-email">
                        <div class="contact-page__call-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-page__call-email-content">
                            <h4>
                                <a href="tel:+919879513198" class="contact-page__call-number">+91 98795 13198</a>
                                <a href="mailto:dilpreet@pearlshipping.co.in"
                                    class="contact-page__email">dilpreet@pearlshipping.co.in</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        <form action="assets/inc/sendemail" class="comment-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->



<!--Google Map Start-->
<section class="google-map-two">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.894336659634!2d70.13088297531512!3d23.064335079144502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b992a90c1ff7%3A0xec4aaec90645e6f9!2spearl%20shiptrans%20pvt.ltd!5e0!3m2!1sen!2sin!4v1742792547464!5m2!1sen!2sin"
        class="google-map__two" allowfullscreen></iframe>
</section>
<!--Google Map End-->

@endsection