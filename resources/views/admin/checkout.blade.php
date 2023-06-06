@extends('admin.layouts.layout-customer')
@section('title', 'Checkout')
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
                            <h1 class="bd-breadcrumb-title">Checkout</h1>
                            <div class="bd-breadcrumb-list">
                                <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                                <span>Checkout</span>
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

<!-- coupon-area start -->
<section class="coupon-area pt-100 pb-30">
    <div class="container container-small">
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>
                        Returning customer?
                        <span id="showlogin">Click here to login</span>
                    </h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">
                                Quisque gravida turpis sit amet nulla posuere lacinia.
                                Cras sed est sit amet ipsum luctus.
                            </p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email
                                        <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                <div class="bd-login-btn">
                                    <button class="bd-btn" type="submit">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Login</span>
                                            <span class="bd-btn-hover">Login</span>
                                        </span>
                                    </button>
                                </div>
                                <label>
                                    <input type="checkbox">
                                    Remember me
                                </label>
                                <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>
                        Have a coupon?
                        <span id="showcoupon">Click here to enter your code</span>
                    </h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <div class="checkout-coupon">
                                    <input type="text" placeholder="Coupon Code">
                                    <div class="bd-coupon-btn">
                                        <button class="bd-btn" type="submit">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal"> Apply Coupon</span>
                                                <span class="bd-btn-hover"> Apply Coupon</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- coupon-area end -->

<!-- checkout-area start -->
<section class="checkout-area pb-70">
    <div class="container container-small">
        <form action="#">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-6">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="bd-nice-select">
                                        <option value="bd">Bangladesh</option>
                                        <option value="arg">Algeria</option>
                                        <option value="afg">Afghanistan</option>
                                        <option value="gha">Ghana</option>
                                        <option value="alb">Albania</option>
                                        <option value="bhr">Bahrain</option>
                                        <option value="clmb">Colombia</option>
                                        <option value="dr">Dominican Republic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" placeholder="Town / City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-account">
                                    <p>
                                        Create an account by entering the information below.
                                        If you are a returning customer please login at the
                                        top of the page.
                                    </p>
                                    <label>Account Username
                                        <span class="required">*</span></label>
                                    <input type="text" placeholder="Username">
                                    <label>Account password
                                        <span class="required">*</span></label>
                                    <input type="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <label>Ship to a different address?</label>
                                <input id="ship-box" type="checkbox">
                            </div>
                            <div id="ship-box-info">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select class="bd-nice-select">
                                                <option value="bd">Bangladesh</option>
                                                <option value="arg">Algeria</option>
                                                <option value="afg">Afghanistan</option>
                                                <option value="gha">Ghana</option>
                                                <option value="alb">Albania</option>
                                                <option value="bhr">Bahrain</option>
                                                <option value="clmb">Colombia</option>
                                                <option value="dr">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City
                                                <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State / County
                                                <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip
                                                <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address
                                                <span class="required">*</span></label>
                                            <input type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="your-order mb-30">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Giardino Tools
                                            <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$24.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Bloom Season
                                            <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$12.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            the best dirt
                                            <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$42.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">$78.00</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input name="radio-1" type="radio">
                                                    <label>
                                                        Flat Rate: <span class="amount">$7.00</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input name="radio-2" type="radio">
                                                    <label>Free Shipping:</label>
                                                </li>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td>
                                            <strong><span class="amount">$85.00</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method">
                            <div class="accordion" id="checkoutAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="checkoutOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                            Direct Bank Transfer
                                        </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            Make your payment directly into our bank account.
                                            Please use your Order ID as the payment reference.
                                            Your order won’t be shipped until the funds have
                                            cleared in our account.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="paymentTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                            Cheque Payment
                                        </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            Please send your cheque to Store Name, Store Street,
                                            Store Town, Store State / County, Store Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="paypalThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                            PayPal
                                        </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            Pay via PayPal; you can pay with your credit card if
                                            you don’t have a PayPal account.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment mt-20">
                                <button type="submit">
                                    Place Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- checkout-area end -->

@endsection
