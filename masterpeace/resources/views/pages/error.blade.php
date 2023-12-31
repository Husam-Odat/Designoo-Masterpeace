@extends('layouts.master')
@section('title', 'index')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title>Single Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css"> --}}
    <link rel="stylesheet" type="text/css" href="styles/single_styles.css">
    {{-- <link rel="stylesheet" type="text/css" href="styles/single_responsive.css"> --}}



    {{-- <link rel="stylesheet" type="text/css" href="stylesheets/style1.css"> --}}

    {{-- <style>
        .product_price {
            color: rgb(130, 130, 239);
        }

        /* footer {
  color: white !important;
 }
 .afooter{
  color: white;
 } */
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">free shipping on all u.s orders over $50</div>
                        </div>
                        <!-- <div class="col-md-6 text-right">
      <div class="top_nav_right">
       <ul class="top_nav_menu">


        <li class="currency">
         <a href="#">
          usd
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="currency_selection">
          <li><a href="#">cad</a></li>
          <li><a href="#">aud</a></li>
          <li><a href="#">eur</a></li>
          <li><a href="#">gbp</a></li>
         </ul>
        </li>
        <li class="language">
         <a href="#">
          English
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="language_selection">
          <li><a href="#">French</a></li>
          <li><a href="#">Italian</a></li>
          <li><a href="#">German</a></li>
          <li><a href="#">Spanish</a></li>
         </ul>
        </li>
        <li class="account">
         <a href="#">
          My Account
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="account_selection">
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
         </ul>
        </li>
       </ul>
      </div>
     </div> -->
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <!-- <a href="#">colo<span>shop</span></a> -->
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

        <!-- Hamburger Menu -->

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

    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <!-- <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li> -->
                        <li class="active"><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                    </ul>
                </div>

            </div>
        </div>



        <section class="flat-row flat-error">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-error text-center">
                            <div class="header-error">
                                <h1 style="font-size: 200px">404</h1>
                            </div>
                            <div class="content-error">
                                <h2>Oops, Page Not Found!</h2>
                                <p>It looks like nothing was found at this location. Click <a href="{{ url('/') }}" class="btn-error">here</a> to return Homepage</p>
                            </div>
                        </div><!-- /.wrap-error -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->


        {{-- <!-- Benefit -->

            <div class="benefit">
                <div class="container">
                    <div class="row benefit_row">
                        <div class="col-lg-3 benefit_col">
                            <div class="benefit_item d-flex flex-row align-items-center">
                                <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                <div class="benefit_content">
                                    <h6>free shipping</h6>
                                    <p>Suffered Alteration in Some Form</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 benefit_col">
                            <div class="benefit_item d-flex flex-row align-items-center">
                                <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                <div class="benefit_content">
                                    <h6>cach on delivery</h6>
                                    <p>The Internet Tend To Repeat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 benefit_col">
                            <div class="benefit_item d-flex flex-row align-items-center">
                                <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                                <div class="benefit_content">
                                    <h6>45 days return</h6>
                                    <p>Making it Look Like Readable</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 benefit_col">
                            <div class="benefit_item d-flex flex-row align-items-center">
                                <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                <div class="benefit_content">
                                    <h6>opening all week</h6>
                                    <p>8AM - 09PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        {{-- <!-- Newsletter -->

            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                                <h4>Newsletter</h4>
                                <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="post">
                                <div
                                    class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                                    <input id="newsletter_email" type="email" placeholder="Your email"
                                        required="required" data-error="Valid email is required.">
                                    <button id="newsletter_submit" type="submit"
                                        class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

            <!-- Footer -->
            <footer class="footer ">
                <!-- <footer class="footer navbar-dark bg-dark"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-link">
                                <ul>
                                    <div class="logo logo-footer">
                                        <a href="index.html"><img src="images/logoo.png" alt="image"
                                                width="107" height="75"></a>
                                    </div>
                                    <!-- <li><a href="about">About Us</a></li>
       <li><a href="#">Online Store</a></li>
       <li><a href="blog-list.html">Blog</a></li>
       <li><a href="contact.html">Contact Us</a></li> -->
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-link link-login">
                                <ul>
                                    <li><a href="allproducts.html">All Products</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <!-- <li><a href="#">Online Store</a></li>
       <li><a href="blog-list.html">Blog</a></li> -->
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-link link-faq">
                                <ul>
                                    <li><a class="afooter" href="login.html">Register</a></li>
                                    <li><a class="afooter" href="registration.html">Login</a></li>
                                    <li><a class="afooter" href="cart.html">Your Cart</a></li>
                                    <!-- <li><a class="afooter" href="#">Wishlist items</a></li> -->

                                    <li><a class="afooter" href="checkout.html">Your checkout</a></li>
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-brand">
                                <!-- <div class="logo logo-footer">
       <a href="index.html"><img src="images/logoo.png" alt="image" width="107" height="75"></a>
      </div> -->
                                <ul class="flat-contact">
                                    <li class="address">Jordan, 21110, Irbid</li>
                                    <li class="phone">+962 78977 6587</li>
                                    <li class="email">husamaldean.odat@gmail.com</li>
                                </ul><!-- /.flat-contact -->
                                <ul class="flat-social">
                                    <li><a href="https://www.facebook.com/husam0dat/"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a
                                            href="mailto:husamaldean.odat@gmail.com?subject=contact&body=Line one%0DLine two"><i
                                                class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/husam-odat-b6312127a/"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul><!-- /.flat-social -->
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </footer><!-- /.footer -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="copyright text-center">Copyright @2023 <a href="index.html">Designoo</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Go Top -->
            <a class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>

        </div>

    </div> --}}

        {{-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="js/single_custom.js"></script> --}}
        {{-- </body>

</html> --}}
        @endsection