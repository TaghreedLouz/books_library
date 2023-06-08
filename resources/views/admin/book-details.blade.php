@extends('admin.layouts.layout-customer')
@section('title', 'Book Details')
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
                            <h1 class="bd-breadcrumb-title">Book Details</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Book Details</span>
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

<!-- shop details area start  -->
<section class="shop-details-area pt-120 pb-90">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-6">
                <div class="product-d-img-tab-wrapper mb-60">

                    <div class="product-d-img-tab">
                        <div class="tab-content" id="productDetailsTab">
                            <div style="width:500px; height:500px;" class="tab-pane fade active show" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                <img class="active" src="{{asset('storage/'.$book->book_img)}}" alt="img not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-side-info mb-60">
                    <h2 class="">{{$book->name}}</h2>
                    <div class="product-price">
                        <span class="price-now">{{$book->price}} $</span>
                    </div>
                    <p class="mb-30">
                        {{$book->description}}
                    </p>
                    <div class="product-d-meta sku mb-10">
                        <span>مؤلف الكتاب : </span>
                        <span>{{$book->author}}</span>
                    </div>
                    <div class="product-d-meta ockcategories mb-10">
                        <span>تاريخ إصدار الكتاب : </span>
                        <span>{{$book->date_publication}}</span>
                    </div>
                    <div class="product-d-meta tags mb-10">
                        <span> تصنيف الكتاب :</span>
                        <span>{{$book->category->name}}</span>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="product-quantity-cart mb-30">
                        <a href="cart.html" class="bd-cart-btn"><i class="fas fa-shopping-basket"></i>شراء الكتاب</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- shop details area end  -->
@endsection