<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/img/logo/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/backtotop.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/flaticon_kindedo.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/main.css')}}">
</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="preloader">
            <div class="preloader-thumb-wrap">
                <div class="preloader-thumb">
                    <div class="preloader-border"></div>
                    <img src="{{asset('admin-assets/img/bg/preloader.png')}}" alt="img not found!">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div class="bd-header">
            <!-- header top area start  -->
            <div class="bd-header-top d-none d-lg-block p-relative">
                <div class="bd-header-top-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bd-header-top-wrapper d-flex justify-content-between">
                                <div class="bd-header-top-left">
                                    <div class="bd-header-meta-items d-flex align-items-center">
                                        <div class="bd-header-meta-item d-flex align-items-center">
                                            <div class="bd-header-meta-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="bd-header-meta-text">
                                                <p><a href="mailto:support@kindedo.com">support@kindedo.com</a></p>
                                            </div>
                                        </div>
                                        <div class="bd-header-meta-item d-flex align-items-center">
                                            <div class="bd-header-meta-icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="bd-header-meta-text">
                                                <p>8.00am-4.00pm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-header-top-right d-flex align-items-center">
                                    <div class="bd-header-meta-items">
                                        <div class="bd-header-meta-item d-flex align-items-center">
                                            <div class="bd-header-meta-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="bd-header-meta-text">
                                                <p><a href="#">14/A, Kilix Home Tower, NYC</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top area end -->

            <!-- header bottom area start -->
            <div id="header-sticky" class="bd-header-bottom ">
                <div class="container">
                    <div class="mega-menu-wrapper p-relative">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bd-header-logo">
                                <a href="index.html">
                                    <img src="{{asset('admin-assets/img/logo/logo.svg')}}" alt="logo">
                                </a>
                            </div>
                            <div class="bd-main-menu d-none d-lg-flex align-items-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="index.html">Home</a>
                                            <ul class="submenu submenu-2">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a>
                                                </li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li class="has-dropdown has-mega-menu">
                                            <a href="programs.html">Programs</a>
                                            <ul class="mega-menu mega-menu-2 clr-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="d-lg-none">List 1</a>
                                                    <ul>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>01</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Settling</h6>
                                                                    <span>4-5 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>02</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Play Group</h6>
                                                                    <span>4-5 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>03</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Play Group</h6>
                                                                    <span>5-6 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="d-lg-none">List 2</a>
                                                    <ul>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>04</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Nuesery</h6>
                                                                    <span>4-5 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>05</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Junior Kg</h6>
                                                                    <span>4-5 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                        <li> <a href="program-details.html" class="mega-program">
                                                                <div class="mega-menu-2-inner-num"><span>06</span></div>
                                                                <div class="mega-menu-2-inner-title">
                                                                    <h6>Senior Kg</h6>
                                                                    <span>6-7 Yrs</span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                                <li class="test">
                                                    <a href="javascript:void(0);" class="d-lg-none">list 3</a>
                                                    <ul>
                                                        <li>
                                                            <div class="mega-menu-2-inner-thumb p-relative">
                                                                <img src="{{asset('admin-assets/img/logo/mega-menu-1.png')}}" alt="img not found!">
                                                                <div class="mega-menu-2-inner-thumb-content">
                                                                    <h4>Join New Program</h4>
                                                                    <div class="mega-menu-2-inner-thumb-btn mb-25">
                                                                        <a href="programs.html" class="mega-btn">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="shop.html">Shop</a>
                                            <ul class="submenu submenu-2">
                                                <li><a href="shop.html">Shop Main</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown has-mega-menu">
                                            <a href="#">Pages</a>
                                            <ul class="mega-menu clr-2">
                                                <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 1</a>
                                                    <ul>
                                                        <li> <a href="programs.html">Program</a></li>
                                                        <li><a href="program-details.html">Program Details</a></li>
                                                        <li><a href="teacher.html">Teacher</a></li>
                                                        <li><a href="teacher-details.html">Teacher Details</a></li>
                                                        <li><a href="time-table.html">Time Table</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 2</a>
                                                    <ul>
                                                        <li><a href="testimonial.html">Testimonial</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="classes.html">Class</a></li>
                                                        <li><a href="class-details.html">Class Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javasript:void(0);" class="mega-menu-title">Page Layout 3</a>
                                                    <ul>
                                                        <li><a href="news.html">News Main</a></li>
                                                        <li><a href="news-sidebar.html">News Sidebar</a></li>
                                                        <li><a href="error-404.html">Error Page</a></li>
                                                        <li><a href="news-classic.html">News Classic</a></li>
                                                        <li><a href="news-details.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="news.html">News</a>
                                            <ul class="submenu submenu-2">
                                                <li><a href="news.html">News Default</a></li>
                                                <li><a href="news-sidebar.html">News Sidebar</a></li>
                                                <li><a href="news-classic.html">News Classic</a></li>
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="bd-search-btn-wrapper">
                                    <button class="bd-search-open-btn">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                                <div class="bd-header-meta-item d-none bd-header-menu-meta d-xxl-flex align-items-center">
                                    <div class="bd-header-meta-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="bd-header-meta-text">
                                        <p><a href="tel:9072003462">907-200-3462</a></p>
                                    </div>
                                </div>
                                <div class="bd-btn">
                                @if(Auth::user())

                                     <form method="POST" action="{{ route('logout') }}">
                                       @csrf
                                       <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                         this.closest('form').submit();"> {{ __('Log Out') }}  </x-dropdown-link>
                                     </form>

                                    @else
                                    <a href="{{route('login')}}" class="bd-btn"> Login </a>
                                    @endif
                                </div>
                                <div class="header-hamburger">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom area end -->
        </div>
    </header>
    <!-- header area end here -->

    <!-- main area start here  -->
    <main>

        @yield('content')

        <!-- newsletter area start here  -->
        <section class="bd-newsletter-area">
            <div class="container">
                <div class="bd-newsletter pt-100 pb-100 theme-bg">
                    <div class="bd-newsletter-bg" data-background="{{asset('admin-assets/img/bg/newsletter-bg.jpg')}}"></div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="bd-newsletter-content">
                                <div class="bd-section-title-wrapper text-center is-white mb-45">
                                    <h2 class="bd-section-title mb-0">Join Our Newsletter</h2>
                                    <p>Subscribe our newsletter to get our latest update & news.</p>
                                </div>
                                <div class="bd-newsletter-form">
                                    <form action="#">
                                        <div class="bd-newsletter-input">
                                            <input type="text" placeholder="your email">
                                            <button type="submit" class="bd-btn">
                                                <span class="bd-btn-inner">
                                                    <span class="bd-btn-normal"><i class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                                    <span class="bd-btn-hover"><i class="fa-sharp fa-solid fa-paper-plane"></i>Subscribe now</span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter area end here  -->
    </main>
    <!-- main area end here  -->

    <!-- footer area start -->
    <footer>
        <div class="bd-footer-area pt-200">
            <!-- footer area bg here  -->
            <div class="bd-gradient-bg"></div>
            <div class="bd-footer pt-90 pb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-footer-widget bd-footer-widget-1 mb-50">
                                <div class="bd-footer-logo mb-35">
                                    <a href="index.html"> <img src="{{asset('admin-assets/img/logo/logo.svg')}}" alt="img not found!"></a>
                                </div>
                                <div class="bd-footer-widget-content mb-40">
                                    <p>In our Adult Participation programs, for most students, it is their first program in
                                        Kindedo. </p>
                                </div>
                                <div class="bd-footer-bottom-social pb-20">
                                    <ul>
                                        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-footer-widget bd-footer-widget-2 mb-50">
                                <div class="bd-footer-widget-content">
                                    <h4 class="bd-footer-widget-title mb-30">Quick links</h4>
                                    <div class="bd-footer-list">
                                        <ul>
                                            <li><a href="/index/about">About</a></li>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="/index/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-footer-widget bd-footer-widget-3 mb-50">
                                <div class="bd-footer-widget-content">
                                    <h4 class="bd-footer-widget-title mb-30">Programs</h4>
                                    <div class="bd-footer-list">
                                        <ul>
                                            <li><a href="#">Play School</a></li>
                                            <li><a href="#">Nursery</a></li>
                                            <li><a href="#">Junior Kg</a></li>
                                            <li><a href="#">Senior Kg</a></li>
                                            <li><a href="#">Holiday Camp</a></li>
                                            <li><a href="#">Day Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-footer-widget bd-footer-widget-4">
                                <div class="bd-footer-widget-content">
                                    <h4 class="bd-footer-widget-title mb-30">Contact Us</h4>
                                    <div class="bd-footer-contact">
                                        <ul>
                                            <li><i class="fa-light fa-location-dot"></i><a href="#">14/A, Kilix Home Tower,
                                                    NYC</a></li>
                                            <li><i class="fa-light fa-phone"></i><a href="tel:9072003462">907-200-3462</a></li>
                                            <li><i class="fa-light fa-envelope"></i><a href="mailto:support@kindedo.com">Support@kindedo.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bd-footer-copyright pb-5">
                <div class="bd-footer-copyright-line pb-20">
                    <img src="{{asset('admin-assets/img/shape/wave-line.png')}}" alt="bottom line">
                </div>
                <div class="container">
                    <div class="bd-footer-copyright-wrap d-flex align-items-md-center justify-content-center">
                        <div class="bd-footer-copyright-text pb-20">
                            <p>Copyrighted by &copy;2023 <a href="https://themeforest.net/user/bdevs/portfolio" rel="nofollow">BDevs</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__bg"></div>
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="index.html">
                            <img src="{{asset('admin-assets/img/logo/logo.svg')}}" alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas__close-btn">
                            <i class="fa-thin fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="offcanvas__search mb-0">
                    <form action="#">
                        <button type="submit"><i class="flaticon-search"></i></button>
                        <input type="text" placeholder="Search here">
                    </form>
                </div>
                <div class="mobile-menu fix mt-40"></div>
                <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
                    <h4>About Kindedo</h4>
                    <p>With the help of teachers and environment as the third teacher, students
                        have opportunities to confidently take risks.</p>
                </div>
                <div class="offcanvas__contact mt-30 mb-30">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                                    <i class="fal fa-map-marker-alt"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                    Mirnada City Tower, NYC</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+088889797697">088889797697</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas__contact-icon">
                                <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i></a>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:support@gmail.com">support@mail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas__social">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->


    <!-- serach popup area start here  -->
    <div class="bd-search-popup-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bd-search-popup">
                        <div class="bd-search-form">
                            <form action="#">
                                <div class="bd-search-input">
                                    <input type="search" placeholder="Type here to serach ...">
                                    <div class="bd-search-submit">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="bd-search-close">
                                <div class="bd-search-close-btn">
                                    <button><i class="fa-thin fa-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup overlay  -->
    <div class="bd-search-overlay"></div>
    <!-- serach popup area end here  -->

    <!-- JS here -->
    <script src="{{asset('admin-assets/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('admin-assets/js/vendor/waypoints.js')}}"></script>
    <script src="{{asset('admin-assets/js/bootstrap-bundle.js')}}"></script>
    <script src="{{asset('admin-assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('admin-assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('admin-assets/js/slick.js')}}"></script>
    <script src="{{asset('admin-assets/js/nouislider.js')}}"></script>
    <script src="{{asset('admin-assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('admin-assets/js/parallax.js')}}"></script>
    <script src="{{asset('admin-assets/js/backtotop.js')}}"></script>
    <script src="{{asset('admin-assets/js/nice-select.js')}}"></script>
    <script src="{{asset('admin-assets/js/wow.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('admin-assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('admin-assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('admin-assets/js/jquery.odometer.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:04:17 GMT -->

</html>
