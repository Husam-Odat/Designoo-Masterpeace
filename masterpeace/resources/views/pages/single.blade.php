@extends('layouts.master')
@section('title', 'allproducts')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            text-align: center;
            border: none;
        }
    </style>
    {{-- 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
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
    {{-- <link rel="stylesheet" type="text/css" href="styles/single_styles.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="styles/single_responsive.css"> --}}
    {{-- </head>

<body> --}}

    <div class="super_container">

        <!-- Header -->

        {{-- <header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on  orders over $500</div>
					</div>
					<div class="col-md-6 text-right">
						<!-- <div class="top_nav_right">
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
						</div> -->
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
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="my-account.html">
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

        {{-- <div class="fs_menu_overlay"></div>

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
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <!-- <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li> -->
                            <li class="active"><a href="{{ url('/pages.allproducts/1') }}"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Single
                                    Product</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">

                    <div class="single_product_pics">
                        <div class="row">
                            <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                                <div class="single_product_thumbnails">
                                    <ul>
                                        <li><img src="/images/{{ $product->img1 }}" alt=""
                                                data-image="/images/{{ $product->img1 }}"></li>
                                        <li class="active"><img src="/images/{{ $product->img }}" alt=""
                                                data-image="/images/{{ $product->img }}"></li>
                                        <li><img src="/images/{{ $product->img2 }}" alt=""
                                                data-image="/images/{{ $product->img2 }}"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 image_col order-lg-2 order-1">
                                <div class="single_product_image">
                                    <div class="single_product_image_background"
                                        style="background-image:url(/images/{{ $product->img }})"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product_details">
                        <div class="product_details_title">
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                            <span class="ti-truck"></span><span>free delivery</span>
                        </div>
                        <div class="original_price">
                            ${{ $product->price * $product->discount->discountPercent + $product->price }}</div>
                        <div class="product_price">${{ $product->price }}</div>
                        <ul class="star_rating">


                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $reviewsavarage)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                @else
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                @endif
                            @endfor
                            <span style="color:gray;" class="ml-2"> {{ $reviewsavarage }}</span>





                            {{-- <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li> --}}
                        </ul>
                        <!-- <div class="product_color">
                                                                              <span>Select Color:</span>
                                                                              <ul>
                                                                               <li style="background: #e54e5d"></li>
                                                                               <li style="background: #252525"></li>
                                                                               <li style="background: #60b3f3"></li>
                                                                              </ul>
                                                                             </div> -->
                        {{-- ======================add chatgpt============================ --}}
                        {{-- <form action="{{ route('pages.cart.add') }}" method="POST"> --}}
                        <form action="{{ route('pages.cart.store', ['id' => $product->id]) }}" method="get">

                            @csrf

                            <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                                <span>Quantity:</span>


                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        // Get the input element
                                        var quantityInput = $('#quantity_value');

                                        // Function to increment the quantity
                                        $('.plus').on('click', function() {
                                            quantityInput.val(parseInt(quantityInput.val(), 10) + 1);
                                        });

                                        // Function to decrement the quantity, with a minimum value of 1
                                        $('.minus').on('click', function() {
                                            var currentValue = parseInt(quantityInput.val(), 10);
                                            quantityInput.val(currentValue > 1 ? currentValue - 1 : 1);
                                        });
                                    });
                                </script>
                                <div class="quantity_selector quantity-container">
                                    <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                    {{-- <input type="hidden" name="quantity" value="{{ $product->id }}"> --}}
                                    {{-- <span id="quantity_value" name="quantity" value="{{ $product->quantity }}">{{ $product->quantity }}=1</span> --}}


                                    {{-- <input style="width: 40px" type="number" id="quantity_value" name="quantity" defualt="1"> --}}
                                    <input style="width: 40px " class="quantity-num" type="number" id="quantity_value"
                                        name="quantity" value="1" min="1">
                                    {{-- <span id="quantity_value">1</span> --}}
                                    <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                {{-- <button type="button" class="red_button add_to_cart_button">Secondary</button> --}}
                                {{-- <div class="red_buttonc p-2" ><a href="/pages.cart/{{ $product->$id }}">add to cart</a></div> --}}
                                {{-- <div class="red_buttonc p-2" ><a href="/pages.cart/{{ $product->$id }}">add to cart</a></div> --}}


                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                {{-- <input type="hidden" name="product_name" value="{{ $product->name }}"> --}}
                                {{-- <button id="add-to-cart-btn" onclick="addToCart()">Add to Cart</button> --}}
                                <button id="add-to-cart-btn" onclick="addToCart()" type="submit" class="btn btn-success"
                                    style="background-color: #fe4c50;">Add to Cart</button>
                        </form>
                        {{-- ========================add chatgpt========================== --}}

                        <div class="product_favorite d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Tabs -->

    <div class="tabs_section_container">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabs_container">
                        <ul
                            class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                            {{-- <li class="tab active" data-active-tab="tab_1"><span>Description</span></li> --}}
                            {{-- <li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li> --}}
                            <li class="tab" data-active-tab="tab_3"><span>Reviews ({{ $reviewscount }})</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    {{-- <!-- Tab Description -->

                    <div id="tab_1" class="tab_container active">
                        <div class="row">
                            <div class="col-lg-5 desc_col">
                                <div class="tab_title">
                                    <h4>Description</h4>
                                </div>
                                <div class="tab_text_block">
                                    <h2>Resin Night Light</h2>
                                    <p>Octopus and diver resin night light,Ocean Resin Lamp,Wood Resin Lamp,handmade
                                        furniture and decor,Christmas gifts,Birthday gifts,Kid gifts .
                                        Recreate amazing natural scenes in a unique way. The vast and gentle sea
                                        embraces large creatures and people in the same space
                                        Dive deep in the sea, where there's hardly any light to reach, humans and
                                        creatures in nature could coexist peacefully.
                                    </p>
                                </div>
                                <div class="tab_image">
                                    <img src="./images/singlepro4.jpg" alt="">
                                </div>
                                <div class="tab_text_block">
                                    <h2>Resin Night Light</h2>
                                    <p>Recreate amazing natural scenes in a unique way. The vast and gentle sea embraces
                                        large creatures and people in the same space
                                        Dive deep in the sea, where there's hardly any light to reach, humans and
                                        creatures in nature could coexist peacefully.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-2 desc_col">
                                <div class="tab_image">
                                    <img src="./images/singlepro6.jpg" alt="">
                                </div>
                                <div class="tab_text_block">
                                    <h2>Resin Night Light</h2>
                                    <p>Epoxy resin lamp package includes:
                                        <br>- Detachable wooden lamp base (all of our lights are not attached to the
                                        wooden base, we send them as decoration, and you can easily replace the base if
                                        you don't like our wooden base)
                                        <br>- USB cable
                                        <br>- Led: 1 color, 5W (size S, M) - RGB LED 16 colors (size XL)
                                        <br>- Parts: Epoxy resin + Wooden base.
                                    </p>
                                </div>
                                <div class="tab_image desc_last">
                                    <img src="./images/singlepro7.jpg" alt="">
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
                                <p>COLOR:<span>Blue</span></p>
                                <p>Completely handmade, there will be errors in shape and size
                                    You can customize the lights with:
                                    <br>-Octopus
                                    <br>- Diver
                                    <br>- shipwreck
                                    <br>- jellyfish, clown fish.
                                    <br>Or any other details, let us know!

                                    Please note that all remote controls will not come with batteries as per customs
                                    requirements. You may need to purchase the battery separately to use the remote
                                    control.

                                    ⚠ Please note:
                                    Shades and colors displayed by your screen may differ from the originals!
                                    Each piece of art is handmade and any subsequent copy may not be 100% similar to the
                                    photo shown or the original. The size will also vary and Some wood may have cracks.
                                    If you are a perfectionist who expects 100% perfect design, sorry, but it does not
                                    exist in our artwork. Feel free to ask us to cancel and refund your order. But
                                    Strictly no refund & cancellation once we start shipping your order.
                                </p>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Tab Reviews -->

                    <div id="tab_3" class="tab_container">
                        <div class="row">

                            <!-- User Reviews -->

                            <div class="col-lg-6 reviews_col">
                                <div class="tab_title reviews_title">
                                    <h4>Reviews ({{ $reviewscount }})</h4>
                                </div>

                                {{-- <!-- User Review -->

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
                                        <div class="review_date">27 Aug 2023</div>
                                        <div class="user_name">JAMES CAMACHO</div>
                                        <p>This lamp is truly amazing! It was a gift for a friend of mine who is a
                                            diver. She loved it!! The details and vibrant colors in the diorama are so
                                            eye catching. It looks even better at night once the light comes on. I
                                            highly recommend this seller/artist. She really made an impression and I
                                            HIGHLY recommend one of these beautiful lamps. Thank you for this great
                                            piece of art!!</p>
                                    </div>
                                </div> --}}
                                <!-- User Review -->
                                @foreach ($reviews as $reviews)
                                    <div class="user_review_container d-flex flex-column flex-sm-row ">
                                        <div class="user">
                                            <div class="user_pic pl-2 pt-2"><img style="width: 50px; height:50px;"
                                                    src="https://openclipart.org/image/400px/190113" alt=""></div>

                                            {{-- <a href="https://www.freepik.com/icon/user-interface_6188216">Icon by apien</a> --}}
                                            <div class="user_rating">
                                                <ul class="star_rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $reviews->review)
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        @else
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="review_date"><sub>{{ $reviews->date }}</sub></div>
                                            <div class="user_name">{{ $reviews->user->name }}</div>
                                            <p>{{ $reviews->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <!-- User Review -->

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



                                    @foreach ($reviews as $reviews)
                                        <div class="review">
                                            <div class="review_date">{{ $reviews->date }}</div>
                                            <ul class="star_rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $reviews->review)
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    @else
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>

                                            <div class="user_name">{{ $reviews->user->name }} </div>
                                            <p>{{ $reviews->description }}</p> --}}
                                {{-- </div> --}}
                                {{-- @endforeach --}}

                            </div>
                            <!-- Add Review -->

                            <div class="col-lg-6 add_review_col">
                                @guest
                                    <h5>You must be logged in to add a review. <a href="{{ route('login') }}">Login</a></h5>
                                @else
                                    <div class="add_review">
                                        {{-- <form id="review_form" action="post"> --}}
                                        <form id="review_form" method="POST"
                                            action="{{ route('reviews.store', ['id' => $product->id]) }}">
                                            @csrf
                                            <div>
                                                <h1>Add Review</h1>
                                                {{-- <input type="hidden" name="userId" value= '1'> --}}
                                                <input type="hidden" name="productId" value= '{{ $product->id }}'>
                                                {{-- <input type="hidden" name="review" value= '1'> --}}
                                                {{-- <input id="review_name" class="form_input input_name" type="text"
                                                name="name" placeholder="Name*" required="required"
                                                data-error="Name is required."> --}}
                                                {{-- <input id="review_email" class="form_input input_email" type="email"
                                                name="email" placeholder="Email*" required="required"
                                                data-error="Valid email is required."> --}}
                                            </div>
                                            <div>
                                                <h1>Your Rating: <span style="color:gray;" class="ml-5">
                                                        {{ Auth::user()->name }}</span></h1>
                                                {{-- <h5>{{ Auth::user()->name }}</h5> --}}
                                                {{-- <ul class="user_star_rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul> --}}
                                                <ul class="user_star_rating pt-2" id="starRating">
                                                    <li onclick="setRating(1)"><i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li onclick="setRating(2)"><i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li onclick="setRating(3)"><i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li onclick="setRating(4)"><i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li onclick="setRating(5)"><i class="fa fa-star" aria-hidden="true"></i>
                                                    </li>
                                                    <li class="ml-5">
                                                        <p>Selected Rating: <span id="selectedRating">5</span></p>
                                                    </li>
                                                </ul>

                                                <input type="hidden" name="review" id="rating" value="5">



                                                {{-- <button type="submit">Submit Rating</button> --}}
                                                {{-- </form> --}}

                                                <script>
                                                    let rating = 5;

                                                    function setRating(value) {
                                                        rating = value;
                                                        updateStars();
                                                        updateSelectedRating();
                                                        updateHiddenInput();
                                                    }

                                                    function updateStars() {
                                                        const stars = document.querySelectorAll('#starRating li i');
                                                        stars.forEach((star, index) => {
                                                            if (index < rating) {
                                                                star.classList.add('fa-star');
                                                                star.classList.remove('fa-star-o');
                                                            } else {
                                                                star.classList.add('fa-star-o');
                                                                star.classList.remove('fa-star');
                                                            }
                                                        });
                                                    }

                                                    function updateSelectedRating() {
                                                        document.getElementById('selectedRating').innerText = rating;
                                                    }

                                                    function updateHiddenInput() {
                                                        document.getElementById('rating').value = rating;
                                                    }
                                                </script>




                                                <textarea id="description" class="input_review" name="description" placeholder="Your Review" rows="4"
                                                    required data-error="Please, leave us a review."></textarea>
                                            </div>
                                            <div class="text-left text-sm-right ">
                                                <button id="review_submit" type="submit"
                                                    class="red_button review_submit_btn trans_300 pl-2 pr-2 "
                                                    {{-- value="Submit" --}}>submit</button>

                                            </div>
                                        </form>
                                    </div>
                                @endguest
                            </div>

                        </div>
                        {{-- @if (Auth::user()->id != null) --}}

                        {{-- @else
                                <h3>You must log in</h3>        
                                    @endif --}}
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
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer> --}}

    </div>

    {{-- ========================= --}}

    {{-- ========================= --}}

    <script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
    <script src={{ asset('styles/bootstrap4/popper.js') }}></script>
    <script src={{ asset('styles/bootstrap4/bootstrap.min.js') }}></script>
    <script src={{ asset('plugins/Isotope/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}></script>
    <script src={{ asset('plugins/easing/easing.js') }}></script>
    <script src={{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}></script>
    <script src={{ asset('js/single_custom.js') }}></script>
    {{-- </body>

</html> --}}
@endsection
