@extends('layouts.master')
@section('title', 'cart2')

@section('content')
<!-- Favicons-->
    <link rel="shortcut icon" href={{ asset('./cart/img/favicon.ico') }} type="./cart/image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href={{ asset('./cart/img/apple-touch-icon-57x57-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href={{ asset('./cart/img/apple-touch-icon-72x72-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href={{ asset('./cart/img/apple-touch-icon-114x114-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href={{ asset('./cart/img/apple-touch-icon-144x144-precomposed.png') }}>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Lato:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href={{ asset('./cart/css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/menu.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/style.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/responsive.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/elegant_font/elegant_font.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/fontello/css/fontello.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/magnific-popup.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/pop_up.css') }} rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href={{ asset('./cart/css/skins/square/grey.css') }} rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href={{ asset('./cart/css/custom.css') }} rel="stylesheet">


    <link rel="stylesheet" type="text/css" href={{ asset('stylesheets/style1.css') }}>

    </head>

    <body>

        <div class="container-fluid product_section_container">
            <div class="row">
                <div class="col product_section clearfix">

                    <!-- Breadcrumbs -->
                    <!--
    <div class="breadcrumbs d-flex flex-row align-items-center">
     <ul>
      <li><a href="index.html">Home</a></li>
      <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home & Living</a></li>
     </ul>
    </div> -->
                    <!-- SubHeader =============================================== -->
                    <section class="parallax-window" id="short" data-parallax="scroll"
                        data-image-src="./images/slider_1.1.jpg" data-natural-width="1400" data-natural-height="350">
                        <div id="subheader">
                            <div id="sub_content">
                                <h1>Place your order</h1>
                                <div class="bs-wizard row">
                                    <div class="col-4 bs-wizard-step complete">
                                        <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a href="cart.html" class="bs-wizard-dot"></a>
                                    </div>
                                    <div class="col-4 bs-wizard-step complete">
                                        <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                                        <div class="progress">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a href="cart_2.html" class="bs-wizard-dot"></a>
                                    </div>
                                    <div class="col-4 bs-wizard-step disabled">
                                        <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                                        <div class="progress">
                                            <div class="progress-bar"></div>
                                        </div>
                                        <a href="#0" class="bs-wizard-dot"></a>
                                    </div>
                                </div><!-- End bs-wizard -->
                            </div><!-- End sub_content -->
                        </div><!-- End subheader -->
                    </section><!-- End section -->
                    <!-- End SubHeader ============================================ -->
                    <!-- Content ================================================== -->
                    <div class="container margin_60_35">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="box_style_2 info d-none d-sm-block">
                                    <h4 class="nomargin_top">Delivery time <i class="icon_clock_alt float-right"></i>
                                    </h4>
                                    <p>
                                        Choose a shipping address to continue checking out. You'll still have a chance
                                        to review and edit your order before it's final.
                                    </p>
                                    <hr>
                                    <h4>Secure payment <i class="icon_creditcard float-right"></i></h4>
                                    <p>
                                        Choose a payment method to continue checking out. You'll still have a chance to
                                        review and edit your order before it's final.
                                    </p>
                                </div><!-- End box_style_2 -->
                                <div class="box_style_2 d-none d-sm-block" id="help">
                                    <i class="icon_lifesaver"></i>
                                    <h4>Need <span>Help?</span></h4>
                                    <a href="tel://00962789776587" class="phone">0789 776 587</a>
                                    <small>Saturday to Friday 7.00am - 11.30pm</small>
                                </div>
                            </div><!-- End col -->
                            <div class="col-lg-6">
                                <div class="box_style_2">
                                    <h2 class="inner">Payment methods</h2>
                                    <div class="payment_select">
                                        <label><input type="radio" value="" checked name="payment_method"
                                                class="icheck">Credit card</label>
                                        <i class="icon_creditcard"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Name on card</label>
                                        <input type="text" class="form-control" id="name_card_order"
                                            name="name_card_order" placeholder="First and last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Card number</label>
                                        <input type="text" id="card_number" name="card_number"
                                            class="form-control" placeholder="Card number">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Expiration date</label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" id="expire_month" name="expire_month"
                                                            class="form-control" placeholder="mm">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" id="expire_year" name="expire_year"
                                                            class="form-control" placeholder="yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Security code</label>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" id="ccv" name="ccv"
                                                                class="form-control" placeholder="CCV">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-6">
                                                        <img src="img/icon_ccv.gif" width="50" height="29"
                                                            alt="ccv"><small>Last 3 digits</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End row -->
                                    <div class="payment_select" id="paypal">
                                        <label><input type="radio" value="" name="payment_method"
                                                class="icheck">Pay with paypal</label>
                                    </div>
                                    <div class="payment_select nomargin">
                                        <label><input type="radio" value="" name="payment_method"
                                                class="icheck">Pay with cash</label>
                                        <i class="icon_wallet"></i>
                                    </div>
                                </div><!-- End box_style_1 -->
                            </div><!-- End col -->
                            <div class="col-lg-3" id="sidebar">
                                <div class="theiaStickySidebar">
                                    <div id="cart_box">
                                        <h3>Your order <i class="icon_cart_alt float-right"></i></h3>

                                        {{-- ==================yeuseff============================== --}}
                                           <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($cart[5]->price) --}}
                                @if (isset($cart))
                                    @foreach ($cart as $cartItem)
                                        <tr class="text-center">
                                            <td class="product-remove">

                                                <a
												
                                                    href="{{ route('pages.cart.destroy', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                        class="ion-ios-close">del</span></a>
                                            </td>
                                            <td class="image-prod">
                                                {{-- @dd( $cartItem['image']) --}}
                                                <div class="img"
                                                    style="background-image: url({{ isset($cartItem->product) ? asset('image/mas/img/' . $cartItem->product->image1 . '') : 'image/mas/img/' . $cartItem['image'] . '' }});">
                                                    {{-- {{ asset('image/mas/img/' . $item->image1 . '') }} --}}

                                                </div>
                                            </td>
                                            <td class="product-name">
                                                <h3>{{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}
                                                </h3>
                                                <p>{{ isset($cartItem->product) ? $cartItem->product->Sdescription : $cartItem['shortdes'] }}
                                                </p>
                                            </td>

                                            <td class="price">
                                                {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
                                            </td>

                                            <td class="price">
                                                {{ isset($cartItem->product) ? $cartItem->product->quantity : $cartItem['quantity'] }}
                                            </td>
                                            {{-- <td class="price">
                                                             <form action="{{ route('pages.cart.destroy',['id' =>$cartItem->id] ) }}" method="get">

                            @csrf
							<button type="submit" class="btn btn-danger">destroy</button>
															 </form>
                                            </td> --}}
                                            <td class="quantity">
                                                <div class="input-group mb-3">
                                                    <div class="quantity" style="display: flex">
                                                        {{-- <form action="{{ route('addQuantity', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}">

                                                            <a
                                                                href="{{ route('addQuantity', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                                    class="qty-minus"
                                                                    onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                                                    <i class="fa fa-minus"
                                                                        aria-hidden="true"></i></span></a>
                                                            <input type="number" class="qty-text form-control input-number"
                                                                id="qty" step="1" min="1" max="100"
                                                                name="quantity" value="{{ $cartItem['quantity'] }}" />
                                                            <a
                                                                href="{{ route('addQuantity', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                                    class="qty-plus"
                                                                    onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                                                    <i class="fa fa-plus" aria-hidden="true"></i></span></a>
                                                                    <input type="submit" value="update">`
                                                        </form> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total">
                                                {{ $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']) }}
                                            </td>
                                        </tr><!-- END TR-->
                                        {{-- @endif --}}
                                    @endforeach


                    </div>
                @else
                    <h1>No Product Found</h1>
                    @endif
                    </tbody>

                    </table>

                                        {{-- ===================yeuseff============================= --}}
                                        {{-- <table class="table table_summary">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#0" class="remove_item"><i
                                                                class="icon_minus_alt"></i></a> <strong>1x</strong>
                                                        Astronaut Resin Wood Art Lamp, Spacecraft Custom Night Light
                                                    </td>
                                                    <td>
                                                        <strong class="float-right">$1100</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#0" class="remove_item"><i
                                                                class="icon_minus_alt"></i></a> <strong>2x</strong>
                                                        Original Flower Oil Painting On Canvas
                                                    </td>
                                                    <td>
                                                        <strong class="float-right">$140</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#0" class="remove_item"><i
                                                                class="icon_minus_alt"></i></a> <strong>1x</strong>
                                                        Abstract Original Colorful Oil Painting On Canvas, Large Concise
                                                        Art, Custom Gift Painting, Modern Textured Wall Art, Living room
                                                        Home Decor
                                                    </td>
                                                    <td>
                                                        <strong class="float-right">$200</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#0" class="remove_item"><i
                                                                class="icon_minus_alt"></i></a> <strong>2x</strong> 3D
                                                        Flower Oil Painting On Canvas,Original White Cherry Flower,Large
                                                        Wall Art, Palette Knife Painting,Textured Acrylic
                                                        Painting,Handmade Art
                                                    </td>
                                                    <td>
                                                        <strong class="float-right">$900</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#0" class="remove_item"><i
                                                                class="icon_minus_alt"></i></a> <strong>1x</strong>
                                                        Original Colorful Textured Oil Painting on Canvas, Large
                                                        Abstract Hand Painted Modern Acrylic Painting Boho Wall Art for
                                                        Living Room Decor
                                                    </td>
                                                    <td>
                                                        <strong class="float-right">$120</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> --}}
                                        <hr>
                                        <!-- <div class="row" id="options_2">
                            <div class="col-xl-6 col-md-12 col-sm-12 col-6">
                                <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
                            </div>
                            <div class="col-xl-6 col-md-12 col-sm-12 col-6">
                                <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
                            </div>
                        </div>
                        <hr> -->
                                        <table class="table table_summary">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Subtotal <span class="float-right">$2,460</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Delivery fee <span class="float-right">$150</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="total">
                                                        TOTAL <span class="float-right">$2,610</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <a class="btn_full" href="checkout.html">Order now</a>
                                    </div><!-- End cart_box -->
                                </div><!-- End theiaStickySidebar -->
                            </div><!-- End col -->
                        </div><!-- End row -->
                    </div><!-- End container -->
                    <!-- End Content =============================================== -->



                    <div class="layer"></div><!-- Mobile menu overlay mask -->

                    <!-- Login modal -->
                    <div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content modal-popup">
                                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                                <form action="#" class="popup-form" id="myLogin">
                                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                                    <input type="text" class="form-control form-white" placeholder="Username">
                                    <input type="text" class="form-control form-white" placeholder="Password">
                                    <div class="text-left">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End modal -->

                    <!-- Register modal -->
                    <div class="modal fade" id="register" tabindex="-1" role="dialog"
                        aria-labelledby="myRegister" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content modal-popup">
                                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                                <form action="#" class="popup-form" id="myRegister">
                                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                                    <input type="text" class="form-control form-white" placeholder="Name">
                                    <input type="text" class="form-control form-white" placeholder="Last Name">
                                    <input type="email" class="form-control form-white" placeholder="Email">
                                    <input type="text" class="form-control form-white" placeholder="Password"
                                        id="password1">
                                    <input type="text" class="form-control form-white"
                                        placeholder="Confirm password" id="password2">
                                    <div id="pass-info" class="clearfix"></div>
                                    <div class="checkbox-holder text-left">
                                        <div class="checkbox">
                                            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                                            <label for="check_2"><span>I Agree to the <strong>Terms &amp;
                                                        Conditions</strong></span></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-submit">Register</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Register modal -->

                    <!-- Search Menu -->
                    <div class="search-overlay-menu">
                        <span class="search-overlay-close"><i class="icon_close"></i></span>
                        <form role="search" id="searchform" method="get">
                            <input value="" name="q" type="search" placeholder="Search..." />
                            <button type="submit"><i class="icon-search-6"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Search Menu -->
                    <!-- Benefit -->

                    {{-- <div class="benefit">
                        <div class="container">
                            <div class="row benefit_row">
                                <div class="col-lg-3 benefit_col">
                                    <div class="benefit_item d-flex flex-row align-items-center">
                                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i>
                                        </div>
                                        <div class="benefit_content">
                                            <h6>free shipping</h6>
                                            <p>Suffered Alteration in Some Form</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 benefit_col">
                                    <div class="benefit_item d-flex flex-row align-items-center">
                                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i>
                                        </div>
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
                                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="benefit_content">
                                            <h6>opening all week</h6>
                                            <p>8AM - 09PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}




                    <!-- Newsletter -->

                    {{-- <div class="newsletter">
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
                                                class="newsletter_submit_btn trans_300"
                                                value="Submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <!-- Footer -->
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
                    </footer><!-- /.footer --> --}}

                </div>

                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="styles/bootstrap4/popper.js"></script>
                <script src="styles/bootstrap4/bootstrap.min.js"></script>
                <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
                <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
                <script src="plugins/easing/easing.js"></script>
                <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
                <script src="js/categories_custom.js"></script>


                <!-- ===================cart============================== -->

                <!-- COMMON SCRIPTS -->
                <script src="./cart/js/jquery-3.5.1.min.js"></script>
                <script src="./cart/js/common_scripts_min.js"></script>
                <script src="./cart/js/functions.js"></script>
                <script src="./cart/assets/validate.js"></script>

                <!-- SPECIFIC SCRIPTS -->
                <script src="./cart/js/ResizeSensor.min.js"></script>
                <script src="./cart/js/theia-sticky-sidebar.min.js"></script>
                <script>
                    jQuery('#sidebar').theiaStickySidebar({
                        additionalMarginTop: 80
                    });
                </script>
                @endsection
{{-- </body>

</html> --}}
