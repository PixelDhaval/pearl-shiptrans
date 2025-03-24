<header class="main-header-six">
            <div class="main-header-six__top">
                <div class="main-header-six__top-inner">
                    <div class="main-header-six__top-shape-1"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/main-header-six-top-shape-1.png') }}')">
                    </div>
                    <div class="main-header-six__top-address">
                        <ul class="list-unstyled main-header-six__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-telephone-call"></span>
                                </i>
                                <div class="text">
                                    <p><a href="tel:+919879513198">+91 98795 13198</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="fas fa-envelope"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:dilpreet@pearlshipping.co.in">dilpreet@pearlshipping.co.in</a></p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="main-header-six__top-right">
                        <div class="main-header-six__top-social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-six">
                <div class="main-menu-six__wrapper">
                    <div class="main-menu-six__wrapper-inner">
                        <div class="main-menu-six__logo-box">
                            <div class="main-menu-six__logo">
                                <a href="{{ route('index') }}"><img
                                        src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-six-logo.png') }}"
                                        alt="" style="height: 80px;"></a>
                            </div>
                        </div>
                        <div class="main-menu-six__left">
                            <div class="main-menu-six__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li>
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="{{ route('stevedoring') }}">Stevedoring</a></li>
                                            <li><a href="{{ route('vesselAgency') }}">Vessel Agency</a></li>
                                            <li><a href="{{ route('chartering') }}">Chartering</a></li>
                                            <li><a href="{{ route('customClearance') }}">Custom Clearance</a></li>
                                            <li><a href="{{ route('warehousingStorage') }}">Warehousing &
                                                    Storage</a></li>
                                            <li><a href="{{ route('railHaulage') }}">Rail Haulage</a></li>
                                            <li><a href="{{ route('roadHaulage') }}">Road Haulage</a></li>
                                            <li><a href="{{ route('freightForwarding') }}">Freight Forwarding</a></li>
                                            <li><a href="{{ route('cfs') }}">CFS</a></li>
                                            <li><a href="{{ route('cranesAndForklifts') }}">Cranes &
                                                    Forklifts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-six__right">
                            <div class="main-menu-six__search-user-get-quote-btn">
                                
                                <div class="main-menu-six__user">
                                    <a href="{{ route('contact') }}"><span class="fas fa-user"></span></a>
                                </div>
                                <div class="main-menu-six__get-quote-btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn-three main-menu-six__get-quote-btn">Get a
                                        Quote <span class="fas fa-paper-plane"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-six">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->