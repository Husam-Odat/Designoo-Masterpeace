@extends('layouts.master')
@section('title', 'index')
@section('content')


    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{ url('/contact') }}">Home</a></li>
                        <li class="active"><a href="{{ url('/register') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Register</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <section class="vh-100">
            <div class="container-fluid mt-3">
                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0"><a href="{{ url('/') }}"><img src="images/logoo.png"
                                style="height: 100px; width: ;" alt=""></a></span>
                </div>
                <div class="row">

                    <div class="col-lg-6 text-black mt-5">

                        <!-- <div class="px-5 ms-xl-4">
                                         <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                                         <span class="h1 fw-bold mb-0"><a href="index.html"><img src="images/logoo.png" style="height: 100px; width: ;" alt=""></a></span>
                                        </div> -->

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5"
                            style="background-color: ;">

                            <form style="width: 23rem; " method="POST" action="{{ route('register') }}">
                                @csrf
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h3>


                                <div class="form-outline mb-2">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" type="text" 
                                        class="form-control form-control-lg" name="name" :value="old('name')" required
                                        autocomplete="name" />
                                   
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                                {{-- <div class="form-outline mb-2">
                                    <x-input-label for="username" :value="__('username')" />
                                    <x-text-input id="username" type="text" id="form2Example18"
                                        class="form-control form-control-lg" :value="old('username')" required
                                        autocomplete="username" />
                                   
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />

                                </div> --}}


              
                                {{-- <div class="form-outline mb-2">
                                    <x-input-label for="lastName" :value="__('Name')" class="form-label"
                                        for="form2Example18":value="old('lastName')" required autofocus
                                        autocomplete="lastName">Last Name</label>
                                        <input type="text" id="lastName" id="form2Example18"
                                            class="form-control form-control-lg" />
                                        <x-input-error :messages="$errors->get('lastName')" class="mt-2" />

                                </div> --}}
                                <!-- Name -->
                                {{-- <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div> --}}

                                {{-- <div class="form-outline mb-2">
                                    <label class="form-label" for="form2Example18">Last Name</label>
                                    <input type="text" id="form2Example18" class="form-control form-control-lg" />

                                </div> --}}
                                {{-- <div class="form-outline mb-2">
                                    <label class="form-label" for="form2Example18">Birth date</label>
                                    <input type="date" id="form2Example18" class="form-control form-control-lg" />

                                </div> --}}
                                <div class="form-outline mb-2">
                                    <x-input-label for="email" :value="__('Email')" />

                                    <x-text-input id="email" type="email" id="form2Example18"
                                        class="form-control form-control-lg" name="email" :value="old('email')" required
                                        autocomplete="username" />

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                {{-- <div class="form-outline mb-2">
                                    <label class="form-label" for="form2Example18">Re enter Email address</label>
                                    <input type="email" id="form2Example18" class="form-control form-control-lg" />

                                </div> --}}

                                <!-- Password -->
                                {{-- <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div> --}}


                                <div class="form-outline mb-2">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <label class="form-label" for="form2Example28"></label>
                                    <x-text-input id="password" type="password" id="form2Example28" 
                                        class="form-control form-control-lg" name="password" required autocomplete="new-password"
                                        autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>



                                <div class="form-outline mb-2">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <label class="form-label" for="form2Example28"></label>
                                    <x-text-input type="password" id="password_confirmation" id="form2Example28"
                                        class="form-control form-control-lg " type="password" name="password_confirmation" required
                                        autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                                {{-- <div class="form-outline mb-2">
                                    <label class="form-label" for="form2Example28">Re enter Password</label>
                                    <input type="password" id="form2Example28" class="form-control form-control-lg" />

                                </div> --}}

                                {{-- <div class="pt-1 mb-2">
                                    <button class="btn btn-info btn-lg btn-block" type="button">Sign Up</button>
                                </div> --}}
                                <div >
                                    <a class="flex items-center justify-end mt-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="ml-4 btn btn-info btn-lg btn-block ">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                                <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                                         <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p> -->

                            </form>

                        </div>

                    </div>
                    <!-- <div  class="col-sm-6 px-0 d-none d-sm-block" style="background-image: url('./images/login.png'); height: 1000px;" > -->
                    <div class="col-lg-6 px-0 d-none d-sm-block mt-5"
                        style="background-image: url('./images/contact us_4.png'); height:500px;">
                        {{-- <div class="col-lg-6 px-0 d-none d-sm-block">
                            <!-- <img src="./images/login.png"
                                         alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;"> -->
                        </div> --}}
                    </div>
                </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <!-- Newsletter -->
    </div>
@endsection
