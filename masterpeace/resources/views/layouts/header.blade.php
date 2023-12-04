<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <title>designoo</title>
    <meta charset="utf-8">
    <!-- Favicon -->
    <link href="{{ asset('images/logoo.png') }}" rel="icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="designoo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href={{ asset('styles/bootstrap4/bootstrap.min.css') }}>
    <link href={{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/main_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/responsive.css') }}>




    {{-- ====================contact==================== --}}
    <link rel="stylesheet" href={{ asset('plugins/themify-icons/themify-icons.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/contact_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/contact_responsive.css') }}>
    {{-- ====================contact==================== --}}
    {{-- ====================allproducts==================== --}}
    <link rel="stylesheet" type="text/css" href={{ asset('styles/categories_styles.css') }}>>
    {{-- ====================single product==================== --}}

    <link rel="stylesheet" type="text/css" href={{ asset('styles/single_styles.css') }}>

    {{-- =============cart====================== --}}
    <!-- GOOGLE WEB FONT -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> --}}

    <!-- BASE CSS -->
    <link href={{ asset('./cart/css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/menu.css') }} rel="stylesheet">
    {{-- <link href={{ asset('./cart/css/style.css') }} rel="stylesheet"> --}}
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
    {{-- =============cart====================== --}}

    <!-- Bootstrap  -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" > -->

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href={{ asset('stylesheets/style1.css') }}>
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css"> -->

    <!-- Colors -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors"> -->

    <!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->


    <!-- Favicon and touch icons  -->
    <!-- <link href="icon/favicon.png" rel="shortcut icon"> -->

    <!--[if lt IE 9]>
 <script src="javascript/html5shiv.js"></script>
 <script src="javascript/respond.min.js"></script>
<![endif]-->



    <style>
        @media only screen and (max-width: 1000px) {
            .companymarks {
                width: 60%;
                /* Adjust the percentage as needed */
                text-align: center;
                margin-left: 60%;

            }
        }

        .product_price {
            color: rgb(130, 130, 239);
        }

        /* ====search================== */
        .sidebar .sidebar-widget .search-widget {
            position: relative;
        }

        .sidebar .search-widget input {
            height: 50px;
            border: 1px solid #dddddd;
            border-radius: 5%;
        }

        .sidebar .search-widget input:focus {
            box-shadow: none;
            border-color: rgb(86, 132, 217);
        }

        .sidebar .search-widget .btn {
            position: absolute;
            top: 4px;
            right: 15px;
            height: 40px;
            padding: 0;
            font-size: 20px;
            color: rgb(86, 132, 217);
            background: none;
            border-radius: 0;
            border: none;
            transition: .3s;
        }

        .sidebar .search-widget .btn:hover {
            color: #4a4c70;
        }


        .red_button a {
            display: block;
            color: #FFFFFF;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            line-height: 40px;
            width: 100%;
        }


        /* =======add cart btn============== */

        .add_to_cart_buttonc {
            width: 160px;
            margin-left: 19px;
            font-size: 12px !important;
        }

        .red_buttonc {

            width: 160px;
            margin-left: 19px;
            font-size: 12px !important;
            display: -webkit-inline-box;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: -webkit-inline-flex;
            display: inline-flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: auto;
            height: 40px;
            background:  #07cdec;
            border-radius: 3px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /* footer {
 color: white !important;
}
.afooter{
 color: white;
} */

.section_title::after {
    display: block;
    position: absolute;
    top: calc(100% + 13px);
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    width: 60px;
    height: 5px;
    background:  #07cdec !important;
    content: '';}
    .grid_sorting_button.active {
    color: #FFFFFF;
    background:  #07cdec !important;
}
.product_price {
    font-size: 16px;
    color:  #07cdec !important;
    font-weight: 600;
}
.product_bubble_red {
    background:  #07cdec !important;
}
.product_bubble_red::after {
    border-color: transparent transparent transparent  #07cdec !important;
}

.benefit_icon i {
    font-size: 30px;
    color:  #07cdec !important;
}
.benefit_icon i {
    font-size: 30px;
    color:  #07cdec !important;
}
.benefit_icon i {
    font-size: 30px;
    color:  #07cdec !important;
}
.benefit_icon i {
    font-size: 30px;
    color:  #07cdec !important;
}
.newsletter_submit_btn {
    width: 160px;
    height: 46px;
    border: none;
    background:  #07cdec !important;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    cursor: pointer;
}
.timer_num {
    font-size: 48px;
    font-weight: 600;
    color:  #07cdec !important;
    margin-top: 10px;
}
.red_button {
    display: -webkit-inline-box;
    display: -moz-inline-box;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: auto;
    height: 40px;
    background: #07cdec !important;
    border-radius: 3px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.ui-slider .ui-slider-range {
    position: absolute;
    z-index: 1;
    font-size: .7em;
    display: block;
    border: 0;
    background-position: 0 0;
    background-color: #07cdec !important;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
    /* border: 1px solid #c5c5c5; */
    background: #07cdec !important;
    font-weight: normal;
    color: #454545;
}
.sidebar_categories li.active a {
    color: #07cdec !important;
}

element.style {
    background-color:  #07cdec !important;
}
.tab.active span {
    color:  #07cdec !important;
    border-bottom: solid 1px  #07cdec !important;
}
.tab_title h4 {
    display: inline-block;
    color:  #07cdec !important;
    border-bottom: solid 1px  #07cdec !important;
}
.review_date {
    color:  #07cdec !important;
    margin-top: -4px;
}

element.style {
    background-color:  #07cdec !important;
    color: white;
}
.btn-info {
    color: #fff;
    background-color: #07cdec;
    border-color: #17a2b8;
}
.red_button {
    display: -webkit-inline-box;
    display: -moz-inline-box;
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: auto;
    height: 40px;
    background: #07cdec !important;
    border-radius: 3px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
::selection {
    background: #8cd9e4 !important;
    color: #07cdec !important;
}
.form-control
{
	color: #07cdec !important;
}
p a:active
{
	position: relative;
	color: #07cdec !important;
}
p a:hover
{
	color: #07cdec !important;
	background: #8cd9e4 !important;
}
p a:hover::after
{
	opacity: 0.2;
}
::selection
{
	background: #8cd9e4 !important;
	color: #07cdec !important;
}
p::selection
{
	background: #8cd9e4 !important;
}
.grid_sorting_button.active:hover
{
	/* background: #8cd9e4 !important !important; */
	background: #8cd9e4 !important ;
}
.grid_sorting_button.active
{
	color: #FFFFFF;
	background: #8cd9e4 !important;
}
.newsletter_submit_btn
{
	width: 160px;
	height: 46px;
	border: none;
	background: #07cdec !important;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: 500;
	text-transform: uppercase;
	cursor: pointer;
}
.newsletter_submit_btn:hover
{
	background: #8cd9e4 !important;
}
.newsletter_submit_btn
{
	width: 160px;
	height: 46px;
	border: none;
	background: #07cdec !important;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: 500;
	text-transform: uppercase;
	cursor: pointer;
}
.footer_social ul li a:hover
{
	color: #07cdec !important;
}
.footer_nav li a:hover, .cr a, .cr i
{
	color: #07cdec !important;
}
p a:active
{
	position: relative;
	color: #07cdec !important;
}
p a:hover
{
	color: #07cdec !important;
	background: #dbf7fd !important;
}
p a:hover::after
{
	opacity: 0.2;
}
::selection
{
	background: #dbf7fd !important;
	color: #07cdec !important;
}
p::selection
{
	background: #dbf7fd;
}
  .btn-tarnsparnt:hover {
        background-color: #07cdec !important;
    }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300" style="top: 0px;" {{-- style="z-index: 10000" --}}>

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">
                                <span class="ml-3">Designoo</span>
                                <span class="ml-3">husamaldean.odat@gmail.com</span>
                                <span class="ml-3">+962 78977 6587</span>
                                <span class="ml-3">Jordan</span>
                                <span class="ml-3">21110</span>
                                <span class="ml-3">Irbid</span>
 </div>
                            {{-- <div class="top_nav_left">free shipping on all orders over $500</div> --}}
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
                                <!-- <a href="index.html">colo<span>shop</span></a> -->
                                <a href="{{ url('/') }}"><img src={{ asset('images/logoo.png') }}
                                        alt="" srcset="" style="height:75px ; width: 107px;"></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    @if (auth()->user() && auth()->user()->role == 1)
                                        <li><a href="{{ url('/dash') }}">Admin Dash Board</a></li>
                                    @endif
                                    <li><a href="{{ url('/') }}">home</a></li>

                                    <li><a href="{{ url('/pages.allproducts/1') }}">shop</a></li>

                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/contact') }}">contact</a></li>
                                    {{-- <li><a href="registration.html">SignUp</a></li>
                                    <li><a href="login.html">Login</a></li> --}}
                                    <!-- Settings Dropdown -->
                                    {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> --}}

                                    @if (Route::has('login'))
                                        @auth

                                            {{-- logout button --}}
                                            <!-- Authentication -->
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>

                                                </form>
                                            </li>

                                            {{-- logout button --}}



                                            {{-- <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
                                            <li><a href="{{ url('/profile') }}"><i class="fa fa-user fa-2x"
                                                        aria-hidden="true"></i></a></li>
                                        @else
                                            <li><a href="{{ url('/login11') }}">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ url('/registration11') }}">Register</a></li>
                                            @endif
                                        @endauth

                                    @endif

                                </ul>
                                <ul class="navbar_user">
                                    <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                                    {{-- <li><a href="my-account.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li> --}}

                                    <li class="checkout">
                                        <a href="{{ url('/cartttt') }}">
                                            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
                                            <span id="cart-count" class="checkout_items">@guest
                                                    {{ count(session('cart', [])) }}
                                                @endguest
                                            </span>
                                        </a>

                                        <!-- Your cart icon -->
                                        {{-- <a href="{{ url('/cartttt') }}">
                                                <div id="cart-icon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span id="cart-count">0</span>
                                            </div></a> --}}

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
        <!-- Your cart icon -->
        {{-- <div id="cart-icon">
            <i class="fa fa-shopping-cart"></i>
            <span id="cart-count">0</span>
        </div> --}}

        <!-- Your button to add items to the cart -->
        {{-- <button id="add-to-cart-btn" onclick="addToCart()">Add to Cart</button> --}}



        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    {{-- <li class="menu_item has-children">
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
                    </li> --}}
                    {{-- <li class="menu_item has-children">
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
                    </li> --}}
                    {{-- <li class="menu_item has-children">
                        <a href="#">
                            My Account
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                        </ul>
                    </li> --}}

                    @if (auth()->user() && auth()->user()->role == 1)
                        <li class="menu_item"><a href="{{ url('/dash') }}">Admin Dash Board</a></li>
                    @endif
                    <li class="menu_item"><a href="{{ url('/') }}">home</a></li>
                    <li class="menu_item"><a href="{{ url('/pages.allproducts/1') }}">shop</a></li>
                    <li class="menu_item"><a href="{{ url('/about') }}">About</a></li>
                    <li class="menu_item"><a href="{{ url('/contact') }}">contact</a></li>
                    {{-- <li class="menu_item"><a href="#">blog</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                    <li class="menu_item"><a href="#">contact</a></li> --}}

                    @if (Route::has('login'))
                        @auth

                            {{-- logout button --}}
                            <!-- Authentication -->
                            <li class="menu_item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); 
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>

                                </form>
                            </li>

                            {{-- logout button --}}



                            {{-- <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
                            <li class="menu_item"><a href="{{ url('/profile') }}"><i class="fa fa-user fa-2x"
                                        aria-hidden="true"></i></a></li>
                        @else
                            <li class="menu_item"><a href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                                <li class="menu_item"><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth

                    @endif

                </ul>
            </div>
        </div>




        <script src={{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}></script>
        <script>
            // Function to update the cart count
            function updateCartCount() {
                $.ajax({
                    url: '/get-cart-count',
                    method: 'GET',
                    success: function(data) {
                        // Update the cart count dynamically
                        var cartCountElement = $('#cart-count');

                        // Check if the cart count is greater than 0
                        if (data.cartCount > 0) {
                            cartCountElement.text(data.cartCount);
                        } else {
                            // If cart count is 0, hide the element or set it to an empty string
                            cartCountElement.hide(); // or cartCountElement.text('');
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching cart count:', error);
                    }
                });
            }

            // Call the function initially
            updateCartCount();

            // Your button to add items to the cart
            $('#add-to-cart-btn').on('click', function() {
                // Assuming you have some logic to add items to the cart
                // Call the function to update the cart count after adding items
                updateCartCount();
            });
        </script>



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Colo Shop Template">
        <meta name="viewport" content={{ asset('width=device-width, initial-scale=1') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('styles/bootstrap4/bootstrap.min.css') }}>
        <link href={{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet"
            type="text/css">
        <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('styles/main_styles.css') }}>
        <link rel="stylesheet" type="text/css" href={{ asset('styles/responsive.css') }}>

        {{-- <script src={{ asset("js/jquery-3.2.1.min.js") }}></script>
<script src={{ asset("styles/bootstrap4/popper.js") }}></script>
<script src={{ asset("styles/bootstrap4/bootstrap.min.js") }}></script>
<script src={{ asset("plugins/Isotope/isotope.pkgd.min.js") }}></script>
<script src={{ asset("plugins/OwlCarousel2-2.2.1/owl.carousel.js") }}></script>
<script src={{ asset("plugins/easing/easing.js") }}></script>
<script src={{ asset("js/custom.js") }}></script> --}}


        {{-- <header class="header trans_300 mt-5">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

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
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">colo<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#">home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="#">promotion</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true">1111</i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header> --}}
