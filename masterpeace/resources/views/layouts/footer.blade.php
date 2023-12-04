<!-- Benefit -->

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
                <div
                    class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                @if (session('message_sent'))
                    <div class="alert alert-success">
                        {{ session('message_sent') }}
                    </div>
                @endif
                {{-- <form method="POST" action='{{ route('contact.sendfooter') }}'>
                        @csrf
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                            value="Submit">subscribe</button>
                        <input id="input_email" class="form_input input_email input_ph" type="email"
                                name="email" placeholder="Email" 
                                data-error="Valid email is required." value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                            value="Submit">subscribe</button>
                            </form> --}}
                <form method="POST" action='{{ route('contact.sendfooter') }}'>
                    @csrf
                    <div
                        class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" name="email" type="email" placeholder="Your email"
                            required="required" data-error="Valid email is required." value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                            value="Submit">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>





<!-- Footer -->
<footer class="footer ">
    <!-- <footer class="footer navbar-dark bg-dark"> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-link">
                    <ul>
                        <div class="logo logo-footer">
                            <a href="index.html"><img src={{ asset('images/logoo.png') }} alt="image" width="107"
                                    height="75"></a>
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
                        <li><a href="{{ url('/pages.allproducts') }}">All Products</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <!-- <li><a href="#">Online Store</a></li>
      <li><a href="blog-list.html">Blog</a></li> -->
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-link link-faq">
                    <ul>
                        @if (Route::has('login'))
                            @auth





                                {{-- <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                {{-- logout button --}}
                                <!-- Authentication -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>

                                    </form>
                                </li>

                                {{-- logout button --}}
                            @else
                                <li><a href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth

                        @endif

                        {{-- <li><a class="afooter" href="login.html">Register</a></li>
                            <li><a class="afooter" href="registration.html">Login</a></li> --}}


                        <li><a class="afooter" href="{{ url('/cartttt') }}">Your Cart</a></li>
                        <!-- <li><a class="afooter" href="#">Wishlist items</a></li> -->

                        <li><a class="afooter" href="{{ url('/cartttt') }}">Your checkout</a></li>
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
                        <li><a href="https://www.facebook.com/husam0dat/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="mailto:husamaldean.odat@gmail.com?subject=contact&body=Line one%0DLine two"><i
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

{{-- <script>
            function addToCart() {
                // Assuming you are using Ajax to fetch the cart count from the backend
                fetch('/get-cart-count')
                    .then(response => response.json())
                    .then(data => {
                        // Update the cart count dynamically
                        var cartCountElement = document.getElementById('cart-count');
                        cartCountElement.innerText = data.cartCount;
                    })
                    .catch(error => {
                        console.error('Error fetching cart count:', error);
                    });
            }
        </script> --}}

<script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
<script src={{ asset('styles/bootstrap4/popper.js') }}></script>
<script src={{ asset('styles/bootstrap4/bootstrap.min.js') }}></script>
<script src={{ asset('plugins/Isotope/isotope.pkgd.min.js') }}></script>
<script src={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}></script>
<script src={{ asset('plugins/easing/easing.js') }}></script>
<script src={{ asset('js/custom.js') }}></script>




<!-- Javascript -->
<!-- <script src="javascript/jquery.min.js"></script>
<script src="javascript/tether.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.easing.js"></script>
<script src="javascript/parallax.js"></script>
<script src="javascript/jquery-waypoints.js"></script>
<script src="javascript/jquery-countTo.js"></script>
<script src="javascript/jquery.countdown.js"></script>
<script src="javascript/jquery.flexslider-min.js"></script>
<script src="javascript/images-loaded.js"></script>
<script src="javascript/jquery.isotope.min.js"></script>
<script src="javascript/magnific.popup.min.js"></script>
<script src="javascript/jquery.hoverdir.js"></script>
<script src="javascript/owl.carousel.min.js"></script>
<script src="javascript/equalize.min.js"></script>
<script src="javascript/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="javascript/jquery-ui.js"></script>

<script src="javascript/jquery.cookie.js"></script>
<script src="javascript/main.js"></script> -->

<!-- Revolution Slider -->
<script src={{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}></script>
<script src={{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}></script>
<script src={{ asset('javascript/rev-slider.js') }}></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src={{ asset('rev-slider/js/extensions/revolution.extension.actions.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.carousel.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.migration.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.navigation.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.parallax.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}></script>
<script src={{ asset('rev-slider/js/extensions/revolution.extension.video.min.js') }}></script>









</body>




</html>
