<?php $this->load->view('veges/common/header'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Customer Login</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customer Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- Login start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form-one theme-form mt-0">
                            <div class="form-group">
                                <label>Username <span class="error">*</span></label>
                                <input type="text" class="form-control w-100" id="username" name="username" placeholder="Enter your username" required="">
                            </div>
                            <div class="form-group">
                                <label>Password <span class="error">*</span></label>
                                <input type="password" class="form-control w-100" id="password" name="password" placeholder="Enter your password" required="">
                            </div>
                            <div class="form-group mb-10">
                                &nbsp;&nbsp;<input type="checkbox" id="chb2" name="rememberme">&nbsp;&nbsp;
                                <label>
                                    <b>Remember Me</b>
                                </label>
                                <input type="hidden" id="remembermechecker" name="remembermechecker" value="false">
                            </div>
                            <div class="form-group mb-10">
                            <a href="javascript:void(0)" class="btn btn-theme theme-btn-sm">Login</a>
                            <a href="<?= site_url('guest-login'); ?>" class="btn btn-theme theme-btn-sm float-right">Login as Guest</a>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mt-20"><a href="<?= site_url('forgot-username'); ?>">Forgot Username?</a></h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mt-20 float-right"><a href="<?= site_url('forgot-password'); ?>">Forgot Password?</a></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                        <a href="<?= site_url('register'); ?>" class="btn btn-theme theme-btn-sm">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>