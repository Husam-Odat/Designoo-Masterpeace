<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver;

class ServicesDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sercvvolnteer= Product::where('category_id', 1)->get();
        //====old===
        // $sercvvolnteer = Product::all();
        // return view('Dash.services', compact('sercvvolnteer'));
        // dd($sercvvolnteer);
        //====old===
        //====new===
        // $sercvvolnteer = Product::all();

        // $sercvvolnteer = Product::select('*', DB::raw('concat(LEFT(description, 100),"...") as truncated_description') );
        // $sercvvolnteer = Product::select('*', DB::raw('CONCAT(LEFT(description, 100), "...") as truncated_description'),
        //     DB::raw(
        //         'concat(LEFT(volunteer_name, 20),"...")->get();

        $sercvvolnteer = Product::select('*', DB::raw('concat(LEFT(description, 100),"+") as truncated_description') , DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'))->get();

        $products = Product::with([
                'productinventory',
                'productcategory',
                'discount']
            
        )->get();


    //    dd($products);


        return view('Dash.services', compact('sercvvolnteer'));
        dd($sercvvolnteer);
        //====new===
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
        if ($image1 = $request->file('img1')) {
            $destinationPath = 'images/';
            $profileImage1 = date('YmddHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage1);
            $input['img1'] = "$profileImage1";
        }
        if ($image2 = $request->file('img2')) {
            $destinationPath = 'images/';
            $profileImage2 = date('YmdHHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage2);
            $input['img2'] = "$profileImage2";
        }
        if ($image3 = $request->file('img3')) {
            $destinationPath = 'images/';
            $profileImage3 = date('YmmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage3);
            $input['img3'] = "$profileImage3";
        }

        Product::create($input);

        return redirect()->route('services.index')
            ->with('success', 'Product added successfully.');



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
        } else {
            $input['img'] = $service->main_picture;
        }
        if ($image1 = $request->file('img1')) {
            $destinationPath = 'images/';
            $profileImage = date('YmddHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $input['img1'] = "$profileImage";
        } else {
            $input['img1'] = $service->main_picture;
        }
        if ($image2 = $request->file('img2')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['img2'] = "$profileImage";
        } else {
            $input['img2'] = $service->main_picture;
        }
        if ($image3 = $request->file('img3')) {
            $destinationPath = 'images/';
            $profileImage = date('YmmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage);
            $input['img3'] = "$profileImage";
        } else {
            $input['img3'] = $service->main_picture;
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
