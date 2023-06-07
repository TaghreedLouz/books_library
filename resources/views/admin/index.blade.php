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

   <!-- shop category area start here -->
   <section class="bd-shop-cat-area pt-120 pb-90">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
               <div class="bd-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <h2 class="bd-section-title mb-0">Shop By Age</h2>
                  <p>Our multi-level kindergarten programs cater to the age group of 2-12 years<br> with a curriculum
                     focussing children.</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <a href="shop.html">
                     <div class="bd-shop-cat">
                        <div class="bd-shop-cat-content">
                           <div class="bd-shop-cat-title cat-1">
                              <h4>2-4</h4>
                           </div>
                           <span>Years</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  <a href="shop.html">
                     <div class="bd-shop-cat">
                        <div class="bd-shop-cat-content">
                           <div class="bd-shop-cat-title cat-2">
                              <h4>4-6</h4>
                           </div>
                           <span>Years</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                  <a href="shop.html">
                     <div class="bd-shop-cat">
                        <div class="bd-shop-cat-content">
                           <div class="bd-shop-cat-title cat-3">
                              <h4>6-8</h4>
                           </div>
                           <span>Years</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
               <div class="bd-shop-cat-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                  <a href="shop.html">
                     <div class="bd-shop-cat">
                        <div class="bd-shop-cat-content">
                           <div class="bd-shop-cat-title cat-4">
                              <h4>8-12</h4>
                           </div>
                           <span>Years</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- shop category area end here-->

   <!-- product category area start here-->
   <section class="bd-product-cat-area pb-95">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="bd-product-cat cat-xl theme-bg-6 mb-25 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-cat-content-wrapper">
                     <div class="bd-product-cat-bg" data-background="{{asset('admin-assets/img/shop/cat-1.png')}}"></div>
                     <div class="bd-product-cat-content">
                        <h4 class="bd-product-cat-title">Kids Toy</h4>
                        <p>View Product by Kids Toy</p>
                        <div class="bd-product-cat-btn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="bd-product-cat mb-25 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-cat-content-wrapper">
                     <div class="bd-product-cat-bg" data-background="{{asset('admin-assets/img/shop/cat-2.png')}}"></div>
                     <div class="bd-product-cat-content">
                        <h4 class="bd-product-cat-title">New</h4>
                        <p>View Product by New Items</p>
                        <div class="bd-product-cat-btn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="bd-product-cat mb-25 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-cat-content-wrapper">
                     <div class="bd-product-cat-bg" data-background="{{asset('admin-assets/img/shop/cat-3.png')}}"></div>
                     <div class="bd-product-cat-content">
                        <h4 class="bd-product-cat-title">Trending</h4>
                        <p>View Product by Trending</p>
                        <div class="bd-product-cat-btn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="bd-product-cat cat-xl theme-bg-6 mb-25 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-cat-content-wrapper">
                     <div class="bd-product-cat-bg" data-background="{{asset('admin-assets/img/shop/cat-4.png')}}"></div>
                     <div class="bd-product-cat-content">
                        <h4 class="bd-product-cat-title">Accessories</h4>
                        <p>View Product by Accessories</p>
                        <div class="bd-product-cat-btn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-3">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/1.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/1.2.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/1.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="theme-bg">Sale</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Plush Toy Giraffe</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$23.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-2">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active-2 swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/2.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/2.2.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/2.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="theme-bg">New</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination-2"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Wooden Alphabet</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$15.00</span>
                        <del>$20.00</del>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-3">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active-3 swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/3.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/3.2.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/3.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="grey-bg">Sold Out</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination-3"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Baby Shoes</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$33.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-2">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active-4 swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/4.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/4.2.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/4.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="theme-bg-3">Hot</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination-4"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Baby bouncer</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$25.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-2 c-3">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active-5 swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/5.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/5.2.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/5.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="theme-bg">Sale</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination-5"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Naughty Furry</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$43.00</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6 grid-item c-1 c-3 c-2">
               <div class="bd-product mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="bd-product-thumb-wrapper">
                     <div class="bd-product-thumb bd-product-thumb-active-6 swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/6.1.png')}}" alt="Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/6.2.png')}}" alt=" Image not found!">
                           </div>
                           <div class="swiper-slide">
                              <img src="{{asset('admin-assets/img/shop/6.3.png')}}" alt="Image not found!">
                           </div>
                        </div>
                     </div>
                     <div class="bd-product-tag">
                        <span class="theme-bg">Sale</span>
                     </div>
                     <div class="bd-product-action-wrapper">
                        <div class="bd-product-action-item">
                           <a href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                        </div>
                        <div class="bd-product-action-item">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="fa-regular fa-eye"></i>
                           </button>
                        </div>
                     </div>
                     <!-- product slider pagination -->
                     <div class="bd-dots-pagination bd-product-thumb-pagination-6"></div>
                  </div>
                  <div class="bd-product-content">
                     <h4 class="bd-product-title"><a href="shop-details.html">Giraffe Toy</a></h4>
                     <div class="bd-product-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <div class="bd-product-price">
                        <span>$99.00</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="bd-product-more-btn mt-35 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <a href="shop.html" class="bd-btn">
                     <span class="bd-btn-inner">
                        <span class="bd-btn-normal">View More</span>
                        <span class="bd-btn-hover">View More</span>
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

   <!-- blog area start here  -->
   <section class="bd-blog-area-2 p-relative fix pt-120 pb-120">
      <div class="bd-blog-shape d-none d-md-block">
         <img src="{{asset('admin-assets/img/shape/blog-shape.png')}}" alt="Shape not found">
      </div>
      <div class="container">
         <div class="bd-blog-section-title mb-40">
            <div class="row align-items-end">
               <div class="col-lg-6">
                  <div class="bd-section-title-wrapper mb-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h2 class="bd-section-title mb-0">Kindedo News</h2>
                     <p>It is our goal to provide age appropriate opportuniy for every child enrolled in Kindedo Kids
                        Club
                        enrichment classes.</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-blog-navigation mb-15 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <button class="bd-blog-prev">
                        <i></i><i class="fa-regular fa-angle-left"></i>
                     </button>
                     <button class="bd-blog-next">
                        <i class="fa-regular fa-angle-right"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="bd-blog-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-blog">
                           <a href="news-details.html">
                              <div class="bd-blog-thumb">
                                 <img src="{{asset('admin-assets/img/blog/2.jpg')}}" alt="blog image">
                              </div>
                           </a>
                           <div class="bd-blog-content bd-blog-content-2">
                              <div class="bd-blog-date-2">
                                 <span>22 Jan 2022</span>
                              </div>
                              <div class="bd-blog-meta">
                                 <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                 <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">0
                                       Comments</a></span>
                              </div>
                              <h4 class="bd-blog-title"><a href="news-details.html">Tips to Understand Your Child
                                    Better - Parents Guide !</a></h4>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-blog">
                           <a href="news-details.html">
                              <div class="bd-blog-thumb">
                                 <img src="{{asset('admin-assets/img/blog/4.jpg')}}" alt="blog image">
                              </div>
                           </a>
                           <div class="bd-blog-content bd-blog-content-2">
                              <div class="bd-blog-date-2">
                                 <span>22 Nov 2022</span>
                              </div>
                              <div class="bd-blog-meta">
                                 <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                 <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">04
                                       Comments</a></span>
                              </div>
                              <h4 class="bd-blog-title"><a href="news-details.html">Why Toys for pre schoolers are
                                    Important - ready setup</a></h4>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-blog">
                           <a href="news-details.html">
                              <div class="bd-blog-thumb">
                                 <img src="{{asset('admin-assets/img/blog/3.jpg')}}" alt="blog image">
                              </div>
                           </a>
                           <div class="bd-blog-content bd-blog-content-2">
                              <div class="bd-blog-date-2">
                                 <span>22 Dec 2022</span>
                              </div>
                              <div class="bd-blog-meta">
                                 <span><i class="fas fa-user"></i> by <a href="news.html">Alex</a></span>
                                 <span><i class="fa-solid fa-comment-dots"></i><a href="news-details.html">02
                                       Comments</a></span>
                              </div>
                              <h4 class="bd-blog-title"><a href="news-details.html">Which Toys are Best for Pre
                                    School in Area
                                    Kids in USA
                                 </a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- slider dots pagination -->
               <div class="bd-blog-pagination bd-dots-pagination wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog area end here  -->


   @endsection
