<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Yasha Fresh | Best Ecommerce Mega Store Html Template">
        <meta name="keywords" content="Yasha Fresh | Best Ecommerce Mega Store Html Template">
        <meta name="author" content="Yasha Fresh | Best Ecommerce Mega Store Html Template">
        <link rel="icon" href="<?= $this->session->userdata('pre_login_data')['appLogo']; ?>" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?= $this->session->userdata('pre_login_data')['appLogo']; ?>" type="image/x-icon"/>
        <title>Yasha Fresh | Vegetables</title>

        <!--Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,800i" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,300i,400,400i,500,500i,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">  -->

        <!-- Fontawesome -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/font-awesome.css">

        <!-- Slick css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/slick.css">
        
        <!-- Flaticon icon -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/flaticon.css">

        <!-- Themify icon -->
        <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themify.css"> -->

        <!-- Animate icon -->
        <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/animate.css"> -->

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">

        <!-- Theme css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style_vegetables.css" id="color">
        
        <link href="<?= base_url()?>assets/css/intlTelInput.min.css" rel="stylesheet" media="all"/>

    </head>
<body>

    <!-- loader start -->
 <div class="loader-wrapper">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- loader end -->
<?php
    $segment1 = $this->uri->segment(1); 
?>
    <!-- Header -->
    <header class="sm-top-space">
    <div class="top-header theme-primary-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12 t-hdr-cntr xs-none">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to our store</li>
                                <?php if(isset($this->session->userdata('pre_login_data')['appEmail'])) { ?><li class="lg-d-none"><i class="fa fa-envelope-o"></i>Email Us: <?= $this->session->userdata('pre_login_data')['appEmail']; ?></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12 text-center text-sm-end">
                        <div class="header-contact">
                            <ul>
                            <?php if(isset($this->session->userdata('pre_login_data')['appPhone'])) { ?><li><i class="fa fa-phone"></i>Call Us: <?= $this->session->userdata('pre_login_data')['appPhone'] ?></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openSidebarNav()">
                                    <div class="bar-style"> <i class="flaticon flaticon-menu sidebar-bar"></i></div>
                                </a>
                                <div id="mySidebarnav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closebarNav()"></a>
                                    <nav class="header-three-style">
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical home-header">
                                            <li class="main-menu-hover">
                                                <div  onclick="closebarNav()">
                                                    <div class="sidebar-back text-start">
                                                        <i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="<?= site_url('FashionHome'); ?>">Fashion</a>
                                            </li>
                                            <li><a href="<?= site_url('home'); ?>">Vegetables</a></li>
                                            <li><a href="#">Cosmetics</a></li>
                                            <li><a href="#">furniture</a></li>
                                            <li><a href="#">Restarants</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                               <a href="<?= site_url(); ?>"> <img src="<?= $this->session->userdata('pre_login_data')['appLogo']; ?>" loading="lazy" class="img-fluid" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="menu-right sm-fixed-top">
                            <div class="navbar new-hadr-three">
                                <a href="javascript:void(0)" onclick="openNav()" class="toggle-nav">
                                    <div class="bar-style"> <i class="flaticon flaticon-menu"
                                        ></i></div>
                                </a>
                                <nav class="theme-home-menu lg-left-0 header-three-style home-2" id="mySidenav">
                                    <ul id="main-menu" class="sm pixelstrap home-header sm-horizontal ">
                                        <li class="main-menu-hover" onclick="closeNav()">
                                            <div class="mobile-back text-end">
                                                Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                            </div>
                                        </li>
                                        <li class="drop-dwn-menu">
                                            <a href="<?= site_url(); ?>" class="<?php if($segment1 == 'home' || $segment1 == '') { echo 'active'; } ?>">Home</a>
                                            <!-- <ul class="sub-drop-menu">class="sub-class"
                                                <li><a href="<?= site_url('FashionHome'); ?>">Fashion</a></li>
                                                <li><a href="<?= site_url('home'); ?>">Vegetables</a></li>
                                                <li><a href="#">Cosmetics</a></li>
                                                <li><a href="#">furniture</a></li>
                                                <li><a href="#">Restarants</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="drop-dwn-menu">
                                            <a href="<?= site_url('product'); ?>" class="<?php if($segment1 == 'product') { echo 'active'; } ?>">Product</a>
                                        </li>
                                        <li id="hover-cls" class="main-menu-hover">
                                            <a href="<?= site_url('about-us'); ?>" class="menu-title <?php if($segment1 == 'about-us') { echo 'active'; } ?>">About Us</a>
                                        </li>
                                        <li class="drop-dwn-menu">
                                            <a href="<?= site_url('contact-us'); ?>" class="<?php if($segment1 == 'contact-us') { echo 'active'; } ?>">Contact Us</a>
                                        </li>
                                        <!-- <li class="drop-dwn-menu">
                                            <a href="#"><i class="flaticon flaticon-man-user"></i> Vaishanvi Charde</a>
                                        </li> -->
                                        <li class="drop-dwn-menu">
                                            <a href="<?= site_url('login'); ?>" class="<?php if($segment1 == 'login') { echo 'active'; } ?>"><i class="flaticon flaticon-man-user"></i> Login</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="">
                                <div class="sm-comp onhover-div search-box">
                                </div>
                            </div>
                            <div class="icon-nav-cart box-icon">
                                <ul class="space-vertical">
                                    <li class="sticky-top wishlist">
                                        <a href="javascript:void(0)">
                                            <i class="flaticon flaticon-favorite-heart-button"></i>
                                        </a>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div class="cart-icon">
                                            <i class="flaticon flaticon-shopping-bag"></i>
                                            <span class="cart-add">0</span>
                                        </div>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="javascript:void(0)"><img class="me-3" src="<?= base_url()?>assets/images/vegetables/product/7.jpg" data-src="<?= base_url()?>assets/images/vegetables/product/7.jpg" loading="lazy" alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0)"><h4>item name</h4></a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="javascript:void(0)"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="javascript:void(0)"><img class="me-3" src="<?= base_url()?>assets/images/vegetables/product/3.jpg" data-src="<?= base_url()?>assets/images/vegetables/product/3.jpg" loading="lazy" alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0)"><h4>item name</h4></a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="javascript:void(0)"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons">
                                                    <a href="<?= site_url('cart'); ?>" class="view-cart">view cart</a>
                                                    <a href="<?= site_url('checkout'); ?>" class="checkout">checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End-->