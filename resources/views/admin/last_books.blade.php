    @extends('admin.layouts.layout-customer')
    @section('title', 'Last Books')
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
                         <h1 class="bd-breadcrumb-title">Last Books</h1>
                         <div class="bd-breadcrumb-list">
                            <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                            <span>Classes</span>
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

    <div style="padding: 10px 120px 10px 120px;">



       <div class="bd-hero-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
          <a href="/admin/allUserBooks" class="bd-btn">
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
    @endsection