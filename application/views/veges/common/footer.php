    
    <!-- News and app section three -->
    <section>
        <div class="follow-two padding-tb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="store follow-us">
                            <div class="app-store-img">
                                <a href="javascript:void(0)"><img src="<?= base_url()?>assets/images/vegetables/app_android.jpg" loading="lazy" alt="app-store"></a>
                                <a href="javascript:void(0)"><img src="<?= base_url()?>assets/images/vegetables/app_apple.jpg" loading="lazy" alt="ios-store"></a>
                            </div>
                            <p class="follow-title">Follow US</p>
                            <ul>
                                <li class="social-link">
                                    <a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-link">
                                    <a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-link">
                                        <a href="javascript:void(0)" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-link">
                                        <a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-link">
                                    <a href="javascript:void(0)"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section 1 -->
    <footer>
        <div class="footer-space theme-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <?php if(isset($this->session->userdata('pre_login_data')['appLogo'])) { ?>
                            <div class="footer-logo">
                                <img src="<?= $this->session->userdata('pre_login_data')['appLogo']; ?>" loading="lazy" class="w-20" alt="logo">
                            </div>
                            <?php } else { ?>
                                <div class="footer-logo">
                                    <img src="<?= base_url(); ?>assets/images/logo.webp" loading="lazy" class="w-20" alt="logo">
                                </div>
                            <?php } ?>
                            <p><?= $this->session->userdata('pre_login_data')['appDesc']; ?></p>
                            <div class="payment-card-bottom">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-cc-discover" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-cc-amex" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-xl-2 offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>My Account</h4>
                                <div class="divider-line"></div>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="<?= site_url('about-us'); ?>">About us</a></li>
                                    <li><a href="<?= site_url('contact-us'); ?>">Contact us</a></li>
                                    <li><a href="javascript:void(0)">Terms &amp; Conditions</a></li>
                                    <!-- <li><a href="javascript:void(0)">Returns &amp; Exchanges</a></li> -->
                                    <!-- <li><a href="javascript:void(0)">Shipping &amp; Delivery</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Contact Us</h4>
                                <div class="divider-line"></div>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <?php if(isset($this->session->userdata('pre_login_data')['appAddress'])) { ?><li><i class="fa fa-map-marker"></i><?= $this->session->userdata('pre_login_data')['appAddress']; ?></li><?php } ?>
                                    <?php if(isset($this->session->userdata('pre_login_data')['appPhone'])) { ?><li><i class="fa fa-phone"></i>Call Us: <?= $this->session->userdata('pre_login_data')['appPhone'] ?></li><?php } ?>
                                    <?php if(isset($this->session->userdata('pre_login_data')['appEmail'])) { ?><li><i class="fa fa-envelope-o"></i>Email Us: <?= $this->session->userdata('pre_login_data')['appEmail'] ?></li><?php } ?>
                                    <!-- <li><i class="fa fa-fax"></i>Fax: 123456</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row social-space-b">
                    <div class="col-md-4">
                        <hr class="social-line">
                    </div>
                    <div class="col-md-4">
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <hr class="social-line">
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer theme-light">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="footer-end text-center">
                            <p class="copyright-text">2018 - 19 Copy Right by Themeforest Powered by pixel strap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- latest jquery-->
    <script src="<?= base_url()?>assets/js/jquery-3.3.1.min.js" ></script>
    <!-- popper js-->
    <!-- <script src="<?= base_url()?>assets/js/popper.min.js" ></script> -->
    <!-- Bootstrap js-->
    <script src="<?= base_url()?>assets/js/bootstrap.js" ></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url()?>assets/js/slick.js" ></script>
    <!-- Menu js -->
    <script src="<?= base_url()?>assets/js/menu.js"></script>
    <!-- bootstrap-notify js -->
    <!-- <script src="<?= base_url()?>assets/js/bootstrap-notify.min.js"></script> -->
    <!-- Custome scripts js-->
    <script src="<?= base_url()?>assets/js/custom-scripts.js" ></script>
    <script src="<?= base_url()?>assets/js/intlTelInput.min.js"></script>  