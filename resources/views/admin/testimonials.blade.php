@extends('admin.layouts.layout-customer')
@section('title', 'Testimonials')
@section('content')
<!-- breadcrumb area start here -->
<section class="bd-breadcrumb-area p-relative fix theme-bg">
    <!-- breadcrumb background image -->
    <div class="bd-breadcrumb-bg" data-background="{{asset('admin-assets/img/bg/breadcrumb-bg.jpg')}}"></div>
    <div class="bd-breadcrumb-wrapper mb-60 p-relative">
        <div class="container">
            <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                <div class="bd-breadcrumb-shape-1">
                    <img src="{{asset('admin-assets/img/shape/curved-line-2.png')}}" alt="img not found!">
                </div>
                <div class="bd-breadcrumb-shape-2">
                    <img src="{{asset('admin-assets/img/shape/white-curved-line.png')}}" alt="img not found!">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                            <h1 class="bd-breadcrumb-title">Testimonials</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Testimonials</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bd-wave-wrapper bd-wave-wrapper-3">
        <div class="bd-wave bd-wave-3"></div>
        <div class="bd-wave bd-wave-3"></div>
    </div>
</section>
<!-- breadcrumb area end here  -->

<!-- testimonial area start here  -->
<section class="bd-testimonial-area pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bd-section-title-wrapper z-index-1 p-relative text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <h2 class="bd-section-title mb-0">Parents Says</h2>
                    <p>With the help of teachers and the environment as the third teacher, students<br> have
                        opportunities to confidently take risks.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>From 1873 until 1877, St. Louis stood as the sole representative of free kindergarten work in
                            the country. In 1877, Mrs. Quincy A. Shaw opened two kindergartens in the vicinity of Boston,
                            Mass.</p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/1.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">Norma J. Johnston</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>In the summer of I878, Prof. Felix Adler, of New York, founder of the Society for Ethical
                            Culture, spoke forcibly and effectively at a meeting of influential citizens of San
                            Francisco, urging the. </p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/2.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">Hillary H. Morse</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote
                                                "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>Growing work called for growing funds to meet expenses. City councils were petitioned, and
                            the amount of five thousand dollars was granted for two successive years In the next year.
                        </p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/3.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">Robert M. Allen</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote
                                                "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>The Milwaukee Mission Kindergarten Association, still in its infancy, was established in
                            i885, and has already under its charge, in its three kindergartens, one hundred and fifty.
                        </p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/4.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">John N. McGee</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote
                                                "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>To the question, “What is the apparent influence of the kindergarten upon the children?”
                            comes a deluge of answers, their burden being, without exception, that the effects have been
                            only.</p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/5.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">Ines R. Duong</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="bd-testimonial-3 mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-testimonial-rating mb-30">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                    <div class="bd-testimonial-content-2 mb-35">
                        <p>“Nearly every trade and art has its place in Froebel’s system, which gives the child the
                            alphabet of them all by calling upon him to master the materials and principles common to.
                        </p>
                    </div>
                    <div class="bd-testimonial-avatar d-flex align-items-center">
                        <div class="bd-testimonial-avatar-thumb">
                            <img src="{{asset('admin-assets/img/testimonials/6.png')}}" alt="testimonial avatar">
                        </div>
                        <h6 class="bd-testimonial-avatar-title-2 mb-0">Lenora C. Rivera</h6>
                        <div class="bd-testimonial-quote d-none d-sm-block clr-2">
                            <i class="flaticon-quote
                                                "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end here  -->
@endsection
