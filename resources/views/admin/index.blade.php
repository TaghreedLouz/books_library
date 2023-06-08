@extends('admin.layouts.layout-customer')
@section('title', 'Index')
@section('content')

</header>
<!-- header area end here -->

<!-- main area start here  -->
<main>
   <!-- hero area start here  -->
   <section class="bd-hero-area">

      <!-- hero area bottom shape  -->

      <div class="bd-hero-bottom-shape d-none d-md-block">
         <img src="{{asset('admin-assets/img/shape/wave-section-break.png')}}" alt="Shape not found">
      </div>

      <!-- hero area bg here  -->
      <div class="bd-gradient-bg"></div>

      <!-- hero area side social  -->
      <div class="bd-hero-social-wrapper">
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i>facebook</a>
         </div>
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-twitter"></i>twitter</a>
         </div>
         <div class="bd-hero-social">
            <a href="#"><i class="fa-brands fa-youtube"></i>youtube</a>
         </div>
      </div>
      <div class="container">
         <div class="bd-hero-inner">
            <div class="bd-hero-shape-wrapper">
               <div class="bd-hero-shape bd-hero-shape-1 d-none d-lg-block">
                  <img src="{{asset('admin-assets/img/shape/curved-line-1.png')}}" alt="Shape not found">
               </div>
               <div class="bd-hero-shape bd-hero-shape-2">
                  <img src="{{asset('admin-assets/img/shape/curved-line-2.png')}}" alt="Shape not found">
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-7">
                  <div class="bd-hero-content">
                     <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Kindergarten
                        Program</span>
                     <h1 class="bd-hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".35s">
                        Best Product for Your Kids
                     </h1>
                     <div class="bd-hero-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <a href="shop.html" class="bd-btn">
                           <span class="bd-btn-inner">
                              <span class="bd-btn-normal">Shop Latest Product</span>
                              <span class="bd-btn-hover">Shop Latest Product</span>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-hero-thumb-wrapper">
                     <div class="bd-hero-thumb p-relative">
                        <img src="{{asset('admin-assets/img/hero/hero-1.png')}}" alt="Image not found">
                     </div>
                     <div class="bd-hero-thumb-shape">
                        <img src="{{asset('admin-assets/img/shape/curved-big.svg')}}" alt="img not found!">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- hero area end here  -->

   <!-- product category area end here-->

   <!-- product area start here-->
   <section class="bd-product-area pt-120 pb-120 theme-bg-11">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="bd-section-title-wrapper text-center text-lg-start mb-55 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                  <h2 class="bd-section-title mb-0">Latest Products</h2>
                  <p>Set your kids up for success with these back-to-school must-haves. Perfect for preschoolers,
                     kindergarteners, and those in first grade.</p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="bd-product-filter-btn-wrapper d-flex justify-content-center justify-content-lg-end mb-55 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                  <div class="bd-product-filter-btn bd-filter-btn">
                     <button data-filter=".c-1" class="active">New Collection</button>
                     <button data-filter=".c-2" class="">Trending</button>
                     <button data-filter=".c-3" class="">Sale</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="row grid">














<div style="padding: 10px 120px 10px 120px;">

    <!-- breadcrumb area end here  -->
    <div class="row">
        @php
        $totalBooks = count($books);
        @endphp
        @foreach($books as $index => $book)
        @if($index >= $totalBooks - 3)
        <div class="col-xl-4 col-md-6">
            <div class="bd-class-3 fix radius-24 p-relative mb-50 wow fadeInUp" data-wow-duration="1s"
                data-wow-delay=".3s">
                <div class="bd-class-thumb">
                    <img src="{{asset('storage/'.$book->book_img)}}" alt="class image not found!">
                </div>
                <div class="bd-class-content-3 theme-bg-6">
                    <h3 class="bd-class-title-3"><a href="class-details.html">{{$book->name}}</a></h3>
                    <div class="bd-class-meta-wrapper d-flex justify-content-between align-items-center flex-wrap">
                        <div class="bd-class-meta d-flex align-items-center flex-wrap">
                            <span><a href="teacher-details.html">{{$book->category->name}}</a></span>
                        </div>
                        <div class="bd-class-meta">
                            <div class="bd-class-meta-price">
                                <span>{{$book->price}}$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-class-btn-3 theme-bg-2 text-center">
                    <a href="class-details.html">Buy Now</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
























            </div>
         </div>




         <div class="row">
            <div class="col-12">
               <div class="bd-product-more-btn mt-35 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <a href="/admin/allUserBooks" class="bd-btn">
                     <span class="bd-btn-inner">
                        <span class="bd-btn-normal">View More</span>
                         <span class="bd-btn-hover">Show All Books</span>
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product area end here-->

   <!-- feedback area start here-->
   <section class="bd-feedback-area pb-60 pt-120">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="bd-feedback-thumb-wrapper mb-60 p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-feedback-thumb p-relative">
                     <div class="bd-feedback-path-shape d-none d-md-block">
                        <img src="{{asset('admin-assets/img/shape/radient-path.svg')}}" alt="img not found!">
                     </div>
                     <div class="bd-feedback-thumb-mask p-relative">
                        <img src="{{asset('admin-assets/img/feedback/1.png')}}" alt="img not found!">
                        <div class="panel wow"></div>
                     </div>
                  </div>
                  <div class="bd-feedback-thumb-shape">
                     <div class="bd-feedback-thumb-shape p-absolute">
                        <img src="{{asset('admin-assets/img/shape/home-3-shape-1.png')}}" alt="img not found!">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="bd-section-title-wrapper mb-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <h2 class="bd-section-title mb-5">Playful learning<br>
                     helps children</h2>
                  <p>Early childhood development programs were first introduced during the Soviet with the
                     establish pre schools</p>
               </div>
               <div class="bd-feedback theme-bg-7 mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-feedback-content">
                     <p class="mb-25">“This seemed great for my kindergartener-to-be, a full santa believer. Not so
                        the winter
                        holiday episode, and I'm not sure how I'm going to police. I really happy to see my child
                        there”</p>
                     <h5 class="bd-feedback-author">-O.F. Donaldson</h5>
                  </div>
               </div>
               <div class="bd-feedback-btn mb-60 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <a href="about.html" class="bd-btn">
                     <span class="bd-btn-inner">
                        <span class="bd-btn-normal">About us</span>
                        <span class="bd-btn-hover">About us</span>
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- feedback area end here-->

   <!-- feature area start here-->
   <div class="bd-feature-area theme-bg pt-120 pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
               <div class="bd-section-title-wrapper is-white text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <h2 class="bd-section-title mb-0">Why Kindedo Best</h2>
                  <p>View classes by age, program, or subject. Check out upcoming camps<br> and special events too!
                  </p>
               </div>
            </div>
         </div>
         <div class="bd-feature-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="row">
               <div class="col-12">
                  <ul class="feature">
                     <li class="feature-item">
                        <div class="bd-feature">
                           <div class="bd-feature-content">
                              <div class="bd-feature-icon icon-1">
                                 <i class="flaticon-exclusive"></i>
                              </div>
                              <h4 class="bd-feature-title">Exclusive</h4>
                              <p>When it comes to success in the classroom.</p>
                           </div>
                        </div>
                     </li>
                     <li class="feature-item">
                        <div class="bd-feature">
                           <div class="bd-feature-content">
                              <div class="bd-feature-icon icon-2">
                                 <i class="flaticon-humanitarian-help"></i>
                              </div>
                              <h4 class="bd-feature-title">Highest Safety</h4>
                              <p>Safety matters just as much as the academics.</p>
                           </div>
                        </div>
                     </li>
                     <li class="feature-item">
                        <div class="bd-feature">
                           <div class="bd-feature-content">
                              <div class="bd-feature-icon icon-3">
                                 <i class="flaticon-like-1"></i>
                              </div>
                              <h4 class="bd-feature-title">Hassle Free</h4>
                              <p>Consistent with Friend ship’s focus on kindedo.</p>
                           </div>
                        </div>
                     </li>
                     <li class="feature-item">
                        <div class="bd-feature first-item">
                           <div class="bd-feature-content">
                              <div class="bd-feature-icon icon-4">
                                 <i class="flaticon-delivery"></i>
                              </div>
                              <h4 class="bd-feature-title">Free Shipping</h4>
                              <p>Guided by teachers who are veste student success.</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- feature area end here-->




   @endsection
