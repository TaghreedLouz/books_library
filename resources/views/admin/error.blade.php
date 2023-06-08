@extends('admin.layouts.layout-customer')
@section('title', 'Error')
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
                            <h1 class="bd-breadcrumb-title">OOPS!</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>OOPS!</span>
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

<!-- error page area start here  -->
<section class="bd-erro-area pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="bd-section-title-wrapper mb-45">
                    <h2 class="bd-section-title mb-0">OOPS! YOU DONT HAVE ENOUGH BUDGET!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit
                        urna. Pellentesque sit amet sapien.</p>
                </div>
                <div class="bd-error-btn">
                    <a href="index.html" class="bd-btn">
                        <span class="bd-btn-inner">
                            <span class="bd-btn-normal d-flex align-items-center"><i class="flaticon-hut"></i>Back to
                                Home</span>
                            <span class="bd-btn-hover d-flex align-items-center"><i class="flaticon-hut"></i>Back to
                                Home</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="bd-error-thumb-wrapper">
                    <div class="bd-error-thumb">
                        <img src="{{asset('admin-assets/img/bg/error-404.svg')}}" alt="img not found!">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error page area end here  -->

@endsection