<?php $this->load->view('veges/common/header'); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Products</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- category page -->
    <section class="section-b-space">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back">
                                    <span class="filter-back">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> back
                                    </span>
                            </div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">Category</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="custom-control custom-checkbox form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="zara">
                                            <label class="custom-control-label form-check-label" for="zara">Vegetables</label>
                                        </div>
                                        <div class="custom-control custom-checkbox form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="vera-moda">
                                            <label class="custom-control-label form-check-label" for="vera-moda">Fruits</label>
                                        </div>
                                        <div class="custom-control custom-checkbox form-check collection-filter-checkbox">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="forever-21">
                                            <label class="custom-control-label form-check-label" for="forever-21">Exotic Fruits</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->

                        <!-- side-bar single product slider end -->
                        <div class="service-two border-gray border">
                            <div class="service-classic">
                                <i class="flaticon-truck"></i>
                                <h4>Free Shipping</h4>
                            </div>
                            <div class="service-classic">
                                <i class="flaticon-telemarketer"></i>
                                <h4>Online Service</h4>
                            </div>
                            <div class="service-classic">
                                <i class="flaticon-24-hours"></i>
                                <h4>24 x 7 Service</h4>
                            </div>
                            <div class="service-classic">
                                <i class="flaticon-credit-card"></i>
                                <h4>Online Payment</h4>
                            </div>
                        </div>
                        <!-- side-bar banner start here -->
                        <!-- <div class="collection-sidebar-banner">
                            <a href="javascript:void(0)">
                                <img src="<?= base_url(); ?>assets/images/sidebar_small_banner.jpg" class="img-fluid " alt="">
                            </a>
                        </div> -->
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        
                                        <div class="collection-product-wrapper">
                                            <div class="product-top-filter">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="filter-main-btn">
                                                                <span class="filter-btn btn btn-theme theme-btn-sm"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="product-filter-content">
                                                                <div class="search-count">
                                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                                </div>
                                                                <div class="collection-view">
                                                                    <ul>
                                                                        <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                        <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="collection-grid-view">
                                                                    <ul>
                                                                        <li>
                                                                            <img src="<?= base_url(); ?>assets/images/vegetables/icon/2.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/2.png" loading="lazy" class="product-2-layout-view" alt="collection">
                                                                        </li>
                                                                        <li>
                                                                            <img src="<?= base_url(); ?>assets/images/vegetables/icon/3.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/3.png" loading="lazy" class="product-3-layout-view" alt="collection">
                                                                        </li>
                                                                        <li>
                                                                            <img src="<?= base_url(); ?>assets/images/vegetables/icon/4.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/4.png" loading="lazy" class="product-4-layout-view" alt="collection">
                                                                        </li>
                                                                        <li>
                                                                            <img src="<?= base_url(); ?>assets/images/vegetables/icon/6.png" data-src="<?= base_url(); ?>assets/images/vegetables/icon/6.png" loading="lazy" class="product-6-layout-view" alt="collection">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-page-per-view">
                                                                    <select>
                                                                        <option value="High to low">24 Products Par Page</option>
                                                                        <option value="Low to High">50 Products Par Page</option>
                                                                        <option value="Low to High">100 Products Par Page</option>
                                                                    </select>
                                                                </div>
                                                                <div class="product-page-filter">
                                                                    <select>
                                                                        <option value="High to low">Sorting items</option>
                                                                        <option value="Low to High">50 Products</option>
                                                                        <option value="Low to High">100 Products</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-wrapper-grid">
                                                <div class="container-fluid">
                                                    <div class="row sapce-category">
                                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                                            <div class="product-box">
                                                                <div class="product border-theme">
                                                                    <a href="<?= site_url('product-details'); ?>"><img src="<?= base_url(); ?>assets/images/vegetables/product/1.jpg" data-src="<?= base_url(); ?>assets/images/vegetables/product/1.jpg" loading="lazy" alt="product" class="img-fluid"></a>
                                                                    <div class="cart-info">
                                                                        <button><i class="icon-bag" ></i></button>
                                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="icon-search" aria-hidden="true"></i></a>
                                                                        <a href="javascript:void(0)"><i class="icon-heart" aria-hidden="true"></i></a>
                                                                        <!-- <a href="compare.html"><i class="icon-arrows-horizontal" aria-hidden="true"></i></a> -->
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <div class="rating">
                                                                        <a href="<?= site_url('product-details'); ?>"><h5 class="mb-0 pb-0"><b>Stoberry 200 g</b></h5></a>
                                                                    </div>
                                                                    <!-- <a href="javascript:void(0)"><h6 class="mb-2">Stoberry 200 g</h6></a> -->
                                                                    <h6><del>$50.00</del>&nbsp;&nbsp;<b>$45.00</b></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-pagination">
                                                <div class="theme-paggination-block">
                                                    <div class="container-fluid p-0">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                                <nav aria-label="Page navigation">
                                                                    <ul class="pagination">
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                                                                <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                                                                <span class="sr-only">Previous</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                                                <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                                                <span class="sr-only">Next</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                                <div class="product-search-count-bottom">
                                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- category page end -->

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>