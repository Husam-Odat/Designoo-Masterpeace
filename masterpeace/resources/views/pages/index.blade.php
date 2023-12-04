@extends('layouts.master')
@section('title', 'index')

@section('content')
<style>
    .btn-tarnsparnt:hover {
        background-color: #75e5f6 !important;
    }
</style>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Slider -->

    <!-- <div class="main_slider" style="background-image:url(images/slider_1.1.jpg)">
                              <div class="container fill_height">
                               <div class="row align-items-center fill_height">
                                <div class="col">
                                 <div class="main_slider_content">
                                  <h6>Discover New Art Our Curators Love Every Week</h6>
                                  <h1>New This Week</h1>
                                  <div class="red_button shop_now_button"><a href="#">Start Exploring</a></div>
                                 </div>
                                </div>
                               </div>
                              </div>
                             </div> -->
    <!-- =============================================================================== -->
    <!-- SLIDER -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="./images/slider1.jpg" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-weight-300" data-x="['left','left','left','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-93','-93','-93','-93']" data-fontsize="['24','24','24','18']"
                        data-lineheight="['72','72','72','36']" data-width="full" data-height="none"
                        data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        NEW TREND 2023
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-weight-500" data-x="['left','left','left','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-42','-42','-42','-42']" data-fontsize="['52','52','52','40']"
                        data-lineheight="['60','60','60','40']" data-width="full" data-height="none"
                        data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        New Collection
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-weight-400 " data-x="['left','left','left','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['12','12','12','12']" data-fontsize="['18','18','18','16']"
                        data-lineheight="['72','72','72','38']" data-width="full" data-height="none"
                        data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        BIG SALE OF THIS WEEK UP TO 30%
                    </div>

                    <div class="tp-caption" data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','80']"
                        data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{ url('/pages.allproducts/1') }}"
                            class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"><span>SHOP
                                NOW</span></a>
                    </div>
                </li>
                <!-- /End Slide 1 -->

                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="./images/slider2.jpg" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    <div style="color: white" class="tp-caption tp-resizeme text-333 font-weight-400 text-right"
                        data-x="['right','right','right','center']" data-hoffset="['33','33','33','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-115','-115','-115','-115']"
                        data-fontsize="['22','22','22','22']" data-lineheight="['60','60','60','60']" data-width="full"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <span style="color: white" class="text-line left"></span>New Collection<span style="color: white"
                            class="text-line right"></span>
                    </div>

                    <div style="color: white"
                        class="tp-caption tp-resizeme text-333 font-weight-500 letter-spacing-10 text-right"
                        data-x="['right','right','right','center']" data-hoffset="['13','13','13','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-39','-39','-39','-59']"
                        data-fontsize="['130','130','130','60']" data-lineheight="['130','130','130','60']"
                        data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        SALE
                    </div>

                    <div style="color: white" class="tp-caption tp-resizeme text-333 font-weight-400 text-right"
                        data-x="['right','right','right','center']" data-hoffset="['13','13','13','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','5']"
                        data-fontsize="['48','48','48','28']" data-lineheight="['60','60','60','40']" data-width="full"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        UP TO <span style="color: white" class="text-accent">30%</span> OFF

                    </div>


                    <div class="tp-caption text-right" data-x="['right','right','right','center']"
                        data-hoffset="['105','105','105','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['138','138','138','80']" data-width="full" data-height="none"
                        data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a style="margin-left: 85% " href="{{ url('/pages.allproducts/1') }}"
                            class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"><span>SHOP
                                NOW</span></a>

                    </div>


                </li>
                <!-- /End Slide 2 -->
            </ul>
        </div>
    </div>
    <!-- END SLIDER -->
    <!-- =============================================================================== -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                             <ol class="carousel-indicators">
                             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                             </ol>
                             <div class="carousel-inner">
                             <div class="carousel-item active">
                              
                              <img class="d-block w-100" src="./images/slider1.jpg" alt="First slide">
                             </div>
                             <div class="carousel-item">
                              <img class="d-block w-100" src="./images/slider2.jpg" alt="Second slide">
                             </div>
                             <div class="carousel-item">
                              <img class="d-block w-100" src="./images/slider3.jpg" alt="Third slide">
                             </div>
                             </div>
                             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>
                             </a>
                             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Next</span>
                             </a>
                              </div> -->
    <!-- =============================================================================== -->

    <!-- Blogs -->
    <!-- Blogs1 -->
    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Discover Art You Love From the <br>
                            World's Leading Online Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_1.1.png)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">AI Art</h4>
                            {{-- <span class="blog_meta">by admin | dec 01, 2023</span> --}}
                            <a class="blog_more" href="pages.allproducts/1">EXPLORE OUR PRIDE EXHIBITION</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_2.1.png)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Land, Seam & Sky</h4>
                            {{-- <span class="blog_meta">by admin | dec 01, 2023</span> --}}
                            <a class="blog_more" href="pages.allproducts/1">EXPLORE OUR PRIDE EXHIBITION</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_3.1.png)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Fine Art Prints</h4>
                            {{-- <span class="blog_meta">by admin | dec 01, 2023</span> --}}
                            <a class="blog_more" href="pages.allproducts/1">EXPLORE OUR PRIDE EXHIBITION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs2 -->
    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Featured Collection</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                <div class="col-lg-6 blog_item_col">
                    <div class="blog_item blog_item_2_section">
                        <div class="blog_background" style="background-image:url(images/blog_4.1.png)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">2023 Bestseller</h4>
                            <span class="blog_meta">Discover curator-approved collector favorite</span>
                            <a class="blog_more" href="pages.allproducts/1">SHOP THE COLLECTION</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 blog_item_col">
                    <div class="blog_item blog_item_2_section">
                        <div class="blog_background" style="background-image:url(images/blog_5.1.png)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">New Trend </h4>
                            <span class="blog_meta">New Technology in Art Industry</span>
                            <a class="blog_more" href="pages.allproducts/1">SHOP THE COLLECTION</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner -->

    <div class="banner">
        <div class="container">
            <div class="row" style="margin-bottom: 5%;">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Top Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_1.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">AI art</a>
                            </div>
                        </div>
                    </div> --}}
                {{-- <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_2.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Paintings</a>
                            </div>
                        </div>
                    </div> --}}
                {{-- <form action="{{ route('create') }}" method="post">
                        @csrf
                        <button type="submit">submit</button>
                    </form> --}}
                @foreach ($categories as $categories)
                    <div class="col-md-3 mb-4">
                        <div class="banner_item align-items-center "
                            style="background-image:url(images/{{ $categories->img }})">
                            <div class="banner_category">
                                <a href="{{ asset('/pages.allproducts/' . $categories->id) }}">{{ $categories->name }}</a>



                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_4.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Collectibles</a>
                            </div>
                        </div>
                    </div> --}}
                {{-- </div>
            </div>
            <div class="container" style="margin-top: 5%;">
                <div class="row"> --}}
                {{-- <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_5.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Craft Supplies</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_6.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Jewelry</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_7.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Photography</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                            style="background-image:url(images/banner_8.1.png)">
                            <div class="banner_category">
                                <a href="allproducts.html">Clothing</a>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    <!-- =================================================================== -->
    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                data-filter="*">all</li>
                            @foreach ($categories2 as $categories)
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".{{ $categories->id }}">{{ $categories->name }}</li>
                            @endforeach
                            {{-- <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                data-filter=".accessories">accessories</li>photography
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                data-filter=".men">Furniture</li> --}}

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                        {{-- ================================== --}}

                        {{-- =========================== --}}
                        <!-- Product 1 -->
                        @foreach ($products as $product)
                            <div class="product-item {{ $product->categoryId }}">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="images/{{ $product->img }}" style="height:220px;">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>-${{ $product->price * $product->discount->discountPercent }}</span>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                href="/pages.single/{{ $product->id }}">{{ $product->name }}</a></h6>
                                        <div class="product_price">
                                            ${{ $product->price }}<span>${{ $product->price * $product->discount->discountPercent + $product->price }}
                                        </div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button " style="width: 0px">
                                    {{-- <a href="cart.html">add to cart</a> --}}

                                    <form id="myForm" action="{{ route('pages.cart.store', ['id' => $product->id]) }}"
                                        method="get">

                                        @csrf
                                        <input type="hidden" style="width: 0px" type="number" id="quantity_value"
                                            name="quantity" value="1" min="1">
                                        <input type="hidden" style="width: 0px" name="product_id"
                                            value="{{ $product->id }}">


                                        <button class="btn-tarnsparnt" style="width:660%;border:none;"><a
                                                style="color: #fff; font-weight: bold ; font-size:big;  "
                                                class="red_button add_to_cart_button ml-0 btn-tarnsparnt" id="add-to-cart-btn"
                                                onclick="addToCart()" type="submit">Add
                                                to
                                                Cart</a></button>
                                        {{-- <a style="color: azure; cursor: pointer;"
                                                    class="red_button add_to_cart_button" id="add-to-cart-btn"
                                                    type="submit"
                                                    onclick="document.getElementById('myForm').submit(); addToCart()">add
                                                    to cart</a> --}}


                                    </form>
                                </div>

                            </div>
                        @endforeach
                        {{-- <!-- Product 2 -->

                        <div class="product-item PHOTOGRAPHY">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr2.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div
                                    class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                    <span>new</span>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">iving Room Wood Furniture |
                                            Epoxy Resin Office Desk </a></h6>
                                    <div class="product_price">$3,000.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 3 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr3.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">decoration bedroom decor led
                                            Ceiling fans with lights</a></h6>
                                    <div class="product_price">$400.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 4 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr4.jpg" alt="">
                                </div>
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                    <span>sale</span>
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Mosaic Artwork - Manhattan
                                            Bridge at Sunset</a></h6>
                                    <div class="product_price">$2000.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 5 -->

                        <div class="product-item women men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr55.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Octopus and diver resin night
                                            light,Ocean Resin Lamp,Wood Resin Lamp,handmade furniture</a></h6>
                                    <div class="product_price">$180.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 6 -->

                        <div class="product-item accessories">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr6.jpg" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                    <span>-$20</span>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Flower Mosaic Art - Eternal
                                            Flower Mosaic</a></h6>
                                    <div class="product_price">$6,000.00<span>$7000.00</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 7 -->

                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr7.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Top-rated Bestseller: Marbled
                                            Acrylic Glass Wall Art with 3D </a></h6>
                                    <div class="product_price">$1,350.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 8 -->

                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr8.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Leaf Wall Decor, Glass Wall
                                            Art, Frameless Free Floating Tempered Glass Panel</a></h6>
                                    <div class="product_price">$100.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 9 -->

                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr9.jpg" alt="">
                                </div>
                                <div
                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                    <span>sale</span>
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Full Moon Glass Print, Black
                                            Print On Tempered Glass, Blue Wall Decor</a></h6>
                                    <div class="product_price">$ 160.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div>

                        <!-- Product 10 -->

                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="./images/newarr10.jpg" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Made to order Crashing Wave
                                            Heart Stained Glass, Valentines gift</a></h6>
                                    <div class="product_price">$60.00</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deal of the week -->

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="images/WDEEL.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Deal Of The Week</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day1" class="timer_num">03</div>
                                <div class="timer_unit">Day</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour1" class="timer_num">15</div>
                                <div class="timer_unit">Hours</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute1" class="timer_num">45</div>
                                <div class="timer_unit">Mins</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second1" class="timer_num">23</div>
                                <div class="timer_unit">Sec</div>
                            </li>
                        </ul>
                        <script>
    // Set the target date and time for the countdown
    const targetDate = new Date('December 10, 2023 00:00:00').getTime();

    // Update the countdown every second
    const timerInterval = setInterval(updateTimer, 1000);

    function updateTimer() {
        const currentDate = new Date().getTime();
        const timeDifference = targetDate - currentDate;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // Update the HTML elements
        document.getElementById('day1').textContent = formatTime(days);
        document.getElementById('hour1').textContent = formatTime(hours);
        document.getElementById('minute1').textContent = formatTime(minutes);
        document.getElementById('second1').textContent = formatTime(seconds);

        // Check if the countdown is over
        if (timeDifference < 0) {
            clearInterval(timerInterval);
            // You can add additional logic here when the countdown is over
        }
    }

    function formatTime(time) {
        return time < 10 ? `0${time}` : time;
    }
</script>
                        <div class="red_button deal_ofthe_week_button"><a href="pages.allproducts/1">shop now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====================================================================== -->

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div class="owl-carousel owl-theme product_slider">

                            <!-- Slide 1 -->
                            @foreach ($products as $product)
                                <div class="owl-item product_slider_item">
                                    <div class="product-item">
                                        <div class="product discount">
                                            <div class="product_image">
                                                <img src="images/{{ $product->img }}" alt="">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <!-- Slide 2 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_2.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div
                                            class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                            <span>new</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Samsung CF591 Series
                                                    Curved 27-Inch FHD Monitor</a></h6>
                                            <div class="product_price">$610.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_3.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Blue Yeti USB
                                                    Microphone Blackout Edition</a></h6>
                                            <div class="product_price">$120.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 4 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_4.png" alt="">
                                        </div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>sale</span>
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450
                                                    Turbo Thermal Label Printer</a></h6>
                                            <div class="product_price">$410.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 5 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_5.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose
                                                    Gold & Grey</a></h6>
                                            <div class="product_price">$180.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 6 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product discount">
                                        <div class="product_image">
                                            <img src="images/product_slider_6.png" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>-$20</span>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP
                                                    Digital Camera (Silver)</a></h6>
                                            <div class="product_price">$520.00<span>$590.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 7 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_7.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Samsung CF591 Series
                                                    Curved 27-Inch FHD Monitor</a></h6>
                                            <div class="product_price">$610.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 8 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_8.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Blue Yeti USB
                                                    Microphone Blackout Edition</a></h6>
                                            <div class="product_price">$120.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 9 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_9.png" alt="">
                                        </div>
                                        <div
                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                            <span>sale</span>
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450
                                                    Turbo Thermal Label Printer</a></h6>
                                            <div class="product_price">$410.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 10 -->

                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/product_slider_10.png" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose
                                                    Gold & Grey</a></h6>
                                            <div class="product_price">$180.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Slider Navigation -->

                        <div
                            class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div
                            class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blogs -->

    <!-- Blogs3 artist speech -->
    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Featured Collection</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                <div class="col-lg-8 blog_item_col">
                    <div class="blog_item blog_item_2_section">
                        <div class="blog_background" style="background-image:url(images/blog_6.1.png)"></div>
                        <!-- <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center"> -->
                        <h4 class="blog_title">2023 Bestseller</h4>
                        <span class="blog_meta">Discover curator-approved collector favorite</span>
                        <a class="blog_more" href="#">SHOP THE COLLECTION</a>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item blog_item_2_section">
                        <div class="blog_background"></div>
                        <div class="align-items-center justify-content-center " style="margin-top: 20%;">
                            <h4 style="font-size: xx-large;">Find Art You Love</h4>
                            <p style="font-size: x-large; line-height: 1;">"At Saatchi Art, We make it our mission
                                to help you discover and buy from the best emerging artist around the world.
                                Whether you're looking to discover a new artist add a statement piece to your home,
                                or commemorate an important life
                                event, Saatchi Art is your portal tp thousands of original works by today's top
                                artists.</p><br>
                            <img src="./images/blog7.1.png" alt="" width="50%"><br>
                            <span><b>Chief Curator & VP, Art Advisory</b></span><br>
                            <a href="#">WORK WITH AN ART ADVISOR</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Blogs4 parteners -->
    <div class="blogs">
        <div class="container">
            <div class="row blogs_container ">
                <div class="col-lg-12 blog_item_col" style="text-align: center;">
                    <div class="section_title">
                        <h2>Trusted by over 100,000 Employees</h2>
                        <h3>Our Partner's , Whom support our Art</h3>
                    </div>
                </div>
            </div>


            <div class="row blogs_container companymarks">
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_1.png" alt="" height="70px" width="100%">
                </div>
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_2.png" height="70px" width="100%" alt="">
                </div>
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_3.svg.png" height="70px" width="100%"
                        alt="">
                </div>
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_4.svg" height="70px" width="100%" alt="">
                </div>
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_5.png" height="70px" width="100%" alt="">
                </div>
                <div class="col-lg-2 blog_item_col">
                    <img class="companymarks" src="./images/spon_6.png" height="70px" width="100%" alt="">
                </div>
            </div>

        </div>
    </div>
    <!-- =============================================================================== -->
@endsection
