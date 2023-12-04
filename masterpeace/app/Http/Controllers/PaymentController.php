<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Shipment;
use Carbon\Carbon;
use DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    //pay for become member of the Auction

    public function payment(Request $request)
    {


        // $total = $request->cart->price;
        if (Auth::user() == null) {
            return redirect('/login');
        } else {

            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'firstname_order' => 'required|string|max:20',
                'lastname_order' => 'required|string|max:20',
                'phone_order' => 'required|string|max:20',
                'address_order' => 'required|string|max:20',
                'city_order' => 'required|string|max:20',
                'postalcode_order' => 'required|string|max:10',
                'country_order' => 'required|string|max:20',
                'state_order' => 'required|string|max:20',
                'note' => 'nullable|string|max:1000',
            ]);

            // If validation fails, return the validation errors
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            $user_id = $request->user_id;
            $shipment = Shipment::create([
                'userId' => $user_id,
                'firstName' => $request->input('firstname_order'),
                'lastName' => $request->input('lastname_order'),
                'phone' => $request->input('phone_order'),
                'address' => $request->input('address_order'),
                'city' => $request->input('city_order'),
                'postalCode' => $request->input('postalcode_order'),
                'country' => $request->input('country_order'),
                'state' => $request->input('state_order'),
                'note' => $request->input('note'),

                // 'firstName' => $request->firstname_order,
                // 'lastName' => $request->lastname_order,
                // 'phone ' => $request->phone_order,

                // 'address' => $request->address_order,
                // 'city ' => $request->city_order,
                // 'postalCode' => $request->postalcode_order,


            ]);


            try {
                $provider = new PayPalClient;
                $provider->setApiCredentials(config('paypal'));
                $paypaltoken = $provider->getAccessToken();

                $response = $provider->createOrder([
                    "intent" => "CAPTURE",
                    "application_context" => [
                        "return_url" => route('payment.success', compact('user_id')),
                        "cancel_url" => route('payment.cancel'),
                    ],
                    "purchase_units" => [
                        [
                            "amount" => [
                                'currency_code' => 'USD',
                                // "value" => $request->price,
                                "value" => $request->total_all,

                                // Make sure 'value' is used for the price

                            ],


                        ],
                    ],
                ]);

                foreach ($response['links'] as $link) {
                    if ($link['rel'] == "approve") {
                        return redirect()->away($link['href']);
                    }
                }
            } catch (\Exception $e) {
                // Handle API request errors here, e.g., log the error message
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }
    }
    public function success(Request $request)
    {

        $memberinfo = $request;

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypaltoken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        // use carbon library

        if (isset($response['status']) && $response['status'] == "COMPLETED") {
            // dd($response);
            $payment = Payment::create([
                // 'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                // 'payment_status' => $response['payment_source']['paypal']['account_status'],
                // 'currency' => 'USD',
                // 'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
                'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                'status' => $response['payment_source']['paypal']['account_status'],
                'provider' => 'paypall',
                'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
            ]);

            //====shipment===
            // dd($request);
            // $shipment = Shipment::create([
            //     'firstName' => $request->input('firstname_order'),
            //     'lastName' => $request->input('lastname_order'),
            //     'phone' => $request->input('phone_order'),
            //     'address' => $request->input('address_order'),
            //     'city' => $request->input('city_order'),
            //     'postalCode' => $request->input('postalcode_order'),

            //     // 'firstName' => $request->firstname_order,
            //     // 'lastName' => $request->lastname_order,
            //     // 'phone ' => $request->phone_order,

            //     // 'address' => $request->address_order,
            //     // 'city ' => $request->city_order,
            //     // 'postalCode' => $request->postalcode_order,


            // ]);
            //====shipment===
            // ========================
            // approve payment
            if (Auth::user() == null) {
                return redirect('/loginn');
            } else {
                // dd(Auth::user());
                $id = Auth::user()->id;
                $cartItems = Cart::where('userId', $id)


                    ->get();
                // dd($cartItems->products->price);
                $total = 0;

                foreach ($cartItems  as  $value) {
                    $total += $value['total'] + $value['total'] * .1;
                }
                // dd($payment);
                $lastRecordhipmentId = Shipment::latest()->first();
                $order = Order::create([
                    'userId' => $id,
                    'total' => $total,
                    'paymentId' => $payment->id,
                    'shipmentId' => $lastRecordhipmentId->id,
                    // 'orderProductId' => $orderProduct->id,
                    // 'orderProductId' => 1,
                ]);
                foreach ($cartItems  as  $value) {

                    $orderProduct = OrderProduct::create([
                        "productId" => $value['productId'],
                        "quantity" => $value['quantity'],
                        "price" => $value['total'] / $value['quantity'],
                        "orderId" => $order->id,


                    ]);
                    // $total += $value['total'];
                }
                Cart::where('userId', $id)->delete();
                // Order::create([
                //     'userId' => $id,
                //     'total' => $total,
                //     'paymentId' => 25,
                //     'shipmentId' => 1,
                //     'orderProductId' => $orderProduct->id,
                //     // 'orderProductId' => 1,
                // ]);
                // }
                // $product->delete();

            }
            //===========================
            // return redirect()->route('services.index')
            //     ->with('success', 'Product added successfully.');
            return redirect()->route('checkout')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
        } else {

            return response()->json('Failed payment');
        }
    }

    public function cancel()
    {
        dd('cancelled the order');
    }
// }



    //         $cart = Cart::where("userId", Auth::user()->id)->get();

    //         // dd($cart);
    //         foreach ($cart as $product) {
    //             OrderProduct::create([
    //                 "quantity" => $product->quantity,
    //                 "price" => $product->quantity * $product->product->price,
    //                 "orderId" => $order->id,
    //                 "userId" => Auth::user()->id,
    //                 "productId" => $product->productId,
    //             ]);
    //             $product->delete();
    //         }
    //         return redirect()->route('home')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
    //     } else {
    //         return redirect()->route('paypal_cancel');
    //     }
    // }



    //=============================Cash on delevary =================


    public function paymentcash(Request $request)
    {


        // $total = $request->cart->price;
        if (Auth::user() == null) {
            return redirect('/login');
        } else {

            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'firstname_order' => 'required|string|max:20',
                'lastname_order' => 'required|string|max:20',
                'phone_order' => 'required|string|max:20',
                'address_order' => 'required|string|max:20',
                'city_order' => 'required|string|max:20',
                'postalcode_order' => 'required|string|max:10',
                'country_order' => 'required|string|max:20',
                'state_order' => 'required|string|max:20',
                'note' => 'nullable|string|max:1000',
            ]);

            // If validation fails, return the validation errors
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            $user_id = $request->user_id;
            $shipment = Shipment::create([
                'userId' => $user_id,
                'firstName' => $request->input('firstname_order'),
                'lastName' => $request->input('lastname_order'),
                'phone' => $request->input('phone_order'),
                'address' => $request->input('address_order'),
                'city' => $request->input('city_order'),
                'postalCode' => $request->input('postalcode_order'),
                'country' => $request->input('country_order'),
                'state' => $request->input('state_order'),
                'note' => $request->input('note'),

                // 'firstName' => $request->firstname_order,
                // 'lastName' => $request->lastname_order,
                // 'phone ' => $request->phone_order,

                // 'address' => $request->address_order,
                // 'city ' => $request->city_order,
                // 'postalCode' => $request->postalcode_order,


            ]);


    //         try {
    //             $provider = new PayPalClient;
    //             $provider->setApiCredentials(config('paypal'));
    //             $paypaltoken = $provider->getAccessToken();

    //             $response = $provider->createOrder([
    //                 "intent" => "CAPTURE",
    //                 "application_context" => [
    //                     "return_url" => route('payment.success', compact('user_id')),
    //                     "cancel_url" => route('payment.cancel'),
    //                 ],
    //                 "purchase_units" => [
    //                     [
    //                         "amount" => [
    //                             'currency_code' => 'USD',
    //                             // "value" => $request->price,
    //                             "value" => $request->total_all,

    //                             // Make sure 'value' is used for the price

    //                         ],


    //                     ],
    //                 ],
    //             ]);

    //             foreach ($response['links'] as $link) {
    //                 if ($link['rel'] == "approve") {
    //                     return redirect()->away($link['href']);
    //                 }
    //             }
    //         } catch (\Exception $e) {
    //             // Handle API request errors here, e.g., log the error message
    //             return response()->json(['error' => $e->getMessage()], 500);
    //         }
    //     }
    // }
    // public function successcash(Request $request)
    // {

    //     $memberinfo = $request;

    //     $provider = new PayPalClient;
    //     $provider->setApiCredentials(config('paypal'));
    //     $paypaltoken = $provider->getAccessToken();
    //     $response = $provider->capturePaymentOrder($request->token);
    //     // use carbon library

        // if (isset($response['status']) && $response['status'] == "COMPLETED") {
            // dd($response);
            $payment = Payment::create([
                // 'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                // 'payment_status' => $response['payment_source']['paypal']['account_status'],
                // 'currency' => 'USD',
                // 'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
                'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                'status' => 'PENDING',
                'provider' => 'CASH',
                'amount' => $request->total_all,
            ]);

            //====shipment===
            // dd($request);
            // $shipment = Shipment::create([
            //     'firstName' => $request->input('firstname_order'),
            //     'lastName' => $request->input('lastname_order'),
            //     'phone' => $request->input('phone_order'),
            //     'address' => $request->input('address_order'),
            //     'city' => $request->input('city_order'),
            //     'postalCode' => $request->input('postalcode_order'),

            //     // 'firstName' => $request->firstname_order,
            //     // 'lastName' => $request->lastname_order,
            //     // 'phone ' => $request->phone_order,

            //     // 'address' => $request->address_order,
            //     // 'city ' => $request->city_order,
            //     // 'postalCode' => $request->postalcode_order,


            // ]);
            //====shipment===
            // ========================
            // approve payment






            // if (Auth::user() == null) {
            //     return redirect('/loginn');
            // } else {
            //     // dd(Auth::user());
                $id = Auth::user()->id;
                $cartItems = Cart::where('userId', $id)


                    ->get();
                // dd($cartItems->products->price);
                $total = 0;

                // foreach ($cartItems  as  $value) {
                //     $total += $value['total'] + $value['total'] * .1;
                // }
                // dd($payment);
                $lastRecordhipmentId = Shipment::latest()->first();
                $order = Order::create([
                    'userId' => Auth()->user()->id,
                    'total' => $request->total_all,
                    'paymentId' => $payment->id,
                    'shipmentId' => $lastRecordhipmentId->id,
                    // 'orderProductId' => $orderProduct->id,
                    // 'orderProductId' => 1,
                ]);
                foreach ($cartItems  as  $value) {

                    $orderProduct = OrderProduct::create([
                        "productId" => $value['productId'],
                        "quantity" => $value['quantity'],
                        "price" => $value['total'] / $value['quantity'],
                        "orderId" => $order->id,


                    ]);
                    $total += $value['total'];
                
                Cart::where('userId', $id)->delete();







                
                // Order::create([
                //     'userId' => $id,
                //     'total' => $total,
                //     'paymentId' => 25,
                //     'shipmentId' => 1,
                //     'orderProductId' => $orderProduct->id,
                //     // 'orderProductId' => 1,
                // ]);
                // }
                // $product->delete();

            }
        //===========================
        // return redirect()->route('services.index')
        //     ->with('success', 'Product added successfully.');
        // return view('pages.checkout', ['order' => $order]);


            return redirect()->route('checkout')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
        // } 
        // else {

        //     return response()->json('Failed payment');
        // }
    }

    // public function cancelcash()
    // {
    //     dd('cancelled the order');
    // }

    }}