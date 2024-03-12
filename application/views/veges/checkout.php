<?php $this->load->view('veges/common/header'); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Checkout</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
    <!-- Checkout start -->
    <section>
        <div class="container padding-cls">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form class="theme-form">
                        <div class="row checkout-partition">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <h5>How would you like to order?</h5>
                                        <div class="radio-option float-left">
                                            <input type="radio" name="payment-group" id="payment-1" checked="checked">&nbsp;&nbsp;
                                            <label for="payment-1"><h4><b>Pickup</b></h4></label>
                                        </div>
                                        <div class="radio-option">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="payment-group" id="payment-1">&nbsp;&nbsp;
                                            <label for="payment-1"><h4><b>Shipping</b></h4></label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        &nbsp;
                                    </div>
                                </div>  
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3>
                                    <p><b>Note:</b> Check the current address or enter the new address in below given fields.</p>
                                    <div class="card cpd-10">
                                        <div class="radio-option float-left">
                                            <input type="radio" name="payment-group" id="payment-3">&nbsp;&nbsp;
                                            <label for="payment-1"><b><img src="<?= base_url(); ?>assets/images/vegetables/icon/location.png" alt="location">&nbsp;Niraj Test, Address Niraj, 12, LU49, Luton, Test, United Kingdom </b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Full Name</div>
                                        <input type="text" name="full_name" id="full_name" value="" class="form-control" placeholder="Enter your full name" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="address" id="address" value="" class="form-control" placeholder="Enter your address" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Apt Number </div>
                                        <input type="text" name="apt_no" id="apt_no" value="" class="form-control" placeholder="Enter Apartment Number" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Zip/Postal Code</div>
                                        <input type="text" name="post_code" id="post_code" value="" class="form-control" placeholder="Enter Zip/Postal Code" required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Country</div>
                                        <input type="text" name="country" id="country" value="" class="form-control" placeholder="Enter your country" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">State</div>
                                        <input type="text" name="state" id="state" value="" class="form-control" placeholder="Enter your state" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">City</div>
                                        <input type="text" name="city" id="city" value="" class="form-control" placeholder="Enter your city" required="">
                                    </div>
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create An Account?</label>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span> Total</span></div>
                                        </div>
                                        <ul class="qty">
                                            <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                            <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Subtotal <span class="count">$380.10</span></li>
                                            <li>Shipping <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                            </li>
                                        </ul>

                                        <ul class="total">
                                            <li>Total <span class="count">$620.00</span></li>
                                        </ul>
                                    </div>

                                    <div class="payment-box">
                                        <div class="text-end">
                                            <a href="javascript:void(0)" class="btn btn-theme">Place Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout End -->

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>