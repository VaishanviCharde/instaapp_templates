<?php $this->load->view('veges/common/header'); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- contact start-->
    <section class="contact-page">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-6 map">
                    <form class="theme-form contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="review">Phone number</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your number" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="review">Write Your Message</label>
                                    <textarea class="form-control" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-theme theme-btn-sm" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>    
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/icon/call.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/call.png" loading="lazy" alt="call" class="">
                                    <h6>Contact Us</h6>
                                </div>
                                <div class="media-body">
                                    <p>123-456-7898</p>
                                    <p>123-456-7898</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/icon/location.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/location.png" loading="lazy" alt="location">
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body">
                                    <p>Megamart Demo Store Demo Store India-3654123</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/icon/mail.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/mail.png" loading="lazy" alt="mail">
                                    <h6>Mail</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Mycart.Com</p>
                                    <p>info@Mycart.Com</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/icon/fax.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/fax.png" loading="lazy" alt="fax">
                                    <h6>Fax</h6>
                                </div>
                                <div class="media-body">
                                    <p>123456798</p>
                                    <p>123455</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact End -->

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>