<?php

include_once 'config.php';
$sql = 'select count from visitors';
$qry = mysqli_query($conn,$sql);

while($res = mysqli_fetch_array($qry)){
    $countVisitor = $res['count'];
}

$countVisitor =   $countVisitor + 1;
$sql2 = "UPDATE `visitors` SET `count`= $countVisitor";
$qry2 = mysqli_query($conn,$sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="/dashdesk/files/configuration/ficon_file/5c2a7cd1-e61c-4110-835d-0d8cbf642048/logo (1).png" type="image/png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Smart Business News" />
    <meta name="author" content="Smart Business News">
    <meta name="keywords" content="Smart,Business,news">
    <title>Smart Business News</title>
    

    <!--    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/fonts/line-icons.css" />
    <link rel="stylesheet" type="text/css" href="css/production.css" />
    <!-- Icon -->
    <!-- Slicknav -->

    <!-- Animate -->
    <!-- Owl carousel -->
    <!-- Main Style -->
    <!-- Responsive Style -->

</head>

<body>
    <!-- <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keybord="false" data-options="close_on_background_click:false;close_on_esc:false;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Select City</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body ">
                    <ul class="city">
                        <li style="float: left;padding: 8px;"><a href="/home/selectCity/5c37992f-51c0-4eab-b2ba-1210bf642048"><strong><i class="red lni-map-marker"></i></strong>vadodara</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    Header Area wrapper Starts -->

    <header id="header-wrap">
        <!--Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <!-- Start Contact Info -->
                        <ul class="list-inline">
                            <li><i class="lni-phone"></i>+91 99241 98585</li>
                            <li><i class="lni-envelope"></i> info@smartbusiness.news</li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="roof-social float-right">
                            <a class="facebook" title="facebook" target="_blank" href="http://facebook.com"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" title="twitter" target="_blank" href="http://facebook.com"><i class="lni-twitter-filled"></i></a>
                            <a class="instagram" title="instagram" target="_blank" href="http://facebook.com"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" title="linkedin" target="_blank" href="http://facebook.com"><i class="lni-linkedin-fill"></i></a>
                            <a class="google" title="google" target="_blank" href="http://facebook.com"><i class="lni-google-plus"></i></a>

                            <!-- <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                <a class="google" href="#"><i class="lni-google-plus"></i></a> -->
                        </div>
                        <div class="header-top-right float-right">
                            <!-- <a href="#" class="header-top-button" data-toggle="modal" data-target="#myModal"><i class="lni-map-marker"></i> <span class="text-capitalize">Select City</span></a> | -->
                            <a href="login.php" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                            <a href="client/clientsignup.php" class="header-top-button"><i class="lni-pencil"></i> Register</a> |
                            <a href="admin/adminlogin.php" class="header-top-button"><i class="lni-user"></i> Admin</a> |
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
                    <a href="" class="navbar-brand"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <!-- <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item active" href="index.html">Home 1</a>
                  <a class="dropdown-item" href="index-2.html">Home 2</a>
                </div>
              </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                  Home
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#works">
                 How it Works
                </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#features">
                   Features
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing-table">
                  Plans
                </a>
                        </li>
                        <!-- <li class="nav-item">
                <a class="nav-link" href="">
                  Blog
                </a>
              </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                  Contact Us
                </a>
                        </li>
                       
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="client/clientprofile.php"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                    <div class="btn">
                        <a class="btn btn-common" href="client/viewEcopy.php"><i class="lni-save"></i> e-copy</a>
                </div>
                    
                </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="mobile-menu">
                <li> <a class="" href="#">Home</a>
                   
                </li>
                <li>
                    <a href="#works"> How it Works</a>
                </li>
                <li>
                    <a href="#features"> Features </a>
                   
                </li>
                
                <li>
                    <a href="#pricing-table"> Plans</a>
                   
                </li>
                <!-- <li> <a href="">  Blog  </a></li> -->
                <li> <a href="#contact">Contact Us </a>
                    <li>
                        <li> <a href="/issues">Download </a>
                            <li>
                               
                                <li style="padding-bottom:15px;">
                                    <a class="btn btn-xm btn-common" style="color:white;display:inline" href="client/clientprofile.php"><i class="lni-pencil-alt"></i> Post an Ad</a>


                                    <a style="color:white;display:inline" href="login.php" class="btn btn-xm btn-common"><i class="lni-lock"></i> LogIn</a> |
                                    <a style="color:white;display:inline" href="client/clientsignup.php" class="btn btn-xm btn-common"><i class="lni-pencil"></i> Register</a>
                                </li>
            </ul>
            <!-- Mobile Menu End -->

        </nav>
        <!-- Navbar End -->
        <!-- Hero Area Start -->
        <div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                        <div class="contents">
                            <h1 class="head-title">Welcome to <span class="year">Smart Business News</span></h1>
                            <!-- <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p> -->
                            <div class="search-bar">
                                <div class="search-inner">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Categories item Start -->
    <section id="categories">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-xs-12">
                    <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">

                        <div class="item">
                            <a href="ad.php?cat=business">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/business.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Business</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=edu">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/school.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Education</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=marriage">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/marriage.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Matrimonial</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=rental">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/rental.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Rental</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=property" >
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/building.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Property</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=candc">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/court.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Court and Company Notice</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=auction">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/auction.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Auction Notice</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=tender">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/tender.png" height="100px" width="100px"  alt="">
                                        </div>
                                        <h4>Tender Notice</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=public">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/public.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Public Notice</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="ad.php?cat=others">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="img/others.png" height="100px" width="100px" alt="">
                                        </div>
                                        <h4>Others</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Works Section Start -->
    <section id="works" class="works section-padding" style="background: #F8F8F8;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">How It Works?</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-users"></i>
                        </div>
                        <p>Create an Account</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-bookmark-alt"></i>
                        </div>
                        <p>Free Ad Request</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-thumbs-up"></i>
                        </div>
                        <p>Deal Done</p>
                    </div>
                </div>
                <hr class="works-line">
            </div>
        </div>
    </section>
    <!-- Works Section End -->

    <!-- Services Section Start -->
    <section id="features" class="services bg-light section-padding" style="background: white!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">Key Features</h3>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="lni-leaf"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Elegant Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon">
                            <i class="lni-display"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Responsive Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="lni-color-pallet"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Clean UI</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="icon">
                            <i class="lni-emoji-smile"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">UX Friendly</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1s">
                        <div class="icon">
                            <i class="lni-pencil-alt"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Easily Customizable</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon">
                            <i class="lni-headphone-alt"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Security Support</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Pricing section Start -->
    
    <section id="pricing-table" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                
                    <h2 class="section-title">Pricing Plan</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-gift"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">Rs.1000</p>
                        </div>
                        <div class="title">
                            <h3 style="text-transform:uppercase">Basic</h3>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-gift"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">Rs.1500</p>
                        </div>
                        <div class="title">
                            <h3 style="text-transform:uppercase">Pro</h3>
                        </div>
                        <!-- <ul class="description">
                  <li>Free ad posting</li>
                  <li>No Featured ads availability</li>
                  <li>Access to limited features</li>
                  <li>For 30 days</li>
                  <li>100% Secure!</li>
                </ul> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-gift"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">Rs.2000</p>
                        </div>
                        <div class="title">
                            <h3 style="text-transform:uppercase">Premium</h3>
                        </div>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Pricing Table Section End -->

    <!-- Testimonial Section Start -->
    <!-- Testimonial Section Start -->
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section -->
    <!-- blog Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribes section-padding" style="background: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="subscribes-inner">
                        <div class="icon">
                            <i class="lni-pointer"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Subscribe to Newsletter</h3>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form action="/users/newsletter" method="post">
                        <div class="subscribe">
                            <input class="form-control" name="email" placeholder="Enter your Email" required="" type="email">
                            <button class="btn btn-common" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section id="contact" class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="img/flogo.png" alt=""></div>
                            <div class="textwidget">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
                            </div>
                            <ul class="mt-3 footer-social">
                                <li><a class="facebook" title="facebook" target="_blank" href="http://facebook.com"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" title="twitter" target="_blank" href="http://facebook.com"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="instagram" title="instagram" target="_blank" href="http://facebook.com"><i class="lni-instagram-filled"></i></a></li>
                                <li><a class="linkedin" title="linkedin" target="_blank" href="http://facebook.com"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google" title="google" target="_blank" href="http://facebook.com"><i class="lni-google-plus"></i></a></li>
                                <!-- <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                  <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Quick Link</h3>
                            <ul class="menu">
                                <li><a href="/home/aboutus">- About Us</a></li>
                                <li><a href="/faqs">- FAQ's</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="/issues">- e-copy</a></li>
                                <!--  <li><a href="#">- Shop</a></li> -->
                                <!--   <li><a href="#">- Shop</a></li> -->
                                <li><a href="/faqs">- FAQ's</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="/issues">- e-copy</a></li>

                                <li><a href="/home/aboutus">- About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Contact Info</h3>
                            <ul class="contact-footer">
                                <li>
                                    <strong><i class="lni-phone"></i></strong><span>+91 99241 98585</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span>info@smartbusiness.news</span>
                                </li>
                                <li>
                                    <strong><i class="lni-map-marker"></i></strong><span><a href="#">Smart Business News<br>
Arvind Apartment, Below Congress Office,<br> Lakdipul, Dandia Bazar,<br>
Vadodara.</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer area End -->

        <!-- Copyright Start  -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info text-center">
                            <p>Designed and Developed by Meet Patel </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </footer>
    <!-- Footer Section End -->
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/form-validator.min.js"></script>
    <script type="text/javascript" src="js/contact-form-script.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <style type="text/css">
        .row>div {
            padding: 0 4px !important;
        }

        .mimg {
            margin-top: 8px;
            vertical-align: middle;
        }

        .content {
            position: relative;
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 10px;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-image {
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .content-details h4 {
            color: #fff;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details h5 {
            color: white;
        }

        .content-details span {
            color: #fff;
            font-size: 0.7em;
        }

        .content-details a i {
            color: #fff;
            font-size: 15px;
            color: #fff;
            padding: 10px;
            transition: all 1s
        }

        .content-details a i:hover {
            color: #fff;
            font-size: 20px;
            color: #fff;
            padding: 5px;
            transition: all 1s;
        }

        }

        .content-details h5 {
            text-align: left;
            color: #fff;
        }

        .fadeIn-bottom {
            top: 80%;
        }
    </style>
    <script>
        $(function() {
            setTimeout(function() {
                $('.message').fadeOut(1000);
            }, 10000);
            //  $("a#example6").fancybox({
            // 		'titlePosition'		: 'outside',
            // 		'overlayColor'		: '#000',
            // 		'overlayOpacity'	: 0.9
            // });
        })
    </script>
</body>

</html>