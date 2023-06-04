@extends('admin.layouts.layout-admin')
@section('title', 'Shop')
@section('content')
<!-- breadcrumb area start here -->
<section class="bd-breadcrumb-area p-relative fix theme-bg">
    <!-- breadcrumb background image -->
    <div class="bd-breadcrumb-bg" data-background="{{asset('admin-assets/img/bg/breadcrumb-bg.jpg')}}')}}"></div>
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
                            <h1 class="bd-breadcrumb-title">Shop</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Shop</span>
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
<!-- product area start here-->
<section class="bd-product-area pt-120 pb-120">
    <div class="container">
        <div class="product-filter-wrapper mb-20 wow fadeInUp" data-wow-delay=".3s">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="items-showing-text mb-15">
                        <span class="items-showing">20</span> Item On List
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="filter-buttons mb-15">
                        <div class="dropdown filter-category-btn">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-list"></i>filter
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        Featured
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        Price: Low to High
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        Price: High to Low
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        New
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        Avg. Rating
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="v-line">|</div>
                        <div class="dropdown filter-item-btn">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop by Age<i class="fal fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        0-3 Years
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        4-6 Years
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" onclick="window.location.reload()">
                                        6-9 Years
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
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
                        <h4 class="bd-product-title"><a href="shop-details.html">Plastic building</a></h4>
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="bd-product-thumb-wrapper">
                        <div class="bd-product-thumb bd-product-thumb-active-6 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/6.1.png')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/6.2.png')}}" alt="Image not found!">
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="bd-product-thumb-wrapper">
                        <div class="bd-product-thumb bd-product-thumb-active-7 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/7.1.png')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/7.2.png')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/7.3.png')}}" alt="Image not found!">
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
                        <div class="bd-dots-pagination bd-product-thumb-pagination-7"></div>
                    </div>
                    <div class="bd-product-content">
                        <h4 class="bd-product-title"><a href="shop-details.html">Plastic building</a></h4>
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="bd-product-thumb-wrapper">
                        <div class="bd-product-thumb bd-product-thumb-active-8 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/8.1.jpg')}}')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/8.2.jpg')}}')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/8.3.png')}}" alt="Image not found!">
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
                        <div class="bd-dots-pagination bd-product-thumb-pagination-8"></div>
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
            <div class="col-xl-4 col-lg-6 col-md-6  col-sm-6">
                <div class="bd-product bd-product-2 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="bd-product-thumb-wrapper">
                        <div class="bd-product-thumb bd-product-thumb-active-9 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/9.1.jpg')}}')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/9.2.jpg')}}')}}" alt="Image not found!">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('admin-assets/img/shop/9.3.jpg')}}')}}" alt="Image not found!">
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
                        <div class="bd-dots-pagination bd-product-thumb-pagination-9"></div>
                    </div>
                    <div class="bd-product-content">
                        <h4 class="bd-product-title"><a href="shop-details.html">Toy basket</a></h4>
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
                <div class="bd-pagination pt-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <ul class="justify-content-center">
                        <li><span aria-current="page" class="page-numbers current">01</span></li>
                        <li><a class="page-numbers" href="#">02</a></li>
                        <li><a class="page-numbers" href="#">03</a></li>
                        <li><a class="page-numbers" href="#">04</a></li>
                        <li><a class="next page-numbers" href="#">
                                <i class="fa-sharp fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product area end here-->
@endsection