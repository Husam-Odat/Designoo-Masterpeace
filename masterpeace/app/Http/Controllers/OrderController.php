<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Order;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function create(Request $request)
    {
if (Auth::user() == null) {  return redirect('/loginn');           
        }
        else{
    // dd(Auth::user());
        $id = Auth::user()->id;
        $cartItems = Cart::where('userId', $id)->get();
        $total = 0;
        foreach ($cartItems  as  $value) {
            OrderProduct::create([
                "productId" => $value['productId'],
                "quantity" => $value['quantity'],

            ]);
            $total += $value['total'];
            Order::create([
                'userId' => $id,
                'total' => $total,
                'paymentId' => 1,
                'shipmentId' => 1,
                'orderProduct_Id' => 1,


            ]);
        }
        }
        // dd($order->id);

        // if ($cart) {
        //     // Create a new Order record with data from the Cart
        //     $order = new Order();
        //     $order->user_id = $cart->user_id; // Assign the user ID or other relevant fields
        //     // $order->product_id = $cart->product_id; // Assign the product ID or other relevant fields
        //     // $order->quantity = $cart->quantity; // Assign the quantity or other relevant fields
        //     // You can add more fields here as needed

        //     // Save the new Order record to the orders table
        //     $order->save();
    }
}

/**
 * Show the form for creating a new resource.
 */
// public function create()
// {
//     //
// }

/**
 * Store a newly created resource in storage.
 */
