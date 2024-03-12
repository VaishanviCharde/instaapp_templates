<?php $this->load->view('veges/common/header'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Guest Login</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Guest Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- search start-->
    <section class="authentication-page pwd-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Guest Login</h2>
                    <form class="theme-form-one w-100">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control w-100" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number *" required="">
                            </div>
                            <div class="col-md-12 mt-3 text-center">
                                <a href="javascript:void(0)" class="btn btn-theme">Submit</a>
                            </div>
                            <div class="col-md-12 mt-3 text-center">
                                <label class="fs-20">Not a member? <a href="<?= site_url('register'); ?>">Create an Account</a></label>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- search End -->

<!-- App and News end -->
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