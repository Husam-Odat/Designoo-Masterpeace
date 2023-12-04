{{-- <!DOCTYPE html>
<html lang="en">

<head> --}}
{{-- <title>Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css"> --}}
{{-- <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css"> --}}



{{-- <link rel="stylesheet" type="text/css" href="stylesheets/style1.css">
</head>

<body> --}}
@extends('layouts.master')
@section('title', 'index')

@section('content')


    <div class="fs_menu_overlay"></div>

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
    </div>

    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Map Container -->

        <div class="row mb-5">
            <div class="col">
                <!-- <div id="google_map"> -->
                <div class="map_container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d358.7481926173361!2d35.84965428636831!3d32.55254232013671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sjo!4v1692282364961!5m2!1sen!2sjo"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <!-- <div id="map"></div> -->
                </div>
                <!-- </div> -->
            </div>
        </div>

        <!-- Contact Us -->

        <div class="row">

            <div class="col-lg-6 contact_col">
                <div class="contact_contents">
                    <h1>Contact Us</h1>
                    <p>There are many ways to contact us. You may drop us a line, give us a call or send an email,
                        choose what suits you the most.</p>
                    <div>
                        <p>+962 789 7765 87</p>
                        <p>husamaldean.odat@gmail.com</p>
                    </div>
                    <div>
                        <p>You Can Call Us Any Time On Hot Line</p>
                        <p>+962 789 7765 87</p>
                    </div>
                    <div>
                        <p>Open hours: 7.00-23.00 Sat-Fri</p>
                        <!-- <p>Sunday: Closed</p> -->
                    </div>
                </div>

                <!-- Follow Us -->

                <div class="follow_us_contents">
                    <h1>Follow Us</h1>
                    <ul class="social d-flex flex-row">
                        <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                @if (session('deleted'))
                    Swal.fire("Message", "{{ session('deleted') }}", 'success', {
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                @endif
            </script>


            @if (Session::has('success'))
                <script>
                    Swal.fire("Message", "{{ Session::get('success') }}", 'success', {
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                </script>
            @endif
            @if (session('cancel'))
                <script>
                    // Display a SweetAlert message
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('cancel') }}',
                    });
                </script>
            @endif

            <div class="col-lg-6 get_in_touch_col">
                <div class="get_in_touch_contents">
                    <h1>Get In Touch With Us!</h1>
                    @if (session('message_sent'))
                        <div class="alert alert-success">
                            {{ session('message_sent') }}
                        </div>
                    @endif
                    <p>Fill out the form below to recieve a free and confidential.</p>
                    <form method="POST" action='{{ route('contact.send') }}'>
                        @csrf
                        <div>
                            <input id="input_name" class="form_input input_name input_ph" type="text" name="name"
                                placeholder="Name" data-error="Name is required." value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input id="input_email" class="form_input input_email input_ph" type="email"
                                name="email" placeholder="Email" data-error="Valid email is required."
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{-- <input id="input_website" class="form_input input_website input_ph" type="url"
                                name="name" placeholder="Website" required="required" data-error="Name is required."> --}}
                            <textarea id="input_message" class="input_ph input_message" name="msg" placeholder="Message" rows="3"
                                required data-error="Please, write us a message.">{{ old('msg') }}</textarea>
                            @error('msg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button id="review_submit" type="submit"
                                class="red_button message_submit_btn trans_300 pl-2 pr-2" {{-- value="Submit" --}}>send
                                message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Newsletter -->
@endsection
