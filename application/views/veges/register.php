<?php $this->load->view('veges/common/header'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>customer login</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">customer login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- Register start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">
                        <form class="theme-form theme-form-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Select Salutation <span class="error">*</span></label>
                                    <select class="form-control w-100" id="salutation" name="salutation" required="">
                                        <option value="">Select Salutation</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>First Name <span class="error">*</span></label>
                                    <input type="text" class="form-control w-100" id="fname" name="fname" placeholder="Enter first name" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Last Name <span class="error">*</span></label>
                                    <input type="text" class="form-control w-100" id="lname" name="lname" placeholder="Enter last name" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>email <span class="error">*</span></label>
                                    <input type="text" class="form-control w-100" id="email" name="email" placeholder="Enter your email" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mobile Number <span class="error">*</span></label>
                                    <input type="text" class="form-control w-100" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>Username <span class="error">*</span></label>
                                    <input type="text" class="form-control w-100" id="username" name="username" placeholder="Enter your username" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Password <span class="error">*</span></label>
                                    <input type="password" class="form-control w-100" id="password" name="password" placeholder="Enter your password" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password <span class="error">*</span></label>
                                    <input type="password" class="form-control w-100" id="cpassword" name="cpassword" placeholder="Enter your confirm password" required="">
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="btn btn-theme theme-btn-sm">create Account</a>    
                                    <label class="float-right fs-20">Already have an account? <a href="<?= site_url('login'); ?>">Login</a></label>    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register End -->

<?php $this->load->view('veges/common/footer'); ?>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#mobile_no"), {
            separateDialCode: true,
            preferredCountries:['IN', 'US', 'GB'],
            hiddenInput: "full",
            utilsScript: "assets/js/utils.js"
        });
    </script>
</body>
</html>