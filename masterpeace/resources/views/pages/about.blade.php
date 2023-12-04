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
                            <li class="active"><a href="about.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>About</a></li>
                        </ul>
                    </div>

                </div>
            </div>



            <!-- Tabs -->

            <div class="tabs_section_container">

                <div class="container">

                    <div class="row">
                        <div class="col">

                            <!-- Tab Description -->

                            <div id="tab_1" class="tab_container active">
                                <div class="row">
                                    <div class="col-lg-5 desc_col">
                                        <!-- <div class="tab_title">
         <h4>Description</h4>
        </div> -->
                                        <div class="tab_text_block">
                                            <h2>Keep Commerce Human</h2>
                                            <p> Designoo is the global marketplace for unique and creative
                                                goods. It’s home to a universe of special, extraordinary items,
                                                from unique handcrafted pieces to vintage treasures. In a time
                                                of increasing automation, it’s our mission to keep human
                                                connection at the heart of commerce. That’s why we built a place
                                                where creativity lives and thrives because it’s powered by
                                                people. We help our community of sellers turn their ideas into
                                                successful businesses. Our platform connects them with millions
                                                of buyers looking for an alternative—something special with a
                                                human touch, for those moments in life that deserve imagination.
                                                As a company, we strive to lead with our guiding principles and
                                                to help spread ideas of sustainability and responsibility whose
                                                impact can reach far beyond our own business.</p>
                                        </div>
                                        <div class="tab_image">
                                            <img src="./images/contact us_1.png" alt="">
                                        </div>
                                        <div class="tab_text_block">
                                            <h2>How Designoo Works</h2>
                                            <p> How Designoo Works Our global marketplace is a vibrant community
                                                of real people connecting over special goods. The platform
                                                empowers sellers to do what they love and helps buyers find what
                                                they love.
                                                Sell extraordinarily With low fees, powerful tools, and support
                                                and education, we help creative entrepreneurs start, manage, and
                                                scale their businesses. Want to become an Designoo seller? All
                                                it takes is 20 cents to get started.
                                                Yes! Visit our careers page to see our open roles and to learn what it’s
                                                like to be a part of the Etsy team.
                                                If you want to sell your handmade, vintage or craft items on Designoo,
                                                check that they fit within our Seller Policy. Then, visit
                                                Designoo.com/sell to set up your shop.
                                                It only takes 20 cents and your imagination to set up a global business.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-2 desc_col">
                                        <div class="tab_image">
                                            <img src="./images/contact us_2.png" alt="">
                                        </div>
                                        <div class="tab_text_block">
                                            <h2>Buy extraordinary</h2>
                                            <p> Buy extraordinary From the specific to the unexpected (or
                                                custom-made), our search tools help buyers explore all the
                                                special one-of-a-kind items offered by Designoo sellers. Our
                                                Journal and Editors Picks curate exciting trends and ideas
                                                discovered in the marketplace by our own team.
                                                Shop securely We provide the technology behind the Designoo
                                                marketplace, helping buyers and sellers connect and exchange on
                                                Designoo. Keeping those connections safe, fun and secure is our
                                                priority, and we’re always here to help.
                                                You’ll find product announcements, company news and stories about
                                                our community members at our news blog. For investor news and
                                                presentations, SEC filings and leadership and governance information,
                                                visit our Investor Relations site.</p>
                                        </div>
                                        <div class="tab_image desc_last">
                                            <img src="./images/contact us_3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Additional Info -->

                            <div id="tab_2" class="tab_container">
                                <div class="row">
                                    <div class="col additional_info_col">
                                        <div class="tab_title additional_info_title">
                                            <h4>Additional Information</h4>
                                        </div>
                                        <p>COLOR:<span>Gold, Red</span></p>
                                        <p>SIZE:<span>L,M,XL</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Reviews -->

                            <div id="tab_3" class="tab_container">
                                <div class="row">

                                    <!-- User Reviews -->

                                    <div class="col-lg-6 reviews_col">
                                        <div class="tab_title reviews_title">
                                            <h4>Reviews (2)</h4>
                                        </div>

                                        <!-- User Review -->

                                        <div class="user_review_container d-flex flex-column flex-sm-row">
                                            <div class="user">
                                                <div class="user_pic"></div>
                                                <div class="user_rating">
                                                    <ul class="star_rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="review_date">27 Aug 2016</div>
                                                <div class="user_name">Brandon William</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>

                                        <!-- User Review -->

                                        <div class="user_review_container d-flex flex-column flex-sm-row">
                                            <div class="user">
                                                <div class="user_pic"></div>
                                                <div class="user_rating">
                                                    <ul class="star_rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="review_date">27 Aug 2016</div>
                                                <div class="user_name">Brandon William</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add Review -->

                                    <div class="col-lg-6 add_review_col">

                                        <div class="add_review">
                                            <form id="review_form" action="post">
                                                <div>
                                                    <h1>Add Review</h1>
                                                    <input id="review_name" class="form_input input_name"
                                                        type="text" name="name" placeholder="Name*"
                                                        required="required" data-error="Name is required.">
                                                    <input id="review_email" class="form_input input_email"
                                                        type="email" name="email" placeholder="Email*"
                                                        required="required" data-error="Valid email is required.">
                                                </div>
                                                <div>
                                                    <h1>Your Rating:</h1>
                                                    <ul class="user_star_rating">
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required
                                                        data-error="Please, leave us a review."></textarea>
                                                </div>
                                                <div class="text-left text-sm-right">
                                                    <button id="review_submit" type="submit"
                                                        class="red_button review_submit_btn trans_300"
                                                        value="Submit">submit</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

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
