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


   <div style="padding: 10px 120px 10px 120px;">

      <div class="bd-hero-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
         <a href="{{ route('index.allUserBooks.search') }}" class="bd-btn">
            <span class="bd-btn-inner">
               <span class="bd-btn-normal">Show All Books</span>
               <span class="bd-btn-hover">Show All Books</span>
            </span>
         </a>
      </div>

      <br />
      <br />

      <!-- breadcrumb area end here  -->
      <div class="row">
         @php
         $totalBooks = count($books);
         @endphp
         @foreach($books as $index => $book)
         @if($index >= $totalBooks - 3)
         <div class="col-xl-4 col-md-6">
            <div class="bd-class-3 fix radius-24 p-relative mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
               <div class="bd-class-thumb">
                  <img src="{{asset('storage/'.$book->book_img)}}" alt="class image not found!">
               </div>
               <div class="bd-class-content-3 theme-bg-6">
                  <h3 class="bd-class-title-3"><a href="{{route('index.books.details',[$book->id])}}">{{$book->name}}</a></h3>
                  <div class="bd-class-meta-wrapper d-flex justify-content-between align-items-center flex-wrap">
                     <div class="bd-class-meta d-flex align-items-center flex-wrap">
                        <span><a href="{{route('index.books.details',[$book->id])}}">{{$book->category->name}}</a></span>
                     </div>
                     <div class="bd-class-meta">
                        <div class="bd-class-meta-price">
                           <span>{{$book->price}}$</span>
                        </div>
                     </div>
                  </div>
               </div>


               <form action="{{route('index.books.buyBook')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="book_id" value="{{ $book->id }}">

                  <div class="bd-class-btn-3 theme-bg-2 text-center">
                     <button type="submit" href="">Buy Now</button>
                  </div>

               </form>


            </div>
         </div>
         @endif
         @endforeach
      </div>
   </div>




   <!-- class area end here -->

   <!-- testimonial area start here  -->
   <section class="bd-testimonial-area-2 pb-120 p-relative pt-120 theme-bg">
      <div class="bd-testimonial-bottom-shape">
         <img src="{{asset('admin-assets/img/shape/wave-section-break.png')}}" alt="img not found!">
      </div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="bd-section-title-wrapper is-white z-index-1 p-relative text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <h2 class="bd-section-title mb-0">Customers Says</h2>
                  <p>With the help of teachers and the environment as the third teacher, students<br> have
                     opportunities to confidently take risks.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="bd-testimonial-active-2 swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-testimonial-2 mr-5 theme-bg-6 mb-25">
                           <div class="bd-testimonial-rating mb-30">
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                           </div>
                           <div class="bd-testimonial-content-2 mb-35">
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                 hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                 ultrices mauris.</p>
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
                     <div class="swiper-slide">
                        <div class="bd-testimonial-2 mr-5 clr-3 theme-bg-7">
                           <div class="bd-testimonial-rating mb-30">
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                              <a href="#"><i class="fas fa-star"></i></a>
                           </div>
                           <div class="bd-testimonial-content-2 mb-35">
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                 hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                 consectetur,
                                 ultrices mauris.</p>

                           </div>
                           <div class="bd-testimonial-avatar d-flex align-items-center">
                              <div class="bd-testimonial-avatar-thumb">
                                 <img src="{{asset('admin-assets/img/testimonials/2.png')}}" alt="testimonial avatar">
                              </div>
                              <h6 class="bd-testimonial-avatar-title-2 mb-0">Robert M. Allen</h6>
                              <div class="bd-testimonial-quote d-none d-sm-block clr-1">
                                 <i class="flaticon-quote"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- slider dots pagination -->
               <div class="bd-testimonial-pagination-2 bd-dots-pagination justify-content-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></div>
            </div>
         </div>
      </div>
   </section>
   <!-- testimonial area end here  -->


   <!-- promotion area end here  -->

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
