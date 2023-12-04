<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Order;
use App\Models\Cart;

use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage; // Make sure to add this line

use Illuminate\Validation\Rule;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // return view('profile.edit', [
        //     'user' => $request->user(),
        // ]);
        $userId = auth()->user()->id;



        $orders = Order::where('userId', $userId)->get();
        // dd($orders);
        $orderItems = [];

        // dd($orderItems);
        foreach ($orders as $item) {
            // $orderItems[] = OrderProduct::where('orderId', $item->id)
            //     ->with('product')
            //     ->get();

            $orderItems[] = DB::table('orders')
                ->join('order_products', 'order_products.orderId', '=', 'orders.id')
                ->join('products', 'order_products.productId', '=', 'products.id')
                ->where('orderId', $item->id)

                ->select('products.name', 'products.img', 'products.price', 'order_products.quantity')
                ->get();
        }
        // dd($orderItems);

        return view('pages.userprofile', [
            'user' => $request->user(),
            'orderItems' => $orderItems,
            'orders' => $orders,
        ]);
    }

    //     select users.name , orders.total ,products.name , products.price ,order_products.quantity from orders
    // join order_products on order_products.orderId = orders.id
    // join products on order_products.productId = products.id
    // join users on users.id = orders.userId
    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $userId = auth()->user()->id;
        // Validate the form data, including the image
        $request->validate([
            // Add validation rules for other profile fields
            // 'img' => 'image|mimes:jpeg,png,gif|max:800',
            // 'email' => 'required|email|unique:users,email,',
            // 'username' => 'required|string|unique:users,username,',
            // 'name' => 'required|string|max:255',
            // 'lastname' => 'required|string|max:255',
            // 'phone' => 'required|string|max:20',
            'username' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($userId),
            ],
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'phone' => 'required|max:20', // You might need to adjust the max length based on your requirements
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($userId),
            ],
        ]);

        //Update other profile fields
        $user->fill($request->except('img'));


        // if ($request->hasFile('img')) {
        //     $image = $request->file('img');
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $user->img = "$profileImage";
        // }

        // if ($request->hasFile('img')) {
        //     $image = $request->file('img');

        //     // Generate a unique filename for the image
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();

        //     // Store the image in the specified directory
        //     Storage::putFileAs('/images', $image, $imageName);

        //     // Update the user's profile image attribute
        //     $user->img = $imageName;
        // }

        // Check if the email field has changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
    public function updateimg(Request $request)
    {
        $user = $request->user();
        $userId = auth()->user()->id;
        // Validate the form data, including the image
        $request->validate([
            // Add validation rules for other profile fields
            'img' => 'image|mimes:jpeg,png,gif|max:800',
            // 'email' => 'required|email|unique:users,email,',
            // 'username' => 'required|string|unique:users,username,',
            // 'name' => 'required|string|max:255',
            // 'lastname' => 'required|string|max:255',
            // 'phone' => 'required|string|max:20',
            // 'username' => [
            //     'required',
            //     'max:255',
            //     Rule::unique('users')->ignore($userId),
            // ],
            // 'name' => 'required|max:255',
            // 'lastName' => 'required|max:255',
            // 'phone' => 'required|max:20', // You might need to adjust the max length based on your requirements
            // 'email' => [
            //     'required',
            //     'email',
            //     'max:255',
            //     Rule::unique('users')->ignore($userId),
            // ],
        ]);

        // Update other profile fields
        $user->fill($request->except('img'));

        // if ($image = $request->file('img')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['img'] = "$profileImage";
        // } else {
        //     $input['img'] = $service->main_picture;
        // }
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user->img = "$profileImage";
        }

        // if ($request->hasFile('img')) {
        //     $image = $request->file('img');

        //     // Generate a unique filename for the image
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();

        //     // Store the image in the specified directory
        //     Storage::putFileAs('/images', $image, $imageName);

        //     // Update the user's profile image attribute
        //     $user->img = $imageName;
        // }

        // Check if the email field has changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }




    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {


        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                // $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->phone = '0789776587';
                $findUser->img = $user->avatar;
                $findUser->password = Hash::make('your_default_password');
                $findUser->save();
            }

            Auth::login($findUser);

            Session::put('id', $findUser->id);
            Session::put('type', $findUser->type);


            //==============add to cart from session====================

            $sessionCart = session('cart');
            // ===================
            if ($sessionCart != null) {
                cart::where('userId', auth()->user()->id)->delete();

                foreach ($sessionCart as $item) {
                    cart::create([

                        'productId' => $item['productId'],
                        'userId' => auth()->user()->id,
                        'quantity' => $item['quantity'],
                        'total' => $item['price'] * $item['quantity'],
                    ]);
                }
            }

            // $user = auth()->user();

            // // Update user data
            // $lastName = User::all()->first()->lastName;
            // $user->lastName = $lastName;


            // Save changes to the database
            // $user->save();
            //==============add to cart from session====================





            return redirect()->intended('/'); // Redirect to the intended URL after login

        } catch (Exception $e) {
            // Handle exceptions here
            dd($e->getMessage());
        }
    }
}
