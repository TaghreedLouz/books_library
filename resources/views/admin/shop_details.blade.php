@extends('admin.layouts.layout-customer')
@section('title', 'Shop Details')
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
                            <h1 class="bd-breadcrumb-title">Shop Details</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Shop Details</span>
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
                    <div class="product-d-img-nav">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1" aria-selected="false">
                                    <img src="{{asset('admin-assets/img/shop/tab-1.jpg')}}" alt="img not found">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2" aria-selected="true">
                                    <img src="{{asset('admin-assets/img/shop/tab-2.jpg')}}" alt="img not found">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                                    <img src="{{asset('admin-assets/img/shop/tab-3.jpg')}}" alt="img not found">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                                    <img src="{{asset('admin-assets/img/shop/tab-4.jpg')}}" alt="img not found">
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="product-d-img-tab">
                        <div class="tab-content" id="productDetailsTab">
                            <div class="tab-pane fade active show" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                <img class="active" src="{{asset('admin-assets/img/shop/9.2.jpg')}}" alt="img not found">
                            </div>
                            <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                                <img class="active" src="{{asset('admin-assets/img/shop/9.1.jpg')}}" alt="img not found">
                            </div>
                            <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                                <img class="active" src="{{asset('admin-assets/img/shop/8.1.jpg')}}" alt="img not found">
                            </div>
                            <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                                <img class="active" src="{{asset('admin-assets/img/shop/8.3.png')}}" alt="img not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-side-info mb-60">
                    <div class="product-category-review">
                        <div class="product-d-category">Organic, Food</div>
                        <div class="product-d-review">
                            <div class="rating">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="far fa-star"></i></a>
                            </div>
                            <span>10 Reviews</span>
                        </div>
                    </div>
                    <h4 class="product-name">baby shoes</h4>
                    <div class="product-price">
                        <span class="price-old">$63.00</span>
                        <span class="price-now">$59.00</span>
                    </div>

                    <p class="mb-30">
                        Kindedo seemed great for my kindergartener-to-be, a full santa believer. Not so the winter
                        holiday
                        episode, and I'm not sure how I'm going to police. I really happy to see my child there
                    </p>
                    <div class="product-quantity-cart mb-30">
                        <div class="product-quantity-form">
                            <form action="#">
                                <button class="cart-minus">
                                    <i class="far fa-minus"></i>
                                </button>
                                <input class="cart-input" type="text" value="1">
                                <button class="cart-plus">
                                    <i class="far fa-plus"></i>
                                </button>
                            </form>
                        </div>
                        <a href="cart.html" class="bd-cart-btn"><i class="fas fa-shopping-basket"></i>Add to Cart</a>
                    </div>
                    <div class="product-d-meta sku mb-10">
                        <span>SKU:</span>
                        <span>BO1D0MX8SJ</span>
                    </div>
                    <div class="product-d-meta ockcategories mb-10">
                        <span>Categories:</span>
                        <span>Garden, Flower, Leaf</span>
                    </div>
                    <div class="product-d-meta tags mb-10">
                        <span>Tags:</span>
                        <span>Vegetable, Flower, Leaf</span>
                    </div>
                    <div class="product-d-meta share mb-10">
                        <span>Share:</span>
                        <div class="social-links">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_info-faq-area pb-0 pt-20 wow fadeInUp" data-wow-delay=".3s">
            <div class="product-details-tab-wrapper">
                <nav class="product-details-nav mb-30">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="pro-info-1-tab" data-bs-toggle="tab" href="#pro-info-1" role="tab" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="pro-info-2-tab" data-bs-toggle="tab" href="#pro-info-2" role="tab" aria-selected="false">Additional Information</a>
                        <a class="nav-item nav-link" id="pro-info-3-tab" data-bs-toggle="tab" href="#pro-info-3" role="tab" aria-selected="false">Reviews (3)</a>
                    </div>
                </nav>
                <div class="product-details-content mb-30">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="pro-info-1" role="tabpanel">
                            <div class="tabs-wrapper mt-0">
                                <div class="product__details-des">
                                    <p>
                                        In marketing a product is an object or system made
                                        available for consumer use it is anything that can be
                                        offered to a market to the desire or need of a
                                        \retailing, products are often referred to as
                                        merchandise, and in manufacturing, products are bought
                                        as materials and then sold as finished goods. A
                                        service regarded to as a type of product. Commodities
                                        are usually raw materials metals and agricultural
                                        products, but a commodity can also be anything wide
                                        the open market. In project management, the formal
                                        definition of the project deliverables
                                    </p>
                                    <p class="mb-0">
                                        A product can be classified as tangible or intangible.
                                        A tangible product is a physical object that can be
                                        perceived by touch building, vehicle, gadget, An
                                        intangible product is a product that can only be
                                        perceived indirectly such as an insurance policy. can
                                        be broadly classified under intangible be durable or
                                        non durable. A product line is "a group of products
                                        that are closely either because they function in a
                                        similar manner, are sold to the same customergroups.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pro-info-2" role="tabpanel">
                            <div class="tabs-wrapper mt-0">
                                <div class="product__details-info">
                                    <ul>
                                        <li>
                                            <h6>Weight</h6>
                                            <span>2 lbs</span>
                                        </li>
                                        <li>
                                            <h6>Dimensions</h6>
                                            <span>12 × 16 × 19 in</span>
                                        </li>
                                        <li>
                                            <h6>Product</h6>
                                            <span>Purchase this product on rag-bone.com</span>
                                        </li>
                                        <li>
                                            <h6>Color</h6>
                                            <span>Gray, Black</span>
                                        </li>
                                        <li>
                                            <h6>Size</h6>
                                            <span>S, M, L, XL</span>
                                        </li>
                                        <li>
                                            <h6>Model</h6>
                                            <span>Model </span>
                                        </li>
                                        <li>
                                            <h6>Shipping</h6>
                                            <span>Standard shipping: $5,95</span>
                                        </li>
                                        <li>
                                            <h6>Care Info</h6>
                                            <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                        </li>
                                        <li>
                                            <h6>Brand</h6>
                                            <span>Kazen</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pro-info-3" role="tabpanel">
                            <div class="tabs-wrapper mt-0">
                                <div class="course-review-item mb-30">
                                    <div class="course-reviews-img">
                                        <a href="#"><img src="{{asset('admin-assets/img/testimonials/1.png')}}" alt="image not found"></a>
                                    </div>
                                    <div class="course-review-list">
                                        <h5><a href="#">Sotapdi Kunda</a></h5>
                                        <div class="course-start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>55 min ago</span>
                                        </div>
                                        <p>
                                            Very clean and organized with easy to follow
                                            tutorials, Exercises, and solutions. This course
                                            does start from the beginning with very little
                                            knowledge and gives a great overview of common tools
                                            used for data science and progresses into more
                                            complex concepts and ideas.
                                        </p>
                                    </div>
                                </div>
                                <div class="course-review-item mb-30">
                                    <div class="course-reviews-img">
                                        <a href="#"><img src="{{asset('admin-assets/img/testimonials/2.png')}}" alt="image not found"></a>
                                    </div>
                                    <div class="course-review-list">
                                        <h5><a href="#">Samantha</a></h5>
                                        <div class="course-start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>45 min ago</span>
                                        </div>
                                        <p>
                                            The course is good at explaining very basic
                                            intuition of the concepts. It will get you
                                            scratching the surface so to say. where this course
                                            is unique is the implementation methods are so well
                                            defined Thank you to the team !.
                                        </p>
                                    </div>
                                </div>
                                <div class="course-review-item mb-30">
                                    <div class="course-reviews-img">
                                        <a href="#"><img src="{{asset('admin-assets/img/testimonials/3.png')}}" alt="image not found"></a>
                                    </div>
                                    <div class="course-review-list">
                                        <h5><a href="#">Michell Mariya</a></h5>
                                        <div class="course-start-icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>30 min ago</span>
                                        </div>
                                        <p>
                                            This course is amazing..! I started this course as a
                                            beginner and learnt a lot. Instructors are great.
                                            Query handling can be improved.Overall very happy
                                            with the course.
                                        </p>
                                    </div>
                                </div>
                                <div class="product__details-comment">
                                    <div class="comment-title mb-20">
                                        <h3>Add a review</h3>
                                        <p>
                                            Your email address will not be published. Required
                                            fields are marked *
                                        </p>
                                    </div>
                                    <div class="comment-rating mb-20">
                                        <span>Overall ratings</span>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fal fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="comment-input-box mb-0">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <textarea placeholder="Your review" class="comment-input comment-textarea mb-20"></textarea>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class="comment-input mb-20">
                                                        <input type="text" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                    <div class="comment-input mb-20">
                                                        <input type="email" placeholder="Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="bd-comment-submit">
                                                        <button type="submit" class="bd-btn">
                                                            <span class="bd-btn-inner">
                                                                <span class="bd-btn-normal">Submit Now</span>
                                                                <span class="bd-btn-hover">Submit Now</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop details area end  -->
@endsection
