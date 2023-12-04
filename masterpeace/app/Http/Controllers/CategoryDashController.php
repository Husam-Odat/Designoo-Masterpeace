<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Volnteer;
use Illuminate\Http\Request;

class CategoryDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $allcat = ProductCategory::all();
        // dd($allcat);
        return view('Dash.category', compact('allcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dash.addCategory');
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
            'name' => 'required |max:30| min:5',
            'description' => 'required |max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        ProductCategory::create($input);

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');

        // Category::create([
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'image'=>'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'
        // ]);

        // return redirect()->route('category.index')->with(['success' => 'created successfully
        // ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $category1, $id)
    {
        $category1  = ProductCategory::findOrFail($id);
        return view('Dash.showcat')->with('category', $category1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
        
        // $data =Category::find($id);
        return view('Dash.editcatg', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'name' => 'required |max:30',
            'description' => 'required |max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        } else {
            $input['img'] = $category->image;
        }

        $category->update($input);

        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully');

        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // Category::where(['id' => $id])->update($data);
        // return redirect()->route('category.index')->with(['success' => 'Updated successfully
        // ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::select('*')
            ->where('categoryId', $id)
            ->get();
        if ($products->count() != 0) {;

            // Redirect to the 'category.index' route
            return redirect()->route('category.index')->with(['cancel' => 'You have items under this category']);
        }
        ProductCategory::destroy($id);

        return redirect()->route('category.index')->with(['deleted' => 'Deleted successfully']);
    }
}
