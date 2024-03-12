<?php $this->load->view('veges/common/header'); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Product Details</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- Producr 3 column page -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            <div>
                                <img src="assets/images/vegetables/product/1.jpg" data-src="assets/images/vegetables/product/1.jpg" loading="lazy" alt="" class="img-fluid image_zoom_cls-0 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2> Stoberry 200 g </h2>
                            <h4><del>$50.00</del></h4>
                            <!-- <span>55% off</span> -->
                            <h3>$40.96 </h3>
                            <div class="product-description border-product">
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                <i class="icon-angle-left"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-text">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                <i class="icon-angle-right"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 mt-20">
                                    <label>Special Instruction</label>
                                    <textarea class="form-control" id="spec_inst" name="spec_inst" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="product-buttons text-lg-start">
                                <a href="javascript:void(0)" class="btn btn-theme theme-btn-sm">add to cart</a>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>