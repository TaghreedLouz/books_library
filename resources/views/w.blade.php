@extends('admin.layouts.layout-admin')
@section('title', 'Wishlist')
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
                            <h1 class="bd-breadcrumb-title">Wishlist</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Wishlist</span>
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

<!-- cart area start  -->
<div class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Add to cart</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('admin-assets/img/shop/1.1.png')}}" alt="img"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-details.html">Plush Toy Giraffe</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$20.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <a href="cart.html" class="border-btn">Add to Cart</a>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$20.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('admin-assets/img/shop/1.2.png')}}" alt="img"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-details.html">Wooden Alphabet </a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$24.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <a href="cart.html" class="border-btn">Add to Cart</a>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$24.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('admin-assets/img/shop/1.3.png')}}" alt="img"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-details.html">Baby Shoes</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$33.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <a href="cart.html" class="border-btn">Add to Cart</a>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$33.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('admin-assets/img/shop/2.1.png')}}" alt="img"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="shop-details.html">Naughty Furry</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">$56.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <a href="cart.html" class="border-btn">Add to Cart</a>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">$56.00</span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart area end  -->
@endsection
