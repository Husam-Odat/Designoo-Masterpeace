<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;
use App\Models\Volnteeritem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VolnteeritemDashhhController extends Controller
{
    public function index()
    {
        // $users = Volnteer::select('users.name', 'users.email', 'volnteers.volunteer_name', 'volnteeritems.qty', 'volnteeritems.number', 'volnteeritems.location')
        // ->join('volnteeritems', 'volnteers.id', '=', 'volnteeritems.volunteer_id')
        // ->join('categories', 'volnteers.category_id', '=', 'categories.id')
        // ->join('users', 'users.id', '=', 'volnteeritems.user_id')
        // ->get();



        $user = DB::table('orders')
            ->join('order_products', 'order_products.orderId', '=', 'orders.Id')
            ->join('payments', 'payments.id', '=', 'orders.paymentId')
            ->join('shipments', 'shipments.id', '=', 'orders.shipmentId')
            ->join('users', 'users.id', '=', 'orders.userId')
            ->join('products', 'products.id', '=', 'order_products.productId')
            ->select(
                'orders.id',
                'users.email',
                'payments.amount',
                'payments.status',
                'payments.provider',
                'shipments.country',
                'shipments.phone',
                'shipments.state',
                'shipments.postalCode',
                'orders.total',
                'products.name',
                'products.SKU',
                'products.price',
                'products.weight',
                'order_products.quantity'
            )->orderBy('id');
        $users = $user->get();

        // $users = DB::select('SELECT 
        //     users.name,
        //     users.email,
        //     volnteers.volunteer_name,
        //     volnteeritems.qty
        //     FROM volnteers
        //     JOIN volnteeritems ON volnteers.id = volnteeritems.volunteer_id
        //     JOIN categories ON volnteers.category_id = categories.id
        //     JOIN users ON volnteeritems.user_id = users.id);

        // dd($users);
        return view("Dash.item")->with("users", $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    // public function show(Volnteeritem $volnteeritem)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    // public function edit(Volnteeritem $volnteeritem)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Volnteeritem $volnteeritem)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Volnteeritem $volnteeritem)
    // {
    //     //
    // }
}
