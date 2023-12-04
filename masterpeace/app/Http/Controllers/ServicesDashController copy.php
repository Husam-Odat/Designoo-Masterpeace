<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Cart;


use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver;

class ProductDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sercvvolnteer= Product::where('category_id', 1)->get();
        $sercvvolnteer = Product::all();
        $products = Product::all();
        return view('Dash.services', compact('products'));
        dd($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dash.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required',
            'SKU' => 'required',
            'categoryId' => 'required',
            'inventoryId' => 'required',
            'discountId' => 'required',
            // 'price' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'price' => 'required|numeric',

        ]);

        $input = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'SKU' => $request->input('SKU'),
            // 'description' => $request->input('description'),
            'categoryId' => $request->input('categoryId'),
            'inventoryId' => $request->input('inventoryId'),
            'discountId' => $request->input('discountId'),
            // 'categoryId' => $request->input('description'),
            // 'category_id' => '1', // Setting category_id to the default value '1'
            'price' => $request->input('price'), // Assuming 'price' is the correct key
        ];


        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('services.index')
            ->with('success', 'Services added successfully.');



        // Volnteer::create([
        //     'volunteer_name' => $request->volunteer_name,
        //     'category_id' => $request->category_id,
        //     'price' => $request->price,
        //     'description' => $request->description,
        //     'main_picture'=>'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'
        // ]);

        // return redirect()->route('services.index')->with(['success' => 'created successfully
        // ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show(Product $volnteer, $id)
    {
        $volnteer = Product::findOrFail($id);

        return view('Dash.showser')->with('volnteer', $volnteer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $ser = Volnteer::select('*')->find($id); 

        // return redirect()->route('services.editserv',['data'=>$ser]);
        $data = Product::find($id);
        return view('Dash.editserv', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteer  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $service)
    {

        $request->validate([
            'name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required',
            'SKU' => 'required',
            'categoryId' => 'required',
            'inventoryId' => 'required',
            'discountId' => 'required',
            // 'price' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'price' => 'required|numeric',

        ]);

        $input = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'SKU' => $request->input('SKU'),
            // 'description' => $request->input('description'),
            'categoryId' => $request->input('categoryId'),
            'inventoryId' => $request->input('inventoryId'),
            'discountId' => $request->input('discountId'),
            // 'categoryId' => $request->input('description'),
            // 'category_id' => '1', // Setting category_id to the default value '1'
            'price' => $request->input('price'), // Assuming 'price' is the correct key
        ];


        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        } else {
            $input['img'] = $service->main_picture;
        }

        $service->update($input);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
        // $data['volunteer_name'] = $request->name;
        // $data['description'] = $request->description;
        // $data['price'] = $request->price;

        // Volnteer::where(['id' => $id])->update($data);
        // return redirect()->route('services.index')->with(['success' => 'Updated successfully
        // ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = OrderProduct::select('*')
            ->where('id', $id)
            ->get();
        $items = Cart::select('*')
            ->where('id', $id)
            ->get();
        if ($details->count() == 0 && $items->count() == 0) {;

            // Redirect to the 'category.index' route
            Product::destroy($id);
            return redirect()->route('services.index')->with(['deleted' => 'service eleted successfully
            ']);
        } else {

            return redirect()->route('services.index')->with(['cancel' => "This item has donations you can not delete it"]);
        }
    }
}
