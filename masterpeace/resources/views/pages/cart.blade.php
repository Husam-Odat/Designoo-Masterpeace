@extends('layouts.master')
@section('title', 'cart')

@section('content')

    {{-- <!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{ asset("styles/bootstrap4/bootstrap.min.css")}}>
<link href={{ asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href={{ asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}>
<link rel="stylesheet" type="text/css" href={{ asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}>
<link rel="stylesheet" type="text/css" href={{ asset("plugins/OwlCarousel2-2.2.1/animate.css")}}>
<link rel="stylesheet" type="text/css" href={{ asset("plugins/jquery-ui-1.12.1.custom/jquery-ui.css")}}>
<link rel="stylesheet" type="text/css" href={{ asset("styles/categories_styles.css")}}>
<link rel="stylesheet" type="text/css" href={{ asset("styles/categories_responsive.css")}}>


<!-- ============================================= -->

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title> --}}

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

        <div class="super_container">

            <!-- Header -->

            {{-- <header class="header trans_300" >

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
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
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<!-- <a href="#">colo<span>shop</span></a> -->
							<a href="index.html"><img src="images/logoo.png" alt="" srcset="" style="height:75px ; width: 107px;"></a>

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
		</div>

	</header> --}}

            <div class="fs_menu_overlay"></div>

            {{-- <!-- Hamburger Menu -->

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

            <div class="container-fluid product_section_container">
                {{-- <div class="row"> --}}
                <div>
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
                                        <div class="col-4 bs-wizard-step active">
                                            <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <a href="#0" class="bs-wizard-dot"></a>
                                        </div>
                                        <div class="col-4 bs-wizard-step disabled">
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
                                            <a href="cart_3.html" class="bs-wizard-dot"></a>
                                        </div>
                                    </div><!-- End bs-wizard -->
                                </div><!-- End sub_content -->
                            </div><!-- End subheader -->
                        </section><!-- End section -->
                        <!-- End SubHeader ============================================ -->

                        <div id="position">
                            <div class="container">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/pages.allproducts/1') }}">allproducts</a></li>
                                    <li>Check Out</li>
                                </ul>
                                {{-- <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a> --}}
                            </div>
                        </div><!-- Position -->

                        <!-- Content ================================================== -->
                        <div class="container margin_60_35">
                            <span style="color:azure;">{{ $total_all = 0 }}</span>
                            <form id="myForm" action="{{ route('cash') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="box_style_2 info d-none d-sm-block">
                                            <h4 class="nomargin_top">Delivery time <i
                                                    class="icon_clock_alt float-right"></i>
                                            </h4>
                                            <p>
                                                Choose a shipping address to continue checking out. You'll still have a
                                                chance
                                                to review and edit your order before it's final.
                                            </p>
                                            <hr>
                                            <h4>Secure payment <i class="icon_creditcard float-right"></i></h4>
                                            <p>
                                                Choose a payment method to continue checking out. You'll still have a chance
                                                to
                                                review and edit your order before it's final.
                                            </p>
                                        </div><!-- End box_style_1 -->
                                        <div class="box_style_2 d-none d-sm-block" id="help">
                                            <i class="icon_lifesaver"></i>
                                            <h4>Need <span>Help?</span></h4>
                                            <a href="tel://00962789776587" class="phone">0789 776 587</a>
                                            <small>Saturday to Friday 7.00am - 11.30pm</small>
                                        </div>
                                    </div><!-- End col -->

                                    <div class="col-lg-6">
                                        <div class="box_style_2" id="order_process">
                                            <h2 class="inner">Your order details</h2>
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control" id="firstname_order"
                                                    name="firstname_order" placeholder="First name"
                                                    value="{{ old('firstname_order') !== null ? old('firstname_order') : auth()->user()->name }}">
                                                @error('firstname_order')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" id="lastname_order"
                                                    name="lastname_order" placeholder="Last name"
                                                    value="{{ old('lastname_order') !== null ? old('lastname_order') : auth()->user()->lastName }}">
                                                @error('lastname_order')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Telephone/mobile</label>
                                                <input type="text" id="tel_order" name="phone_order"
                                                    class="form-control" placeholder="Telephone/mobile"
                                                    value="{{ old('phone_order') !== null ? old('phone_order') : auth()->user()->phone }}">
                                                @error('phone_order')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id="email_booking_2" name="email_order"
                                                class="form-control" placeholder="Your email">
                                        </div> --}}
                                            <div class="form-group">
                                                <label>Your full address</label>
                                                <input type="text" id="address_order" name="address_order"
                                                    class="form-control" placeholder=" Your full address"
                                                    value="{{ old('address_order') !== null ? old('address_order') : auth()->user()->address }}">
                                                {{-- value="{{ old('address_order') }}"> --}}
                                                @error('address_order')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" id="city_order" name="city_order"
                                                            class="form-control" placeholder="Your city"
                                                            value="{{ old('city_order') !== null ? old('city_order') : auth()->user()->city }}">

                                                        {{-- value="{{ old('city_order') }}"> --}}
                                                        @error('city_order')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Postal code</label>
                                                        <input type="text" id="pcode_oder" name="postalcode_order"
                                                            class="form-control" placeholder=" Your postal code"
                                                            value="{{ old('postalcode_order') !== null ? old('postalcode_order') : auth()->user()->postalCode }}">

                                                        {{-- value="{{ old('postalcode_order') }}"> --}}
                                                        @error('postalcode_order')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>country</label>
                                                        <input type="text" id="country_order" name="country_order"
                                                            class="form-control" placeholder="Your country"
                                                            value="{{ old('country_order') !== null ? old('country_order') : auth()->user()->country }}">

                                                        {{-- value="{{ old('country_order') }}"> --}}
                                                        @error('country_order')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>state</label>
                                                        <input type="text" id="state_order" name="state_order"
                                                            class="form-control" placeholder=" Your state"
                                                            value="{{ old('state_order') !== null ? old('state_order') : auth()->user()->state }}">

                                                        {{-- value="{{ old('state_order') }}"> --}}
                                                        @error('state_order')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="row">
                                                                                 <div class="col-md-6 col-sm-6">
                                                                                 <div class="form-group">
                                                                                 <label>Delivery Day</label>
                                                                                 <select class="form-control" name="delivery_schedule_day" id="delivery_schedule_day">
                                                                                 <option value="" selected>Select day</option>
                                                                                 <option value="Today">Today</option>
                                                                                 <option value="Tomorrow">Tomorrow</option>
                                                                                 </select>
                                                                                 </div>
                                                                                 </div>
                                                                                 <div class="col-md-6 col-sm-6">
                                                                                 <div class="form-group">
                                                                                 <label>Delivery time</label>
                                                                                 <select class="form-control" name="delivery_schedule_time" id="delivery_schedule_time">
                                                                                 <option value="" selected>Select time</option>
                                                                                 <option value="11.30am">11.30am</option>
                                                                                 <option value="11.45am">11.45am</option>
                                                                                 <option value="12.15am">12.15am</option>
                                                                                 <option value="12.30am">12.30am</option>
                                                                                 <option value="12.45am">12.45am</option>
                                                                                 <option value="01.00pm">01.00pm</option>
                                                                                 <option value="01.15pm">01.15pm</option>
                                                                                 <option value="01.30pm">01.30pm</option>
                                                                                 <option value="01.45pm">01.45pm</option>
                                                                                 <option value="02.00pm">02.00pm</option>
                                                                                 <option value="07.00pm">07.00pm</option>
                                                                                 <option value="07.15pm">07.15pm</option>
                                                                                 <option value="07.30pm">07.30pm</option>
                                                                                 <option value="07.45pm">07.45pm</option>
                                                                                 <option value="08.00pm">08.00pm</option>
                                                                                 <option value="08.15pm">08.15pm</option>
                                                                                 <option value="08.30pm">08.30pm</option>
                                                                                 <option value="08.45pm">08.45pm</option>
                                                                                 </select>
                                                                                 </div>
                                                                                 </div>
                                                                                 </div> -->
                                            <!-- <hr> -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Notes for the delivery company</label>
                                                    <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="note"
                                                        id="notes" value="{{ old('note') }}">
                                                @error('note')
<p class="text-danger">{{ $message }}</p>
@enderror </textarea>
                                                </div>
                                            </div>
                                        </div><!-- End box_style_1 -->
                                    </div><!-- End col -->
                                    <div class="col-lg-3" id="sidebar">
                                        <div class="theiaStickySidebar">
                                            <div id="cart_box">
                                                <h3>Your order <i class="icon_cart_alt float-right"></i></h3>


                                                {{-- ========================cart sh========================== --}}

                                                {{-- ========================cart sh========================== --}}
                                                {{-- ========================add chatgpt========================== --}}
                                                {{-- <table class="table">
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
                                                    <tbody> --}}
                                                {{-- @dd($cart[5]->price) --}}
                                                @if (isset($cart))
                                                    {{-- {{$total_all=0;}} --}}
                                                    @foreach ($cart as $cartItem)
                                                        <tr>
                                                            <td>
                                                                <a href="#0" class="remove_item"><i
                                                                        class="icon_minus_alt"></i></a>
                                                                <strong>{{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}x</strong>
                                                                {{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}
                                                                {{ isset($cartItem->product) ? $cartItem->product->Sdescription : $cartItem['shortdes'] }}
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>Price : <strong class="float-right">
                                                                            ${{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}</strong>
                                                                    </li>
                                                                    <li> Sub Total : <strong class="float-right">
                                                                            ${{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}</strong>
                                                                    </li>
                                                                    {{-- <li>Sub Total : <strong class="float-right">
                                                                            {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}</strong>
                                                                    </li> --}}
                                                                    <li>Conulative Total : <strong class="float-right">
                                                                            ${{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                                        </strong></li>
                                                                </ul>

                                                            </td>


                                                        </tr>








                                                        <tr class="text-center">



                                                            {{-- <td class="product-remove">

                                                                        <a
                                                                            href="{{ route('pages.cart.destroy', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                                                class="ion-ios-close">del</span></a>
                                                                    </td> --}}
                                                            {{-- <td class="image-prod">
                                                                    <div class="img"
                                                                        style="background-image: url({{ isset($cartItem->product) ? asset('image/mas/img/' . $cartItem->product->image1 . '') : 'image/mas/img/' . $cartItem['image'] . '' }});">

                                                                    </div>
                                                                </td> --}}

                                                            {{-- <td class="product-name">
                                                                        <p>{{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}
                                                                        </p>
                                                                        <p>{{ isset($cartItem->product) ? $cartItem->product->Sdescription : $cartItem['shortdes'] }}
                                                                        </p>
                                                                    </td> --}}
                                                            {{-- 
                                                                    <td class="price">
                                                                        {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
                                                                    </td>

                                                                    <td class="price">
                                                                        {{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}
                                                                    </td> --}}
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

                                                                {{-- {{$total_price= (isset($cartItem->product) ?$cartItem['quantity'] * $cartItem->product->price : $cartItem['price']) }} --}}
                                                                {{-- {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }} --}}
                                                                {{-- {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }} --}}

                                                            </td>
                                                            <td class="total">

                                                                {{-- {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }} --}}

                                                            </td>
                                                        </tr><!-- END TR-->
                                                        {{-- @endif --}}
                                                    @endforeach


                                            </div>
                                        @else
                                            <h1>No Product Found</h1>
                                            @endif
                                            {{-- </tbody>

                                            </table> --}}
                                            {{-- ========================add chatgpt========================== --}}
                                            {{-- <tr>
                                                                <td>
                                                                    <a href="#0" class="remove_item"><i
                                                                            class="icon_minus_alt"></i></a>
                                                                    <strong>2x</strong> Original Flower Oil Painting On
                                                                    Canvas
                                                                </td>
                                                                <td>
                                                                    <strong class="float-right">$140</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#0" class="remove_item"><i
                                                                            class="icon_minus_alt"></i></a>
                                                                    <strong>1x</strong> Abstract Original Colorful Oil
                                                                    Painting On Canvas, Large Concise Art, Custom Gift
                                                                    Painting, Modern Textured Wall Art, Living room Home
                                                                    Decor
                                                                </td>
                                                                <td>
                                                                    <strong class="float-right">$200</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#0" class="remove_item"><i
                                                                            class="icon_minus_alt"></i></a>
                                                                    <strong>2x</strong> 3D Flower Oil Painting On
                                                                    Canvas,Original White Cherry Flower,Large Wall Art,
                                                                    Palette Knife Painting,Textured Acrylic
                                                                    Painting,Handmade Art
                                                                </td>
                                                                <td>
                                                                    <strong class="float-right">$900</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="#0" class="remove_item"><i
                                                                            class="icon_minus_alt"></i></a>
                                                                    <strong>1x</strong> Original Colorful Textured Oil
                                                                    Painting on Canvas, Large Abstract Hand Painted Modern
                                                                    Acrylic Painting Boho Wall Art for Living Room Decor
                                                                </td>
                                                                <td>
                                                                    <strong class="float-right">$120</strong>
                                                                </td>
                                                            </tr> --}}
                                            </tbody>
                                            </table>
                                            {{-- ========================add chatgpt========================== --}}

                                            {{-- ========================add chatgpt========================== --}}
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
                                                            Subtotal <span class="float-right">${{ $total_all }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Delivery fee 10% <span
                                                                class="float-right">${{ $total_all * 0.1 }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="total">
                                                            TOTAL <span
                                                                class="float-right">${{ $total_all + $total_all * 0.1 }}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            {{-- <form action="{{ route('paypal') }}" method="post">
                                            @csrf --}}
                                            <input type="hidden" name="total_all"
                                                value="{{ $total_all + $total_all * 0.1 }}">
                                            {{-- <input type="text" value="{{$cartItem['quantity'] * $cartItem->product->price}}" name='price'hidden> --}}



                                            <button onclick="updateFormAction('{{ route('cash') }}')" class="btn_full"
                                                name="submit" type="submit">Pay Cash</button>
                                            <button class="paypal-button" target="_blank" type="submit"
                                                onclick="updateFormAction('{{ route('paypal') }}')">
                                                <em><span style="color:#003087;">Pay</span><span
                                                        style="color:#085af4;">Pal</span></em>
                                            </button>
                                            <sub style="color:gray; font-weight: bold;"><em>Powerd by <span
                                                        style="color:#003087;">Pay</span><span
                                                        style="color:#085af4;">Pal</span></em></sub>
                                            <style>
                                                /* Style for the custom PayPal-like button */
                                                .paypal-button {
                                                    display: inline-block;
                                                    padding: 10px 100px;
                                                    font-size: 16px;
                                                    font-weight: bold;
                                                    text-align: center;
                                                    text-decoration: none;
                                                    color: #003087;
                                                    /* PayPal blue color */
                                                    background-color: #ffd700;
                                                    /* Gold color */
                                                    border: 2px solid #ffd700;
                                                    border-radius: 25px;
                                                    /* Adjust the border-radius for rounded corners */
                                                    cursor: pointer;
                                                    transition: background-color 0.3s, border-color 0.3s, color 0.3s;
                                                }

                                                .paypal-button:hover {
                                                    background-color: #ffcc00;
                                                    /* Darker shade of gold on hover */
                                                    border-color: #ffcc00;
                                                    color: #001e55;
                                                    /* Dark blue color on hover */
                                                }
                                            </style>

                                            {{-- </form> --}}
                                            {{-- <a class="btn_full" href="cart2.html">Order now</a> --}}
                                        </div><!-- End cart_box -->
                                    </div><!-- End theiaStickySidebar -->
                                </div><!-- End col -->
                            </form>
                        </div><!-- End row -->
                    </div><!-- End container -->
                    <!-- End Content =============================================== -->
                    <!-- Benefit -->
                    <script>
                        function updateFormAction(newAction) {
                            // Get the form element by its id
                            var myForm = document.getElementById("myForm");

                            // Update the action attribute
                            myForm.action = newAction;
                        }
                    </script>

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
                    <script src={{ asset('./cart/js/jquery-3.5.1.min.js') }}></script>
                    <script src={{ asset('./cart/js/common_scripts_min.js') }}></script>
                    <script src={{ asset('./cart/js/functions.js') }}></script>
                    <script src={{ asset('./cart/assets/validate.js') }}></script>

                    <!-- SPECIFIC SCRIPTS -->
                    <script src={{ asset('./cart/js/ResizeSensor.min.js') }}></script>
                    <script src={{ asset('./cart/js/theia-sticky-sidebar.min.js') }}></script>
                    <script>
                        jQuery('#sidebar').theiaStickySidebar({
                            additionalMarginTop: 80
                        });
                    </script>

                @endsection
