@extends('layouts.master')
@section('title', 'allproducts')

@section('content')

    <style>
        .btn-tarnsparnt {
            background-color: transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
        }
         .btn-tarnsparnt:hover {
        background-color: #75e5f6 !important;
    }
    </style>

    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="/pages.allproducts/1"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i>All Products</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="search-widget mb-5">
                            <form action="{{ route('pages.allproducts') }}" method="get">
                                <input name="name" class="form-control" type="text" placeholder="Search" />
                                <button type="submit" name="submit" class="btn"><small>Search</small> <i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            {{-- <li><a href="#">Oil Paintings</a></li>
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Home & Living</a></li>
							<li><a href="#">Ai Art</a></li>							
							<li><a href="#">Art & Collectibles</a></li>
							<li><a href="#">Craft Supplies & Tools</a></li>
							<li><a href="#">Jewelry & Accessories</a></li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Clothing & Shoes</a></li>
							<li><a href="#">Shop</a></li> --}}
                            <li @if (null == $activeCategoryId) class="active" @endif><a href="/pages.allproducts">
                                    @if (null == $activeCategoryId)
                                        <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                    @endif All Products
                                </a>
                            </li>
                            @foreach ($categories as $categories)
                                <li @if ($categories->id == $activeCategoryId) class="active" @endif><a
                                        href="/pages.allproducts/{{ $categories->id }}">
                                        @if ($categories->id == $activeCategoryId)
                                            <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                        @endif{{ $categories->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Price Range Filtering -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Filter by Price</h5>
                        </div>
                        <p>
                            <input type="text" id="amount" readonly
                                style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                        <div class="filter_button"><span>filter</span></div>
                    </div>

                    {{-- <!-- Sizes -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Subject</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Abstract & geometric
                                </span></li>
                            <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>cityscape
                                </span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Animal</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Anime & cartoon
                                </span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Beach & tropical
                                </span></li>
                        </ul>
                    </div> --}}
                    {{-- 
                    <!-- Color -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Color</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
                            <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Bronze</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Beige</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Gold</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Brown</span></li>
                        </ul>
                        <div class="show_more">
                            <span><span>+</span>Show More</span>
                        </div>
                    </div> --}}

                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "original-order" }'><span>Default
                                                        Sorting</span></li>
                                                {{-- <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                    <span>Price</span>
                                                </li> --}}
                                                <!-- Ascending Order Button -->
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "price", "sortAscending": true }'>
                                                    <span>Price Asc</span>
                                                </li>

                                                <!-- Descending Order Button -->
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "price", "sortAscending": false }'>
                                                    <span>Price Desc</span>
                                                </li>
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "name", "sortAscending": true }'>
                                                    <span>Product Name Asc</span>
                                                </li>

                                                <!-- Descending Order Button -->
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "name", "sortAscending": false }'>
                                                    <span>Product Name Desc</span>
                                                </li>

                                                {{-- <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                                    <span>Product Name</span>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        {{-- <li>
    
    <form action="{{ url()->current() }}" method="get" class="sorting_num">
        <span>Show</span><span class="num_sorting_text">{{ $products->perPage() }}</span>
    
    <i class="fa fa-angle-down"></i>
        <select name="perPage" class="form-control" onchange="this.form.submit()">
            
            <option value="6" {{ $products->perPage() == 6 ? 'selected' : '' }}>6</option>
            <option value="12" {{ $products->perPage() == 12 ? 'selected' : '' }}>12</option>
            <option value="24" {{ $products->perPage() == 24 ? 'selected' : '' }}>24</option>
        </select>
    </form>
</li> --}}
                                        <li>
                                            <form action="{{ url()->current() }}" method="get" class="sorting_num">
                                                {{-- <span>Show</span> --}}
                                                {{-- <span
                                                    class="num_sorting_text num_sorting_btn">{{ $products->perPage() }}</span>
                                                <i class="fa fa-angle-down"></i> --}}

                                                {{-- <ul class="sorting_num"> --}}
                                                <select name="perPage" class="form-control" style="color: black"
                                                    onchange="this.form.submit()">
                                        <li class="num_sorting_btn"><span>
                                                <option style="color: 000;" class="num_sorting_text num_sorting_btn"
                                                    value="6" {{ $products->perPage() == 6 ? 'selected' : '' }}>
                                                    Show 6
                                                </option>
                                            </span></li>
                                        <li class="num_sorting_btn"><span>
                                                <option style="color: 000;" class=" num_sorting_textnum_sorting_btn"
                                                    value="12" {{ $products->perPage() == 12 ? 'selected' : '' }}>
                                                    Show
                                                    12
                                                </option>
                                            </span></li>
                                        <li class=" num_sorting_text num_sorting_btn"><span>
                                                <option style="color: 000;" class="num_sorting_btn" value="24"
                                                    {{ $products->perPage() == 24 ? 'selected' : '' }}> Show 24
                                                </option>
                                            </span></li>
                                        </select>

                                        {{-- </ul> --}}
                                        </form>
                                        </li>
                                        {{-- <li>
    <span>Show</span>
    <span class="num_sorting_text">{{ $products->perPage() }}</span>
    <i class="fa fa-angle-down"></i>
    <form action="{{ url()->current() }}" method="get" class="sorting_num">
        <ul class="sorting_num">
            <li class="num_sorting_btn">
                <span>
                    <select name="perPage" class="form-control" onchange="this.form.submit()">
                        <option value="6" {{ $products->perPage() == 6 ? 'selected' : '' }}>6</option>
                        <option value="12" {{ $products->perPage() == 12 ? 'selected' : '' }}>12</option>
                        <option value="24" {{ $products->perPage() == 24 ? 'selected' : '' }}>24</option>
                    </select>
                </span>
            </li>
        </ul>
    </form>
</li> --}}
                                        {{-- <li>
                                            <span>Show</span>
                                            <span class="num_sorting_text">6</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>6</span></li>
                                                <li class="num_sorting_btn"><span>12</span></li>
                                                <li class="num_sorting_btn"><span>24</span></li>
                                                
                                            </ul>
                                        </li> --}}
                                    </ul>







                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="pages d-flex flex-row align-items-center">
                                            @if ($products->previousPageUrl())
                                                <div id="prev_page" class="page_prev">
                                                    <a href="{{ $products->previousPageUrl() }}">
                                                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            @endif

                                            <div class="page_current">
                                                <!-- Current page and page links with perPage query parameter -->
                                                <span>{{ $products->currentPage() }}</span>
                                                <ul class="page_selection">
                                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                        <li class="{{ $i == $products->currentPage() ? 'active' : '' }}">
                                                            <a
                                                                href="{{ $products->url($i) }}&perPage={{ $products->perPage() }}">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                </ul>
                                            </div>

                                            <div class="page_total"><span>of</span> {{ $products->lastPage() }}</div>

                                            @if ($products->hasMorePages())
                                                <div id="next_page" class="page_next">
                                                    <a
                                                        href="{{ $products->nextPageUrl() }}&perPage={{ $products->perPage() }}">
                                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>


                                    </div>

                                    <!-- Product Grid -->

                                    <div class="product-grid mb-5">

                                        <!-- Product 1 -->
                                        @foreach ($products as $product)
                                            <div class="product-item men">
                                                <div class="product discount product_filter">
                                                    <div class="product_image">
                                                        <img src="{{ asset("images/$product->img") }}" alt="Image">
                                                    </div>
                                                    <div class="favorite favorite_left"></div>
                                                    <div
                                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                        <span>-${{ $product->price * $product->discount->discountPercent }}</span>

                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_name"><a
                                                                href="/pages.single/{{ $product->id }}">{{ $product->name }}</a>
                                                        </h6>

                                                        <div class="product_price">
                                                            ${{ $product->price }}<span>${{ $product->price * $product->discount->discountPercent + $product->price }}</span>
                                                        </div>
                                                        <ul class="star_rating mr-3">


                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= 0)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                @else
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                @endif
                            @endfor
                            {{-- <span style="color:gray;" class="ml-2"> {{ $reviewsavarage }}</span> --}}
                            </ul>
                                                        {{-- <div class="product_artist"><span>by USpaceArtAd</span></div> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="red_button add_to_cart_button"><a href="#">add to cart</a>
                                            </div> --}}
                                                {{-- <div class="red_button add_to_cart_button"> --}}
                                                {{-- <a href="#">add to cart</a> --}}

                                                <form id="myForm"
                                                    action="{{ route('pages.cart.store', ['id' => $product->id]) }}"
                                                    method="get">

                                                    @csrf
                                                    <input type="hidden" style="width: 40px" type="number"
                                                        id="quantity_value" name="quantity" value="1"
                                                        min="1">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">


                                                    <button class="btn-tarnsparnt btn-tarnsparnt" style="width:100%;"><a
                                                            style="color: #fff; font-weight: bold ; font-size:big;  "
                                                            class="red_button add_to_cart_button ml-0 btn-tarnsparnt"
                                                            id="add-to-cart-btn" onclick="addToCart()" type="submit">Add
                                                            to
                                                            Cart</a></button>
                                                    {{-- <a style="color: azure; cursor: pointer;"
                                                    class="red_button add_to_cart_button" id="add-to-cart-btn"
                                                    type="submit"
                                                    onclick="document.getElementById('myForm').submit(); addToCart()">add
                                                    to cart</a> --}}


                                                </form>





                                                {{-- </div> --}}
                                            </div>
                                        @endforeach
                                        <!-- Product 2 -->

                                        {{-- <div class="product-item women">
                                        <div class="product product_filter">
                                            <div class="product_image">
                                                <img src="images/product_2.1.jpg" alt="">
                                            </div>
                                            <div class="favorite"></div>
                                            <div
                                                class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                                <span>new</span>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Original Flower Oil
                                                        Painting</a></h6>
                                                <div class="product_price">$120.00</div>
                                                <div class="product_artist"><span>by TuorAbstractArt</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                    </div> --}}


                                        {{-- <form action="{{ route('pages.cart.store', ['id' => $product->id]) }}" method="get">

                                        @csrf
                                        <input type="hidden" style="width: 40px" type="number" id="quantity_value"
                                            name="quantity" value="1" min="1">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button id="add-to-cart-btn" onclick="addToCart()" type="submit"
                                            class="btn btn-success">Add to Cart</button>
                                    </form> --}}


                                        {{--
									<!-- Product 3 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_3.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Mini artwork, Mini blue abstract</a></h6>
												<div class="product_price">$300.00</div>
												<div class="product_artist"><span >bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 4 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_4.1.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Abstract Tree Oil Painting
												</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 5 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_5.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Howling Wolf Oil Painting Art
												</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 6 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="images/product_6.1.jpg" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Forest Oil Painting
												</a></h6>
												<div class="product_price">$150.00<span>$100.00</span></div>
												<div class="product_artist"><span>bySingedSweet</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 7 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_7.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Large Abstract Gold Text</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>CareGalleryArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 8 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_8.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Seascape oil Painting</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>byKysonGalleryArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 9 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_9.1.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Writer Original Forest Oil Painting</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>byEdonaArtGallery</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 10 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_10.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">3D Flower Oil Painting On Canvas,Original White Cherry</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>by TuorAbstractArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 11 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_11.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Rose Flower Oil Painting On Canvas</a></h6>
												<div class="product_price">$100.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 12 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="images/product_12.1.jpg" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Colourful Flower Tree Abstract Oil Painting</a></h6>
												<div class="product_price">$100.00<span>$200.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
								</div> --}}

                                        <!-- Product Sorting -->

                                        {{-- <div  class="product_sorting_container product_sorting_container_bottom clearfix ">
                                        <ul class="product_sorting">
                                            <li>
                                                <span>Show:</span>
                                                <span class="num_sorting_text">04</span>
                                                <i class="fa fa-angle-down"></i>
                                                <ul class="sorting_num">
                                                    <li class="num_sorting_btn"><span>01</span></li>
                                                    <li class="num_sorting_btn"><span>02</span></li>
                                                    <li class="num_sorting_btn"><span>03</span></li>
                                                    <li class="num_sorting_btn"><span>04</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <span class="showing_results">Showing 1–3 of 12 results</span>
                                        <div class="pages d-flex flex-row align-items-center">
                                            <div class="page_current">
                                                <span>1</span>
                                                <ul class="page_selection">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                </ul>
                                            </div>
                                            <div class="page_total"><span>of</span> 3</div>
                                            <div id="next_page_1" class="page_next"><a href="#"><i
                                                        class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                        </div>

                                    </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Go Top -->
            <a class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>

        </div>

    </div>

    <script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
    <script src={{ asset('styles/bootstrap4/popper.js') }}></script>
    <script src={{ asset('styles/bootstrap4/bootstrap.min.js') }}></script>
    <script src={{ asset('plugins/Isotope/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}></script>
    <script src={{ asset('plugins/easing/easing.js') }}></script>
    <script src={{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}></script>
    <script src={{ asset('js/categories_custom.js') }}></script>





@endsection
