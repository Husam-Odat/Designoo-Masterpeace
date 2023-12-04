<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Auth;
use App\Models\Payment;
use App\Models\Product;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use PayPal\Api\PaymentCard;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {

        // Session::flush();
        $Ncart = [];


        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $cart = Cart::where('userId', $iduser)->with('product')->get();
            // dd($cart);
            // $cart = DB::table('carts')
            // ->where('userId', $iduser)
            // ->join('products', 'carts.productId', '=', 'products.id')
            // ->select('carts.*', 'products.*')
            // ->get();
            // dd($cart);

            foreach ($cart as $item) {
                array_push($Ncart, $item->productId);
            }

            $items = count($Ncart);
        } else {
            $cart = session('cart');
            // dd($cart);
        }

        // $coupon = coupons::where('couponName', $request->coupon)->first();
        //===============

        // $total = 0;

        // foreach ($cart as $cartItem) {
        //     $price = 0;

        //     if (isset($cartItem->product)) {
        //         $price = $cartItem->product->price;
        //     } elseif (isset($cartItem->price)) {
        //         $price = $cartItem->price;
        //     }

        //     $total += $cartItem->quantity * $price;
        // }
        //=========================
        if (
            $cart != null
        ) {
            $total = 0;

            foreach ($cart as $cartItem) {
                // dd($cartItem->id);
                $total += $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']);
            };
            // if ($coupon) {
            //     $total = (float)($total - ($total * $coupon->discount));
            // }



        } else {
            $total = 0;
        }
        //================
        // $state = Str::lower($request->state);
        // dd($request->state);

        // $delivery = ($request->state === 'amman') ? 3 : 1;
        // return view('pages.cart2', compact('cart', 'total'));
        // dd($cart);
        // return view('pages.cart', compact('cart', 'total'));
        // dd($cart);
        return view('pages.cartnew', compact('cart', 'total'));

        // return view('pages.checkout' , compact('cart', 'total'));

        // return [
        //     view('pages.cart2', compact('cart', 'total')),
        //     view('pages.cart', compact('cart', 'total')),
        //     view('pages.checkout', compact('cart', 'total')),
        // ];

        // return view('pages', [
        //     'cartView' => view('pages.cart', compact('cart', 'total')),
        //     'cart2View' => view('pages.cart2', compact('cart', 'total')),
        //     'checkoutView' => view('pages.checkout', compact('cart', 'total')),
        // ]);
    }

    public function index2(Request $request)
    {

        // Session::flush();
        $Ncart = [];


        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $cart = Cart::where('userId', $iduser)->with('product')->get();
            // dd($cart);
            // $cart = DB::table('carts')
            // ->where('userId', $iduser)
            // ->join('products', 'carts.productId', '=', 'products.id')
            // ->select('carts.*', 'products.*')
            // ->get();
            // dd($cart);

            foreach ($cart as $item) {
                array_push($Ncart, $item->productId);
            }

            $items = count($Ncart);
        } else {
            $cart = session('cart');
            // dd($cart);
        }

        // $coupon = coupons::where('couponName', $request->coupon)->first();
        //===============

        // $total = 0;

        // foreach ($cart as $cartItem) {
        //     $price = 0;

        //     if (isset($cartItem->product)) {
        //         $price = $cartItem->product->price;
        //     } elseif (isset($cartItem->price)) {
        //         $price = $cartItem->price;
        //     }

        //     $total += $cartItem->quantity * $price;
        // }
        //=========================
        if (
            $cart != null
        ) {
            $total = 0;

            foreach ($cart as $cartItem) {
                // dd($cartItem->id);
                $total += $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']);
            };
            // if ($coupon) {
            //     $total = (float)($total - ($total * $coupon->discount));
            // }



        } else {
            $total = 0;
        }
        //================
        // $state = Str::lower($request->state);
        // dd($request->state);

        // $delivery = ($request->state === 'amman') ? 3 : 1;
        // return view('pages.cart2', compact('cart', 'total'));
        // dd($cart);
        return view('pages.cart', compact('cart', 'total'));
        // dd($cart);
        // return view('pages.cartnew', compact('cart', 'total'));

        // return view('pages.checkout' , compact('cart', 'total'));

        // return [
        //     view('pages.cart2', compact('cart', 'total')),
        //     view('pages.cart', compact('cart', 'total')),
        //     view('pages.checkout', compact('cart', 'total')),
        // ];

        // return view('pages', [
        //     'cartView' => view('pages.cart', compact('cart', 'total')),
        //     'cart2View' => view('pages.cart2', compact('cart', 'total')),
        //     'checkoutView' => view('pages.checkout', compact('cart', 'total')),
        // ]);
    }
    public function index3(Request $request)
    {

        // dd($order);
        // Session::flush();
        $Ncart = [];


        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $cart = Cart::where('userId', $iduser)->with('product')->get();
            // dd($cart);
            // $cart = DB::table('carts')
            // ->where('userId', $iduser)
            // ->join('products', 'carts.productId', '=', 'products.id')
            // ->select('carts.*', 'products.*')
            // ->get();
            // dd($cart);

            foreach ($cart as $item) {
                array_push($Ncart, $item->productId);
            }

            $items = count($Ncart);
        } else {
            $cart = session('cart');
            // dd($cart);
        }

        // $coupon = coupons::where('couponName', $request->coupon)->first();
        //===============

        // $total = 0;

        // foreach ($cart as $cartItem) {
        //     $price = 0;

        //     if (isset($cartItem->product)) {
        //         $price = $cartItem->product->price;
        //     } elseif (isset($cartItem->price)) {
        //         $price = $cartItem->price;
        //     }

        //     $total += $cartItem->quantity * $price;
        // }
        //=========================
        if (
            $cart != null
        ) {
            $total = 0;

            foreach ($cart as $cartItem) {
                // dd($cartItem->id);
                $total += $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']);
            };
            // if ($coupon) {
            //     $total = (float)($total - ($total * $coupon->discount));
            // }



        } else {
            $total = 0;
        }
        //================
        // $state = Str::lower($request->state);
        // dd($request->state);

        // $delivery = ($request->state === 'amman') ? 3 : 1;
        // return view('pages.cart2', compact('cart', 'total'));
        // dd($cart);
        $userId = auth()->user()->id;

        $order = Order::where('userId', $userId)
            ->with('orderProducts') // Note the corrected method name
            // ->with('product') // Note the corrected method name
            ->orderBy('id', 'desc')
            ->limit(1)
            ->first();

        // $products = $order->orderProducts[0]-> productId;
        $productIds = array(); // Initialize an array to store the productIds

        foreach ($order->orderProducts as $orderProduct) {
            $productIds[] = Product::where('id', $orderProduct->productId)->first();
        }
        // dd($productIds);

        $payment = Payment::where('userId', $userId)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        $min = 1000;
        $max = 10000;
        $randomNumberInRange = rand($min, $max);

        $currentDates = $payment->first()->created_at;
        // dd($currentDates);



        // Format the date components
        $year = $currentDates->format('Y');
        $month = $currentDates->format('m');
        $day = $currentDates->format('d');
        $invoiceNumber = "{$year}{$month}{$day}-{$randomNumberInRange}-{$userId}-{$payment->first()->id}-{$payment->first()->provider}";

        // dd($formattedDeliveryDate);
        // Generate a sequential number (replace this with your actual sequential number logic)
        // $sequentialNumber = 123; // Replace with your logic to get the actual sequential number

        $deliveryDate = $currentDates->addDays(14);

        // Format the delivery date components
        $yeard = $deliveryDate->format('Y');
        $monthd = $deliveryDate->format('m');
        $dayd = $deliveryDate->format('d');

        // Create the formatted delivery date
        $formattedDeliveryDate = "{$yeard}/{$monthd}/{$dayd}";

        // Create the invoice number by combining date components and sequential number


        return view('pages.checkout', compact('cart', 'total', 'order', 'invoiceNumber', 'formattedDeliveryDate', 'productIds'));
        // dd($cart);
        // return view('pages.cartnew', compact('cart', 'total'));

        // return view('pages.checkout' , compact('cart', 'total'));

        // return [
        //     view('pages.cart2', compact('cart', 'total')),
        //     view('pages.cart', compact('cart', 'total')),
        //     view('pages.checkout', compact('cart', 'total')),
        // ];

        // return view('pages', [
        //     'cartView' => view('pages.cart', compact('cart', 'total')),
        //     'cart2View' => view('pages.cart2', compact('cart', 'total')),
        //     'checkoutView' => view('pages.checkout', compact('cart', 'total')),
        // ]);
    }
    // ===================old====================



    // public function index()
    // {


    //     $cart = session('cart', []);

    //     // dd($cart);
    //     // Display the cart contents and total
    //     return view('pages.cart', ['cart' => $cart]);

    // }


    // public function addToCart(Request $request)
    //     {
    //         // Session::forget('cart');
    //         $productId = $request->input('product_id');
    //         // $productName = $request->input('product_name');
    //         $quantity = $request->input('quantity');

    //         $cart = session('cart', []);

    //         if (isset($cart[$productId])) {
    //             $cart[$productId] += $quantity;
    //         } else {
    //             $cart[$productId] = $quantity;
    //         }

    //         session(['cart' => $cart]);

    //         return redirect()->route('pages.cart.index');
    //     }

    //     public function removeFromCart(Request $request)
    //     {
    //         $productId = $request->input('product_id');

    //         $cart = session('cart', []);

    //         if (isset($cart[$productId])) {
    //             unset($cart[$productId]);
    //         }

    //         session(['cart' => $cart]);

    //         return redirect()->route('pages.cart.index');
    //     }

    //     public function clearCart()
    //     {
    //         session(['cart' => []]);

    //         return redirect()->route('pages.cart.index');
    //     }

    // ===================old=======================

    public function store(Request $request, $id)
    {


        $product = Product::where('id', $id)->first();
        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $productId = $product->id;
            // $quantity = $request->quantity || 1;
            $quantity = $request->quantity;

            // dd($quantity);
            // Check if the product already exists in the cart
            $existingCart = Cart::where('userId', $iduser)
                ->where('productId', $productId)
                ->first();

            if ($existingCart) {
                // Product already exists in the cart, so increment the quantity
                $existingCart->update([
                    'quantity' => $existingCart->quantity + $quantity
                ]);
            } else {
                // Product does not exist in the cart, so create a new record
                $total = $quantity * $product->price;

                Cart::create([
                    'userId' => $iduser,
                    'productId' => $productId,
                    'quantity' => $quantity,
                    'total' => $total,


                ]);
            }
        } else {
            $sessioncart = session()->get('cart', []);
            if (isset($sessioncart[$id])) {

                $sessioncart[$id]['quantity'] += isset($request->quantity) ? $request->quantity : 1;

                session()->put('cart', $sessioncart);
            } else {

                $sessioncart[$id] = [

                    'id' => $id,
                    'productId' => $product->id,
                    'productname' => $product->name,
                    'shortdes' => $product->shortdes,
                    'quantity' => isset($request->quantity) ? $request->quantity : 1,
                    'image' => $product->img,
                    'price' => $product->price,

                ];
            }
            // dd($sessioncart);
            session()->put('cart', $sessioncart);
        }


        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        if (auth()->user()) {
            $cart = cart::all();
            cart::where('productId', $id)->delete();
        } else {
            // dd($id);
            $cart = session('cart');
            // dd($cart[$id]['id']);
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    // public function updateQuantity(Request $request, $id)
    // {
    //     // Check if the user is authenticated
    //     if (auth()->check()) {
    //         $cart = Cart::where('id', $id)->first();

    //         // Check if the cart item exists
    //         if ($cart) {
    //             $newQuantity = $request->input('quantity');

    //             $cart->quantity = $newQuantity;
    //             $cart->save();
    //         }
    //     } else {
    //         $cart = session('cart');

    //         // Check if the item exists in the session cart
    //         if (isset($cart[$id])) {
    //             $newQuantity = $request->input('quantity');
    //             $cart[$id]['quantity'] = $newQuantity;
    //             session()->put('cart', $cart);
    //         }
    //     }

    //     return redirect()->back();

    // }





    public function updateQuantity(Request $request, $id)
    {
        // dd($request);
        // Check if the user is authenticated
        if (auth()->check()) {
            $cart = Cart::where('id', $id)->first();

            // Check if the cart item exists
            if ($cart) {
                $newQuantity = $request->input('quantity');

                $cart->quantity = $newQuantity;
                $cart->total = $cart->product->price * $newQuantity; // Calculate and update the total
                $cart->save();
            }
        } else {
            $cart = session('cart');

            if (isset($cart[$id])) {
                $newQuantity = $request->input('quantity');

                if ($newQuantity >= 1) {
                    $cart[$id]['quantity'] = $newQuantity;
                    $cart[$id]['total'] = $cart[$id]['price'] * $newQuantity;
                    session()->put('cart', $cart);
                }
            }
            //     $cart = session('cart');

            //     // Check if the item exists in the session cart
            //     if (isset($cart[$id])) {
            //         $newQuantity = $request->input('quantity');
            //         $cart[$id]['quantity'] = $newQuantity;
            //         $cart[$id]['total'] = $cart[$id]['product']->price * $newQuantity; // Calculate and update the total
            //         session()->put('cart', $cart);
            //     }
            // }

            // Check if the item exists in the session cart
            // $cart = session('cart');

            // if (isset($cart[$id])) {
            //     $newQuantity = $request->input('quantity');

            //     if ($newQuantity >= 1) {
            //         $cart[$id]['quantity'] = $newQuantity;
            //         $cart[$id]['total'] = $cart[$id]['price'] * $newQuantity;
            //         session()->put('cart', $cart);
            //     }
            // }

            return redirect()->back();
        }
    }


    public function getCartCount()
    {
        // Assuming you have a CartItem model with a user_id field to associate items with users
        $userId = auth()->user()->id; // Adjust as needed based on your authentication setup

        $cartCount = Cart::where('userId', $userId)->count();

        return response()->json(['cartCount' => $cartCount]);
        // return view('pages.cart', compact('cart', 'total'));
    }


    // public function getCartCount()
    // {
    //     // Assuming you have a CartItem model with a user_id field to associate items with users
    //     $userId = auth()->user()->id; // Adjust as needed based on your authentication setup

    //     // Count items in the database-based cart
    //     $dbCartCount = Cart::where('userId', $userId)->count();

    //     // Count items in the session-based cart
    //     $sessionCartCount = count(session('cart', []));

    //     // Calculate the total cart count
    //     $totalCartCount = $dbCartCount + $sessionCartCount;

    //     return response()->json(['cartCount' => $totalCartCount]);
    //     // return view('pages.cart', compact('cart', 'total'));
    // }
}
