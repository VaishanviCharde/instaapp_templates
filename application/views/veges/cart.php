<?php $this->load->view('veges/common/header'); ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row text-center-md">
                <div class="col-md-6 col-sm-12">
                    <div class="page-title">
                        <h2>Cart</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- Cart start-->
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            <th scope="col">total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/product/1.jpg" alt="" class="">
                                </a>
                            </td>
                            <td><a href="javascript:void(0)">Stoberry 200 g</a>
                                <div class="mobile-cart-content">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text"  name="quantity" class="form-control input-number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)" class="icon">
                                                <i class="icon-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td><h2>$63.00</h2></td>
                            <td >
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number"  name="quantity" class="form-control input-number" value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="icon">
                                    <i class="icon-close"></i>
                                </a>
                            </td>
                            <td><h2>$4539.00</h2></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/product/1.jpg" alt="" class="">
                                </a>
                            </td>
                            <td><a href="javascript:void(0)">Stoberry 200 g</a>
                                <div class="mobile-cart-content">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number"  name="quantity" class="form-control input-number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)" class="icon">
                                                <i class="icon-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td><h2>$63.00</h2></td>
                            <td >
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number"  name="quantity" class="form-control input-number" value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="icon">
                                    <i class="icon-close"></i>
                                </a>
                            </td>
                            <td><h2>$4539.00</h2></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">
                                    <img src="<?= base_url(); ?>assets/images/vegetables/product/1.jpg" alt="" class="">
                                </a>
                            </td>
                            <td><a href="javascript:void(0)">Stoberry 200 g</a>
                                <div class="mobile-cart-content">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number"  name="quantity" class="form-control input-number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)" class="icon">
                                                <i class="icon-close"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td><h2>$63.00</h2></td>
                            <td >
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number"  name="quantity" class="form-control input-number" value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="icon">
                                    <i class="icon-close"></i>
                                </a>
                            </td>
                            <td><h2>$4539.00</h2></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td><h2> $6935.00 </h2></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-12 col-sm-6">
                    <a href="javascript:void(0)" class="btn btn-theme theme-btn-sm">continue shopping</a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="javascript:void(0)" class="btn btn-theme theme-btn-sm">check out</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart End -->

<!-- App and News end -->
<?php $this->load->view('veges/common/footer'); ?>
</body>
</html>