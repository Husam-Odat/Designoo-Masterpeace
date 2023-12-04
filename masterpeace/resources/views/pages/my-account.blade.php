{{-- <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uren - Car Accessories Shop HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css"> --}}

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    {{-- <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css"> --}}
    <style>
        .account-page-area .myaccount-tab-trigger li a.active {
            background: #fe4c50;
            color: #ffffff;
        }

        .afooter {
            color: black;
        }


        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .breadcrumbs {
            width: 100%;
            height: 60px;
            border-bottom: solid 1px #ebebeb;
            margin-bottom: 58px;
        }
    </style>
</head>



<body class="template-color-1">



    <div class="super_container">

        <!-- Header -->

        <!-- Header -->

        {{-- <header class="header trans_300" style="top: 0px;">

            <!-- Top Navigation -->



            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <!-- <a href="index.html">colo<span>shop</span></a> -->
                                <a href="index.html"><img src="images/logoo.png" alt="" srcset=""
                                        style="height:75px ; width: 107px;"></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="allproducts.html">shop</a></li>

                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="registration.html">SignUp</a></li>
                                    <li><a href="login.html">Login</a></li>

                                </ul>
                                <ul class="navbar_user">
                                    <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                                    <li><a href="my-account.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="cart.html">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">2</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item has-children">
                        <a href="#">
                            usd
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">cad</a></li>
                            <li><a href="#">aud</a></li>
                            <li><a href="#">eur</a></li>
                            <li><a href="#">gbp</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            English
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            My Account
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">home</a></li>
                    <li class="menu_item"><a href="#">shop</a></li>
                    <li class="menu_item"><a href="#">promotion</a></li>
                    <li class="menu_item"><a href="#">pages</a></li>
                    <li class="menu_item"><a href="#">blog</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                </ul>
            </div>
        </div> --}}

        <!-- Slider -->

        <!-- <div class="main_slider" style="background-image:url(images/slider_1.1.jpg)">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h6>Discover New Art Our Curators Love Every Week</h6>
                            <h1>New This Week</h1>
                            <div class="red_button shop_now_button"><a href="#">Start Exploring</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- =============================================================================== -->
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/slider1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/slider2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/slider3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->
@extends('layouts.master')
@section('title', 'index')

@section('content')

        <!-- ============================================================================ -->
        <div class="super_container">
            <div class="main-wrapper">

                <!-- Begin Uren's Header Main Area -->


                <!-- Begin Uren's Breadcrumb Area -->
                <div class="breadcrumbs d-flex flex-row align-items-center " style="margin-top:100px;">
                    <ul class="navbar_menu">
                        <li><a href="index.html">My Profile</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i>Dashboard</a></li>
                    </ul>
                </div>


                <!-- Uren's Breadcrumb Area End Here -->
                <!-- Begin Uren's Page Content Area -->
                <main class="page-content">
                    <!-- Begin Uren's Account Page Area -->
                    <div class="account-page-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab"
                                                href="#account-dashboard" role="tab"
                                                aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-orders-tab" data-toggle="tab"
                                                href="#account-orders" role="tab" aria-controls="account-orders"
                                                aria-selected="false">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-address-tab" data-toggle="tab"
                                                href="#account-address" role="tab"
                                                aria-controls="account-address" aria-selected="false">Addresses</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-details-tab" data-toggle="tab"
                                                href="#account-details" role="tab"
                                                aria-controls="account-details" aria-selected="false">Account
                                                Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-logout-tab" href="login-register.html"
                                                role="tab" aria-selected="false">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                                            aria-labelledby="account-dashboard-tab">
                                            <div class="myaccount-dashboard">
                                                <p>Hello <b>Edwin Adams</b> (not Edwin Adams? <a
                                                        href="login-register.html">Sign
                                                        out</a>)</p>
                                                <p>From your account dashboard you can view your recent orders, manage
                                                    your shipping and
                                                    billing addresses and <a href="javascript:void(0)">edit your
                                                        password and account details</a>.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-orders" role="tabpanel"
                                            aria-labelledby="account-orders-tab">
                                            <div class="myaccount-orders">
                                                <h4 class="small-title">MY ORDERS</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <th>ORDER</th>
                                                                <th>DATE</th>
                                                                <th>STATUS</th>
                                                                <th>TOTAL</th>
                                                                <th></th>
                                                            </tr>
                                                            <tr>
                                                                <td><a class="account-order-id"
                                                                        href="javascript:void(0)">#5364</a></td>
                                                                <td>Mar 27, 2019</td>
                                                                <td>On Hold</td>
                                                                <td>£162.00 for 2 items</td>
                                                                <td><a href="javascript:void(0)"
                                                                        class="uren-btn uren-btn_dark uren-btn_sm"><span>View</span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a class="account-order-id"
                                                                        href="javascript:void(0)">#5356</a></td>
                                                                <td>Mar 27, 2019</td>
                                                                <td>On Hold</td>
                                                                <td>£162.00 for 2 items</td>
                                                                <td><a href="javascript:void(0)"
                                                                        class="uren-btn uren-btn_dark uren-btn_sm"><span>View</span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-address" role="tabpanel"
                                            aria-labelledby="account-address-tab">
                                            <div class="myaccount-address">
                                                <p>The following addresses will be used on the checkout page by default.
                                                </p>
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="small-title">BILLING ADDRESS</h4>
                                                        <address>
                                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of
                                                            Lorem
                                                        </address>
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="small-title">SHIPPING ADDRESS</h4>
                                                        <address>
                                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of
                                                            Lorem
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-details" role="tabpanel"
                                            aria-labelledby="account-details-tab">
                                            <div class="myaccount-details">
                                                <form action="#" class="uren-form">
                                                    <div class="uren-form-inner">
                                                        <div class="single-input single-input-half">
                                                            <label for="account-details-firstname">First Name*</label>
                                                            <input type="text" id="account-details-firstname">
                                                        </div>
                                                        <div class="single-input single-input-half">
                                                            <label for="account-details-lastname">Last Name*</label>
                                                            <input type="text" id="account-details-lastname">
                                                        </div>
                                                        <div class="single-input">
                                                            <label for="account-details-email">Email*</label>
                                                            <input type="email" id="account-details-email">
                                                        </div>
                                                        <div class="single-input">
                                                            <label for="account-details-oldpass">Current Password(leave
                                                                blank to leave
                                                                unchanged)</label>
                                                            <input type="password" id="account-details-oldpass">
                                                        </div>
                                                        <div class="single-input">
                                                            <label for="account-details-newpass">New Password (leave
                                                                blank to leave
                                                                unchanged)</label>
                                                            <input type="password" id="account-details-newpass">
                                                        </div>
                                                        <div class="single-input">
                                                            <label for="account-details-confpass">Confirm New
                                                                Password</label>
                                                            <input type="password" id="account-details-confpass">
                                                        </div>
                                                        <div class="single-input">
                                                            <button class="uren-btn uren-btn_dark"
                                                                type="submit"><span>SAVE
                                                                    CHANGES</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Uren's Account Page Area End Here -->
                </main>
                <!-- Uren's Page Content Area End Here -->
                <!-- Begin Uren's Footer Area -->
                <!-- Newsletter -->

                
                <!-- Go Top -->
                <a class="go-top">
                    <i class="fa fa-chevron-up"></i>
                </a>

            </div>


        </div>



        <!-- JS
============================================ -->

        <!-- jQuery JS -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Modernizer JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/vendor/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <!-- Slick Slider JS -->
        <script src="assets/js/plugins/slick.min.js"></script>
        <!-- Barrating JS -->
        <script src="assets/js/plugins/jquery.barrating.min.js"></script>
        <!-- Counterup JS -->
        <script src="assets/js/plugins/jquery.counterup.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/plugins/jquery.nice-select.js"></script>
        <!-- Sticky Sidebar JS -->
        <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
        <!-- Jquery-ui JS -->
        <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
        <!-- Lightgallery JS -->
        <script src="assets/js/plugins/lightgallery.min.js"></script>
        <!-- Scroll Top JS -->
        <script src="assets/js/plugins/scroll-top.js"></script>
        <!-- Theia Sticky Sidebar JS -->
        <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
        <!-- Waypoints JS -->
        <script src="assets/js/plugins/waypoints.min.js"></script>
        <!-- jQuery Zoom JS -->
        <script src="assets/js/plugins/jquery.zoom.min.js"></script>

        <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
        <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
@endsection

{{-- </body>

</html> --}}
