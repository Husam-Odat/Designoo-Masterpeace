@extends('layouts.master')
@section('title', 'cart')

@section('content')

<div class="sectionn">
  <div class="contentt">
    <h1>Cart </h1>
    <p>Home>Cart</p>
  </div>
  <div class="imagee">
    <img src="img/321.jpg" alt="Image">
  </div>
</div> <br><br><br><br>

    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        {{-- <div class="col align-self-center text-right text-muted">{{ count($cartItems) }} items</div> --}}
                    </div>
                </div>

                {{-- @php
                    $subtotal = 0; // Initialize the subtotal variable
                @endphp --}}
                {{-- //==== husam --}}
{{ $total_all = 0 }} 
{{-- //==== husam --}}
@if (isset($cart))
@foreach ($cart as $cartItem)
                {{-- @foreach ($cartItems as $item) --}}
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            {{-- <div class="col-2">
                                <img class="img-fluid"
                                    src="{{ asset($products->where('id', $item->product_id)->first()->image) }}">
                            </div> --}}
                            <div class="col">
                              <h3>{{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}
                                                                        </h3>
                                                                        <p>{{ isset($cartItem->product) ? $cartItem->product->Sdescription : $cartItem['shortdes'] }}
                                                                        </p>
                                {{-- <div class="row text-muted">{{ $products->where('id', $item->product_id)->first()->category }}</div> --}}
                                {{-- <div class="row">{{ $products->where('id', $item->product_id)->first()->name }}</div> --}}
                            </div>
                            <div class="col">
                                {{ isset($cartItem->product) ? $cartItem->quantity : $cartItem['quantity'] }}
                                {{-- <form method="POST" action="{{ route('update_quantity', ['item_id' => $item->id]) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="submit" name="quantity_action" value="decrease">-</button>
                                    <span>{{ $item->quantity }}</span>
                                    <button type="submit" name="quantity_action" value="increase">+</button>
                                </form> --}}
                            </div>
                            <div class="col">
                               {{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}
                              <a
                                                                            href="{{ route('pages.cart.destroy', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}"><span
                                                                                class="ion-ios-close">del</span></a>
                                {{-- {{ $products->where('id', $item->product_id)->first()->price * $item->quantity }} JD
                                <form method="POST" action="{{ route('cart.destroy', ['id' => $item->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="close"
                                        onclick="return confirm('Are you sure you want to delete this item?')">&#10005;</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                     {{ $total_price = isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                    {{-- @php
                        $subtotal += $products->where('id', $item->product_id)->first()->price * $item->quantity;
                    @endphp
                @endforeach --}}


                {{-- Calculate the delivery cost --}}
                {{-- @php
                    $deliveryCost = $subtotal > 50 ? 0 : 3;
                    $totalPrice = $subtotal + $deliveryCost;
                @endphp --}}

                <div class="back-to-shop"><a href="category">&leftarrow;<span class="text-muted">Back to shop</span></a>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    {{-- <div class="col" style="padding-left:0;">ITEMS {{ count($cartItems) }}</div> --}}
                    {{-- <div class="col text-right">{{ number_format($subtotal, 2) }} JD</div> --}}
                </div>

                {{-- Display the delivery cost --}}
                <div class="row">
                    <div class="col">DELIVERY</div>
                    {{-- <div class="col text-right">{{ number_format($deliveryCost, 2) }} JD</div> --}}
                </div>

                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                     {{ $total_all += isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['quantity'] * $cartItem['price'] }}
                    {{-- <div class="col text-right">{{ number_format($totalPrice, 2) }} JD</div> --}}
                </div>
                @endforeach
                
          {{-- @if(count($cartItems) > 0)
            @if(auth()->check())
                <a href="{{ route('checkout') }}">
                    <button class="btn">CHECKOUT</button>
                </a>
            @else
                <a href="{{ route('register') }}">
                    <button class="btn">CHECKOUT</button>
                </a>
            @endif
        @else
            <button class="btn" disabled>CHECKOUT</button>
            <p style="color: red;">Your cart is empty. Please add items to your cart before checking out.</p>
        @endif --}}
            </div>

        </div>

    </div>
    <br><br><br><br><br><br>

                @endsection
