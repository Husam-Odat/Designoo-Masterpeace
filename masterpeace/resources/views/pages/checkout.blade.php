@extends('layouts.master')
@section('title', 'checkout')

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

        <div class="super_container-fluid">

            <!-- Header -->

            <header class="header trans_300" style="top: 0px;">

                <!-- Top Navigation -->
                {{-- 
            <div class="top_nav">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">free shipping on all u.s orders over $500</div>
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
            </div> --}}

                <!-- Main Navigation -->

                {{-- <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
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
                                    <li><a href="my-account.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="checkout">
                                        <a href="#">
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
            </div> --}}

            </header>

            <div class="fs_menu_overlay"></div>

            <!-- Hamburger Menu -->

            {{-- <div class="hamburger_menu">
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


                        <!-- End SubHeader ============================================ -->



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
                                        <div class="col-4 bs-wizard-step complete">
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

                        <div id="position">
                            <div class="container">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/cartttt">Cart</a></li>
                                    <li>checkout</li>
                                </ul>

                            </div>
                        </div><!-- Position -->

                        <!-- Content ================================================== -->
                        <div class="container margin_60_35">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="box_style_2">
                                        <h2 class="inner">Order confirmed!</h2>
                                        <div id="confirm">
                                            <i class="icon_check_alt2"></i>
                                            <h3>Thank you!</h3>
                                            <p>
                                                Order Date {{ $order->created_at }} <br>
                                                INVOICE # {{ $invoiceNumber }} <br>
                                                Expected Arrival {{ $formattedDeliveryDate }}<br>

                                                {{-- USPS 234094567242423422898<br> --}}
                                            </p>
                                        </div>
                                        <h4>Summary</h4>
                                        {{-- ===========================yeuseff======================= --}}
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-primary">
                                                    <tr class="text-center">
                                                        {{-- <th>&nbsp;</th> --}}
                                                        <th>&nbsp;</th>
                                                        <th>Image </th>
                                                        <th>Product name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                        <th>Comulative</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @dd($cart[5]->price) --}}
                                                    @php
                                                        $total_all = 0; // Initialize the total_all variable before the @if statement
                                                    @endphp

                                                    @if (isset($cart))
                                                        {{ $i = 0 }}
                                                        @foreach ($order->orderProducts as $orderProducts)
                                                            <tr class="text-center">
                                                                <td class="product-remove">

                                                                    {{-- <a
                                                                    href="{{ route('pages.cart.destroy', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                                        class="ion-ios-close">del</span></a> --}}
                                                                </td>
                                                                <td>
                                                                    <a href="pages.single/{{ $productIds[$i]->id }}"> <img
                                                                            src="images/{{ isset($productIds[$i]->id) ? $productIds[$i]->img : $cartItem['image'] }}"
                                                                            class="img-fluid rounded-3"
                                                                            alt="product image"></a>
                                                                </td>
                                                                {{-- <td class="image-prod">
                                                                @dd( $cartItem['image'])
                                                                <div class="img"
                                                                    style="background-image: url({{ isset($cartItem->product) ? asset('image/mas/img/' . $cartItem->product->image1 . '') : 'image/mas/img/' . $cartItem['image'] . '' }});">
                                                                    {{ asset('image/mas/img/' . $item->image1 . '') }}

                                                                </div>
                                                            </td> --}}
                                                                <td class="product-name">
                                                                    <a href="pages.single/{{ $productIds[$i]->id }}">
                                                                        <p>{{ isset($productIds[$i]->id) ? $productIds[$i]->name : $cartItem['productname'] }}
                                                                    </a>
                                                                    {{-- <a href="pages.single/{{$orderProducts->product->id}}"><p>{{ isset($orderProducts->product) ? $orderProducts->product->name : $cartItem['productname'] }}</a> --}}
                                                                    </p>
                                                                    {{-- <p>{{ isset($cartItem->product) ? $cartItem->product->Sdescription : $cartItem['shortdes'] }}
                                                                </p> --}}
                                                                </td>

                                                                <td class="price">
                                                                    ${{ isset($orderProducts) ? $orderProducts->price : $cartItem['price'] }}
                                                                </td>

                                                                <td class="price">
                                                                    {{ isset($orderProducts) ? $orderProducts->quantity : $cartItem['quantity'] }}
                                                                </td>
                                                                <td class="price">
                                                                    ${{ $orderProducts->quantity * (isset($orderProducts) ? $orderProducts->price : $cartItem['price']) }}
                                                                </td>
                                                                {{-- <td class="price"> --}}
                                                                {{-- {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }} --}}
                                                                {{-- </td> --}}
                                                                <td class="price">
                                                                    ${{ $total_all += isset($orderProducts) ? $orderProducts->price * $orderProducts->quantity : $cartItem['quantity'] * $cartItem['price'] }}
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
                                                                {{-- <td class="total">
                                                                {{ $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']) }}
                                                            </td> --}}
                                                            </tr><!-- END TR-->
                                                            {{-- @endif --}}
                                                            {{ $i++ }}
                                                        @endforeach


                                        </div>
                                    @else
                                        <h1>No Product Found</h1>
                                        @endif
                                        </tbody>

                                        </table>
                                    </div>

                                    <table class="table table-striped nomargin">
                                        {{-- <tbody>
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
                                                    Wall Art, Palette Knife Painting,Textured Acrylic Painting,Handmade
                                                    Art
                                                </td>
                                                <td>
                                                    <strong class="float-right">$900</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#0" class="remove_item"><i
                                                            class="icon_minus_alt"></i></a> <strong>1x</strong>
                                                    Original Colorful Textured Oil Painting on Canvas, Large Abstract
                                                    Hand Painted Modern Acrylic Painting Boho Wall Art for Living Room
                                                    Decor
                                                </td>
                                                <td>
                                                    <strong class="float-right">$120</strong>
                                                </td>
                                            </tr> --}}

                                        <tr>
                                            <td>
                                                Delivery schedule <a href="#" class="tooltip-1"
                                                    data-placement="top" title=""
                                                    data-original-title="Please consider 2 working days of margin for the delivery!"><i
                                                        class="icon_question_alt"></i></a>
                                            </td>
                                            <td>
                                                <strong class="float-right"> By {{ $formattedDeliveryDate }}</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="total_confirm" style="background-color:lightgray">
                                                Sub Total
                                            </td>
                                            <td class="total_confirm " style="background-color:lightgray">
                                                <span class="float-right">
                                                    ${{ $total_all }} </span>
                                                {{-- <span class="float-right">$2,610</span> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="total_confirm" style="background-color:lightgray; ">
                                                Tax
                                            </td>
                                            <td class="total_confirm" style="background-color:lightgray; ">
                                                <span class="float-right">
                                                    ${{ $total_all * 0.1 }} </span>
                                                {{-- <span class="float-right">$2,610</span> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="total_confirm">
                                                Total
                                            </td>
                                            <td class="total_confirm">
                                                <span class="float-right">
                                                    ${{ $order->total }}
                                                </span>
                                                {{-- <span class="float-right">$2,610</span> --}}
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td style="padding-left: 100px; ">
                                                <a style="background-color:#07cdec;" class="btn_full ml-3"
                                                    href="/">back to home page</a>
                                            </td>
                                            <td style="padding-left: 100px;">

                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End container -->
                    <!-- End Content =============================================== -->
                    <!-- End Content =============================================== -->
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
                        </div>
                    </div> --}}
                    <!-- Footer -->
                    {{-- <footer class="footer ">
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
