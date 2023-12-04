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


    {{-- ================= --}}
    <link rel="stylesheet"
        href={{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}>

    <style>
        table td,
        table th {
            padding-left: 100px;
            padding-right: 100px;
            /* Adjust the value to control the space between columns */

        }

        .price {
            padding-left: 400px;
            font-size: medium;

        }

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

        }
    </style>
    </head>

    <body>
        <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="./images/slider_1.1.jpg"
            data-natural-width="1400" data-natural-height="350">
            <div id="subheader">
                <div id="sub_content">
                    <h1>Cart</h1>
                    <div class="bs-wizard row">
                        {{-- <div class="col-4 bs-wizard-step active">
                                            <div class="text-center bs-wizard-stepnum"><strong>1.</strong> cart
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <a href="#0" class="bs-wizard-dot"></a>
                                        </div> --}}
                        {{-- <div class="col-4 bs-wizard-step disabled">
                                            <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                                            <div class="progress">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <a href="cart_2.html" class="bs-wizard-dot"></a>
                                        </div> --}}
                        {{-- <div class="col-4 bs-wizard-step disabled">
                                            <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                                            <div class="progress">
                                                <div class="progress-bar"></div>
                                            </div>
                                            <a href="cart_3.html" class="bs-wizard-dot"></a>
                                        </div> --}}
                    </div><!-- End bs-wizard -->
                </div><!-- End sub_content -->
            </div><!-- End subheader -->
        </section><!-- End section -->
        <div class="super_container">
            {{-- <div class="flowed"></div>
<img src="images/newarr5.jpg" alt="" srcset=""> --}}

            <section class="h-100" style="background-color: #eee;">
                <div class="container h-100 py-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-10">

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                                {{-- <div>
                                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                            class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                                </div> --}}
                            </div>
                            @php
                                $total_all = 0; // Initialize the total_all variable before the @if statement
                            @endphp
                            @if (isset($cart))

                                {{-- {{ $total_all = 0 }} --}}
                                @foreach ($cart as $cartItem)
                                    <div class="card rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="images/{{ isset($cartItem->product) ? $cartItem->product->img : $cartItem['image'] }}"
                                                        class="img-fluid rounded-3" alt="productimg">
                                                    {{-- {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['productname'] }} --}}
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <p class="lead fw-normal mb-2" style="font-size: small;">
                                                        {{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}
                                                    </p>
                                                    <p>
                                                        <span class="text-muted">Price:
                                                        </span>${{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
                                                    </p>
                                                    {{-- <p><span class="text-muted">Desc:
                                                        </span>{{ isset($cartItem->product) ? $cartItem->product->cartDescription : $cartItem['shortdes'] }}

                                                    </p> --}}
                                                </div>

                                                <div
                                                    id="cartItem{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}">

                                                    <form
                                                        id="updateForm{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                        method="POST"
                                                        action="{{ route('cart.update', isset($cartItem->id) ? $cartItem->id : $cartItem['id']) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                            <button class="btn btn-link px-2" type="button"
                                                                onclick="decrementQuantity({{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }})">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input style="width: 50px"
                                                                id="quantity{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                                min="0" name="quantity"
                                                                value="{{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}"
                                                                type="number" class="form-control form-control-sm" />

                                                            <input style="width: 50px"
                                                                id="total{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                                min="0" name="total"
                                                                value="{{ isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}"
                                                                type="hidden" class="form-control form-control-sm" />

                                                            <button class="btn btn-link px-2" type="button"
                                                                onclick="incrementQuantity({{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }})">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                        {{-- <h5 class="mb-0">
                                                            <span
                                                                id="totalPrice{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                                data-price="                                                                        {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
">
                                                                {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                            </span>
                                                        </h5>
                                                        <h5 style="display:none;" class="mb-0">
                                                            <span
                                                                id="total_all{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                                data-product-price="                                                                        {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
"
                                                                data-quantity="                                                                        {{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}
">
                                                                {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                            </span>
                                                        </h5>



                                                    </form> --}}
                                                </div>



                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h5 class="mb-0">
                                                        $<span
                                                            id="totalPrice{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                            data-price="                                                                        {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
">
                                                            {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                        </span>
                                                    </h5>
                                                    <h5 style="display:none;" class="mb-0">
                                                        <span
                                                            id="total_all{{ isset($cartItem->id) ? $cartItem->id : $cartItem['id'] }}"
                                                            data-product-price="                                                                        {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
"
                                                            data-quantity="                                                                        {{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}
">
                                                            {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                        </span>
                                                    </h5>



                                                    </form>
                                                    {{-- <div
                                                        total_price="{{  isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}">
                                                        <h5 class="mb-0">
                                                            {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                        </h5>
                                                    </div>
                                                    <div
                                                        data-total-all="{{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}">
                                                        <h5 class="mb-0">
                                                            {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                        </h5>
                                                    </div> --}}
                                                    {{-- <h5 class="mb-0">
                                                        {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                                                        {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}

                                                    </h5> --}}
                                                </div>

                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="{{ route('pages.cartnew.destroy', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"
                                                        class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                    {{-- </div> --}}
                                @endforeach
                            @else
                                <h1>No Product Found</h1>
                            @endif

                            {{-- ========total====== --}}
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        {{-- <div class="row">
                                        <div class="col-6"><h5>Subtotal</h5></div>
                                        <div class="col-6">${{ $total_all }}</div>

                                      </div> --}}


                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5>Subtotal</h5>
                                                    </td>
                                                    <td class="price" id="totalValueall">
                                                        <h5 class="mb-0">
                                                            <span id="dynamicTotalValueall">
                                                                ${{ $total_all }}
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>Tax 10%</h5>
                                                    </td>
                                                    <td class="price" id="totalValueship">
                                                        <h5 class="mb-0">
                                                            <span id="dynamicTotalValueship">
                                                                ${{ $total_all * 0.1 }}
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3>TOTAL</h3>
                                                    </td>
                                                    <td class="price" id="totalValue">
                                                        <h5 class="mb-0">
                                                            <span id="dynamicTotalValue">
                                                                ${{ $total_all + $total_all * 0.1 }}
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td>
                                                        <h3>TOTAL</h3>
                                                    </td>
                                                    <td class="price" id="totalValue">
                                                        <h5 class="mb-0">
                                                            <span id="dynamicTotalValue">
                                                                ${{ $total_all + $total_all * 0.1 }}
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr> --}}
                                            </tbody>
                                        </table>


                                        <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
                                        <script>
                                            function incrementQuantity(cartItemId) {
                                                var quantityInput = $('#quantity' + cartItemId);
                                                var newValue = parseInt(quantityInput.val()) + 1;
                                                quantityInput.val(newValue);
                                                updateCartItem(cartItemId, newValue);
                                                updateTotalall(); // Update the total value
                                                updateTotal(); // Update the total value
                                                updateTotalship(); // Update the total value


                                            }

                                            function decrementQuantity(cartItemId) {
                                                var quantityInput = $('#quantity' + cartItemId);
                                                var newValue = parseInt(quantityInput.val()) - 1;
                                                if (newValue >= 0) {
                                                    quantityInput.val(newValue);
                                                    updateCartItem(cartItemId, newValue);
                                                    updateTotalall(); // Update the total value
                                                    updateTotal(); // Update the total value
                                                    updateTotalship(); // Update the total value


                                                }
                                            }

                                            function updateTotalall() {
                                                var newTotal = 0;
                                                $('[id^="totalPrice"]').each(function() {
                                                    newTotal += parseFloat($(this).text());
                                                });

                                                $('#dynamicTotalValueall').text('$' + (newTotal).toFixed(2));
                                            }

                                            function updateTotalship() {
                                                var newTotal = 0;
                                                $('[id^="totalPrice"]').each(function() {
                                                    newTotal += parseFloat($(this).text());
                                                });

                                                $('#dynamicTotalValueship').text('$' + (newTotal * 0.1).toFixed(2));
                                            }

                                            function updateTotal() {
                                                var newTotal = 0;
                                                $('[id^="totalPrice"]').each(function() {
                                                    newTotal += parseFloat($(this).text());
                                                });

                                                $('#dynamicTotalValue').text('$' + (newTotal + newTotal * 0.1).toFixed(2));
                                            }

                                            function updateCartItem(cartItemId, newQuantity) {
                                                var form = $('#updateForm' + cartItemId);
                                                var formData = form.serialize();

                                                $.ajax({
                                                    type: 'POST',
                                                    url: form.attr('action'),
                                                    data: formData,
                                                    success: function(data) {
                                                        // Handle the success response here (e.g., update the UI)
                                                        console.log('Data sent successfully');

                                                        // Calculate the new total price and update it in the UI
                                                        var pricePerItem = parseFloat($('#totalPrice' + cartItemId).data('price'));
                                                        var newTotalPrice = pricePerItem * newQuantity;
                                                        var totalPriceElement = $('#totalPrice' + cartItemId);
                                                        totalPriceElement.text(newTotalPrice.toFixed(2));

                                                        // Calculate and update the total_all value
                                                        updateTotalAll();
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Handle errors here
                                                        console.error('Error:', error);
                                                    }
                                                });
                                            }

                                            function updateTotalAll() {
                                                var newTotalAll = 0;

                                                // Iterate over each item's total price
                                                $('[id^="totalPrice"]').each(function() {
                                                    var cartItemId = $(this).attr('id').replace('totalPrice', '');
                                                    var pricePerItem = parseFloat($(this).data('price'));
                                                    var quantity = parseInt($('#quantity' + cartItemId).val());
                                                    var newTotalPrice = pricePerItem * quantity;
                                                    $('#total_all' + cartItemId).text(newTotalPrice.toFixed(2));
                                                    newTotalAll += newTotalPrice;
                                                    updateTotalall();
                                                    updateTotalship();
                                                    updateTotal();
                                                });

                                                // Update the total_all value
                                                $('[data-total-all]').text(newTotalAll.toFixed(2));
                                            }

                                            // Call the initial updateTotalAll() to calculate the initial total_all value
                                            updateTotalall();
                                            updateTotalAll();
                                            updateTotal();
                                            updateTotalship();
                                        </script>

                                        {{-- <div class="col-md-2 col-lg-2 col-xl-2">

                                            Subtotal <span class="float-right">${{ $total_all }}</span>

                                        </div> --}}
                                        {{-- <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">TOTAL</p>
                                            <span class="float-right">${{ $total_all + $total_all * 0.1 }}</span>

                                        </div> --}}


                                        {{-- <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <p class="lead fw-normal mb-2">Delivery fee 10%</p>
                                            <h3> </h3>
                                            <h5 class="mb-0">${{ $total_all * 0.1 }}</h5>

                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                            {{-- ========total====== --}}
                            {{-- <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                            <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                                </span>Grey</p>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="2"
                                                type="number" class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h5 class="mb-0">$499.00</h5>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                            <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                                </span>Grey</p>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="2"
                                                type="number" class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h5 class="mb-0">$499.00</h5>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="card mb-4">
                                <div class="card-body p-4 d-flex flex-row">
                                    <div class="form-outline flex-fill">
                                        <input type="text" id="form1" class="form-control form-control-lg" />
                                        <label class="form-label" for="form1">Discound code</label>
                                    </div>
                                    <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                                </div>
                            </div> --}}

                            <div class="card">
                                <div class="card-body">
                                    @if ($total_all == 0)
                                    <a href="{{ url('#') }}">
                                            <button type="button" class="btn btn-warning btn-block btn-lg"
                                                style="background-color: #a3a3a3; color:white;">You Must Add 1 Product At least</button>
                                        </a>
                                    @else
                                    @if (auth()->check())
                                        <a href="{{ url('/cartt') }}">
                                            <button type="button" class="btn btn-warning btn-block btn-lg"
                                                style="background-color: #07cdec !important; color:white;">Proceed to
                                                Pay</button>
                                        </a>
                                   
                                    @else
                                        <a href="{{ url('/login') }}">
                                            <button type="button" class="btn btn-warning btn-block btn-lg"
                                                style="background-color: #07cdec !important; color:white;">Login to
                                                Proceed</button>
                                        </a>
                                    @endif
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div><!-- End container -->
        <!-- End Content =============================================== -->
        <!-- Benefit -->


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
