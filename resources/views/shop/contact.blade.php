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
                        <h2 class="section-title__title">Get in touch with our experts</h2>
                    </div>
                    <!-- Directors Contact -->
                    <div class="contact-page__call-email">
                        <div class="contact-page__call-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="contact-page__call-email-content">
                            <h4>Directors</h4>
                            <p>
                                <a href="tel:+919825062912" class="contact-page__call-number">Capt Jagveer Singh Kalra: +91 98250 62912</a>
                                <a href="tel:+919825150231" class="contact-page__call-number">Pawanjeet Singh Kalra: +91 98251 50231</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="form-overlay">
                                <div class="loading-spinner"></div>
                            </div>
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a message" required>{{ old('message') }}</textarea>
                                    </div>
                                    {!! NoCaptcha::display() !!}
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn" id="submitBtn">
                                            <span class="btn-text">Send Message</span>
                                        </button>
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

<!--Office Locations Start-->
<section class="contact-page contact-page--two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-sub-title-box">
                <p class="section-sub-title">Our Offices</p>
                <div class="section-title-shape-1">
                    <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                </div>
                <div class="section-title-shape-2">
                    <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Find Us Across India</h2>
        </div>

        <div class="row">
            <!-- Registered Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Registered Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>PEARL SHIPTRANS PVT.LTD.</p>
                                <p>B-517, GOPAL PALACE, Opp. OCEAN PARK,<br>Nr. NEHRU NAGAR CIRCLE,<br>SATELLITE ROAD, AHMEDABAD</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <p>Phone</p>
                                <h3><a href="tel:07940300399">079-40300399 / 2674031</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Ahmedabad Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Ahmedabad Office</h3>
                    

                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <p>Looking after Ahmedabad, ICD Khodiyar, ICD Sanand, ICD Sabarmati, Pipavav</p>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                            <p>B-517, GOPAL PALACE, Opp. OCEAN PARK,
                    Nr. NEHRU NAGAR CIRCLE,
                    SATELLITE ROAD, AHMEDABAD</p>
                                <p>Branch Incharge: Devashish Pandya</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <p>Email</p>
                                <h3><a href="mailto:dev@pearlshipping.co.in">dev@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <p>Phone</p>
                                <h3><a href="tel:+919879513198">+91 98795 13198</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Gandhidham Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Gandhidham Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                        <p>Looking after Kandla, Mundra, ICD Gandhidham</p>
 
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>OFFICE NO. 220 PLOT NO. 93 SECTOR - 8,<br>Gandhidham / Kandla,<br>Pin: 370 201 (Kutch)</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <p>Phone</p>
                                <h3><a href="tel:+912836225283">+91 2836 225283/84</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mundra Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Mundra Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                        <p>Looking after 13 CFSs at Mundra and Terminal operations at 3 Terminals</p>

                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>OFFICE-14, 1ST FLOOR<br>SAURASHTRA CFS<br>MUNDRA PORT, MUNDRA, KUTCH</p>
                                <p>Branch Manager: Aplesh Patel</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:mundra@pearlshipping.co.in">mundra@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <h3><a href="tel:+919825227769">+91 98252 27769</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Continue with other offices in the same pattern -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Hazira Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <p>Looking after Hazira & ICD Ankleshwar</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>
                                    OFFICE NO. 45, DIAMOND NAGAR Co Op SOCIETY,<br>
                                    NEAR HOTEL EXECUTIVE, ICHHAPORE-III,<br>
                                    HAZIRA ROAD, SURAT - 394510</p>
                                <p>Branch Manager: Vinod Patel</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:hazira@pearlshipping.co.in">hazira@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <h3><a href="tel:+919727706486">+91 97277 06486</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Jaipur Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Jaipur Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>Pearl Shiptrans Pvt. Ltd.<br>
                                    1st Floor, Plot No.78, Yadav Bhawan,<br>
                                    Adarsh Nagar Gokul Pura,<br>
                                    Kalwar Road, Kanakpura, Jaipur – 302012</p>
                                <p>PIC: Mr. Dheeraj Yadav</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:lekhraj@pearlshipping.co.in">lekhraj@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <h3><a href="tel:+918511611327">+91 85116 11327</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Chennai Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Chennai Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>Pearl Shiptrans Pvt. Ltd.<br>
                                    Office # 3C, 3rd Floor, Building #<br>
                                    3/2 Venkat Lingam Street, Clive Battery,<br>
                                    Chennai – 600001</p>
                                <p>PIC: Mr. Purushotham M V</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:chennai@pearlshipping.co.in">chennai@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <h3><a href="tel:+919173380749">+91 91733 80749</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Jodhpur Office -->
            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Jodhpur Office</h3>
                    <ul class="footer-widget-four__contact-list">
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <p>Pearl Shiptrans Pvt. Ltd.<br>
                                    B 48 / C-1, Vinayak Vihar,<br>
                                    Near B R Birla School, Jhawar Road,<br>
                                    Jodhpur – 342008</p>
                                <p>PIC: Mr. Sanjay Srivastava</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:sanjay@pearlshipping.co.in">sanjay@pearlshipping.co.in</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <h3><a href="tel:+919829025520">+91 98290 25520</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 mb-5">
                <div class="footer-widget-four__contact">
                    <h3 class="footer-widget-four__title">Important Contacts</h3>
                    <ul class="footer-widget-four__contact-list">
                        
                        
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <p>Exports</p>
                                <p>Pratyush Barik</p>
                                <h3><a href="tel:+919825221642">+91 98252 21642</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <p>Imports</p>
                                <p>Shankar Rao</p>
                                <h3><a href="tel:+919825150238">+91 98251 50238</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
<!--Office Locations End-->

<!--Google Map Start-->
<section class="google-map-two">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.894336659634!2d70.13088297531512!3d23.064335079144502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b992a90c1ff7%3A0xec4aaec90645e6f9!2spearl%20shiptrans%20pvt.ltd!5e0!3m2!1sen!2sin!4v1742792547464!5m2!1sen!2sin"
        class="google-map__two" allowfullscreen></iframe>
</section>
<!--Google Map End-->

@endsection