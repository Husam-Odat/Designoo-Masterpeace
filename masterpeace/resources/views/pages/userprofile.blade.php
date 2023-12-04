@extends('layouts.master')
@section('title', 'myprofile')

@section('content')
    <hr>
    <style>
        .text-danger {
            color: #07cdec;
        }

        .btn-tarnsparnt:hover {
            background-color: #07cdec !important;
        }


        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #07cdec;
            border-color: #07cdec;
        }

        .btn-primary {
            color: #fff;
            background-color: #07cdec;
            border-color: #07cdec;
        }
    </style>

    <!-- END nav -->
    <div class="container light-style flex-grow-1 container-p-y "style="margin:110px auto">

        <!-- <h4 class="font-weight-bold py-3 mb-4">
                                                                                                                        Account settings
                                                                                                                    </h4> -->

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-general"
                            id="general-tab">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#changePassword"
                            id="change-password-tab">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#orders"
                            id="orders-tab">orders</a>
                        {{-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a> --}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            @php
                                $user = auth()->user();
                            @endphp
                            {{-- <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch') --}}

                            {{-- <div class="card-body media align-items-center">
        <div class="media-body ml-4">
            <label class="btn btn-primary">
                Upload new photo
                <input id="img" name="img" type="file" class="account-settings-fileinput" required accept="image/*">
            </label>
        </div>
    </div> --}}

                            {{-- <div class="card-body media align-items-center">
                                    <img src="{{ asset('images/users/' . Auth::user()->image) }}"
                                        style="height: 100px; border-radius: 90%;" alt="" class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-primary ">
                                            Upload new photo
                                            <x-text-input id="image" name="image" type="file"
                                                class="account-settings-fileinput" :value="old('image', $user->image)" required autofocus
                                                autocomplete="name" />
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div> --}}


                            <form method="post" action="{{ route('profile.updateimg') }}" class="mt-6 space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body media align-items-center ">
                                    <img src="{{ asset('images/' . $user->img) }}" style="width: 150px;">
                                    <img src="{{ asset('images/') }}" style="height: 200px; border-radius: 90%;"
                                        alt="" class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-primary ">
                                            Upload new photo
                                            <x-text-input id="img" name="img" type="file"
                                                class="account-settings-fileinput" :value="old('img', $user->img)" autofocus
                                                autocomplete="img" />
                                        </label> &nbsp;
                                        <button type="submit" class="btn btn-default md-btn-flat">Reset</button>

                                        <div class="text-light small mt-1 text-danger">Allowed JPG, GIF or PNG. Max size of
                                            800K</div>
                                    </div>
                                </div>
                            </form>
                            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <hr class="border-light m-0">

                                <div class="card-body">
                                    {{-- <div class="form-group">
                                        <x-input-label for="img" :value="__('img')" />
                                        <x-text-input id="img" name="img" type="text" class="form-control"
                                            :value="old('img', $user->img)" autocomplete="username" />
                                        <x-input-error class="mt-2" :messages="$errors->get('img')" />
                                    </div> --}}

                                    <div class="form-group">
                                        <x-input-label for="username" :value="__('username')" />
                                        <x-text-input id="username" name="username" type="text" class="form-control"
                                            :value="old('username', $user->username)" required autocomplete="username" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('username')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="form-control"
                                            :value="old('name', $user->name)" required autocomplete="name" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="lastName" :value="__('lastName')" />
                                        <x-text-input id="lastName" name="lastName" type="text" class="form-control"
                                            :value="old('lastName', $user->lastName)" required autocomplete="lastName" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('lastName')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="phone" :value="__('phone')" />
                                        <x-text-input id="phone" name="phone" type="text" class="form-control"
                                            :value="old('phone', $user->phone)" required autocomplete="phone" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('phone')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="country" :value="__('country')" />
                                        <x-text-input id="country" name="country" type="text" class="form-control"
                                            :value="old('country', $user->country)" required autocomplete="country" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('country')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="state" :value="__('state')" />
                                        <x-text-input id="state" name="state" type="text" class="form-control"
                                            :value="old('state', $user->state)" required autocomplete="state" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('state')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="city" :value="__('city')" />
                                        <x-text-input id="city" name="city" type="text" class="form-control"
                                            :value="old('city', $user->city)" required autocomplete="city" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('city')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="postalCode" :value="__('postalCode')" />
                                        <x-text-input id="postalCode" name="postalCode" type="text"
                                            class="form-control" :value="old('postalCode', $user->postalCode)" required autocomplete="postalCode" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('postalCode')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="address" :value="__('address')" />
                                        <x-text-input id="address" name="address" type="text" class="form-control"
                                            :value="old('address', $user->address)" required autocomplete="address" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('address')" />
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" name="email" type="email"
                                            class="form-control mb-1" :value="old('email', $user->email)" required
                                            autocomplete="username" />
                                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('email')" />

                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                            <div>
                                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                    {{ __('Your email address is unverified.') }}

                                                    <button form="send-verification"
                                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                        {{ __('Click here to re-send the verification email.') }}
                                                    </button>
                                                </p>

                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <x-primary-button style="color: #FF6347;"
                                    class="btn btn-primary">{{ __('Save') }}</x-primary-button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button>&nbsp; --}}

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                                @endif
                            </form>

                        </div>

                        <div class="tab-pane fade" id="changePassword">
                            <div class="profile">
                                <h1>User Profile</h1>
                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('put')

                                    <div>
                                        <x-input-label for="current_password" :value="__('Current Password')" />
                                        <x-text-input id="current_password" name="current_password" type="password"
                                            class="form-control" autocomplete="current-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                    </div>

                                    <div>
                                        <x-input-label for="password" :value="__('New Password')" />
                                        <x-text-input id="password" name="password" type="password"
                                            class="form-control" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    </div>

                                    <div>
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" name="password_confirmation"
                                            type="password" class="form-control" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>

                                        @if (session('status') === 'password-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('Saved.') }}</p>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="profile">
                                <h1>User Profile</h1>
                                <div class= "table-responsive">
                                    <table class="table table-bordered table-sm custom-table"
                                        style="width: 100%;margin:0 auto">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date</th>
                                                <th>Total Price Order</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $No = 0; @endphp
                                            @foreach ($orders as $item)
                                                @php $No ++; @endphp
                                                <tr>
                                                    <td>{{ $No }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>${{ $item->total }}</td>
                                                    <td>
                                                        <button class="btn btn-primary view-details-btn"
                                                            data-order-id="{{ $item->id }}">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr class="order-items-row" id="order-items-{{ $item->id }}"
                                                    style="display: none;">
                                                    <td colspan="4">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product Image</th>
                                                                    <th>Product Name</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- @foreach ($orderItems as $items)
                                                                    <tr>
                                                                        <td><img src="{{ asset('image/mas/img/' . $items->product->image1 . '') }}"
                                                                                alt="" style="width:80px"></td>
                                                                        <td>{{ $items->product->name }}</td>
                                                                        <td>{{ $items->product->price }}</td>
                                                                        <td>{{ $items->quantity }}</td>
                                                                    </tr>
                                                                @endforeach --}}
                                                                {{-- @foreach ($orders as $orderItems)
                                                                    <tr>
                                                                        <td>{{ $item->orderItems ? $item->orderItems->product->name : 'N/A' }}
                                                                        </td>
                                                                        <td>{{ $item->orderItems ? $item->orderItems->product->price : 'N/A' }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach --}}

                                                                @foreach ($orderItems[$No - 1] as $item)
                                                                    <tr>
                                                                        <td><img src="images/{{ $item->img }}"
                                                                                style="width: 50px;"></td>
                                                                        <td>{{ $item->name }}</td>
                                                                        <td>${{ $item->price }}</td>
                                                                        <td>{{ $item->quantity }}</td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>


                                <script>
                                    // Add JavaScript to handle the "View Details" button click event
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const viewDetailsButtons = document.querySelectorAll(".view-details-btn");

                                        viewDetailsButtons.forEach(button => {
                                            button.addEventListener("click", function() {
                                                const orderId = this.getAttribute("data-order-id");
                                                const orderItemsRow = document.getElementById("order-items-" + orderId);

                                                if (orderItemsRow) {
                                                    if (orderItemsRow.style.display === "none") {
                                                        orderItemsRow.style.display = "table-row";
                                                    } else {
                                                        orderItemsRow.style.display = "none";
                                                    }
                                                }
                                            });
                                        });
                                    });
                                </script>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mt-3">

            {{-- <button type="button" class="btn btn-default">Cancel</button> --}}
        </div>

    </div>
    <script>
        // Function to save the active tab in a cookie
        function saveActiveTab(tabId) {
            document.cookie = "activeTab=" + tabId;
        }

        // Function to get the active tab from the cookie
        function getActiveTab() {
            const name = "activeTab=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookieArray = decodedCookie.split(';');
            for (let i = 0; i < cookieArray.length; i++) {
                let cookie = cookieArray[i];
                while (cookie.charAt(0) == ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) == 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return null;
        }

        // Function to set the active tab based on the cookie
        function setActiveTab() {
            const activeTab = getActiveTab();
            if (activeTab) {
                document.getElementById(activeTab).click();
            }
        }

        // Add click event listeners to tab links to save the active tab
        const tabLinks = document.querySelectorAll("[data-toggle='list']");
        tabLinks.forEach((tabLink) => {
            tabLink.addEventListener("click", function() {
                saveActiveTab(tabLink.id);
            });
        });

        // Set the active tab when the page loads
        window.addEventListener("load", setActiveTab);
    </script>

@endsection
