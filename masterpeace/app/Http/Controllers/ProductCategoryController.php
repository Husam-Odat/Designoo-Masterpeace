<?php

namespace App\Http\Controllers;

use App\Models\ContactMail;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\ProductInventory;


use App\Models\Review;
use App\Models\ProductCategory;
use App\Models\Discount;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexhome()
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        $products =
        //     // Product::take(10)->get();
        Product::orderBy('price', 'desc')->take(10)->get();
        // $categories = Product::select('categoryId', DB::raw('MAX(id) as id'))  // Use MAX(id) as an example
        // ->groupBy('categoryId')
        // ->pluck('categoryId');

        // $products = Product::whereIn('categoryId', $categories)
        // ->orderBy('categoryId')
        // ->orderBy('price', 'desc')
        // ->groupBy('categoryId')
        // ->take(3)
        // ->get();
        // dd($products);
        // ->where('categoryId', $id)
        //     ->sortBy('name');
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }




        $categories = ProductCategory::all();
        $categories2 = ProductCategory::all();

        return view('pages.index', [
            'categories' => $categories, 'categories2' => $categories2, 'products' => $products

        ]);
    }

    public function indexproduct($id)
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        // $products = Product::all()
        // ->where('productId', $id);

        $product = Product::find($id);
        // ->sortBy('name');
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }
        $reviews = Review::where('productId', $id)
            ->with('user')
            ->get();
        // $reviews = Review::
        //     // load('user')->
        //     where('productId', $id)
        //     with('user')->get();
        // $reviews = Review::with('user')
        // ->where('productId', $id)
        // ;
        // dd($reviews);
        // return view('pages.single', [
        //     'reviews' => $reviews
        // ]);

        $reviewsavarage = round(Review::where('productId', $id)->avg('review'), 0);
        $reviewscount = Review::where('productId', $id)->count();

        // $categories = ProductCategory::all();

        return view('pages.single', [
            // 'categories' => $categories
            'product' => $product,
            'reviews' => $reviews,
            'reviewsavarage' => $reviewsavarage,
            'reviewscount' => $reviewscount

        ]);
    }
    public function index($id)
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        // $products = Product::all()
        //     ->load('discountId', $id)
        //     ->where('categoryId', $id)

        //     ->sortBy('name');
        //     dd($products);
        $products = Product::where('categoryId', $id)
            ->with('discount','review') // Eager load the 'discount' relationship
            ->orderBy('name')
            ->paginate(request('perPage', 6));
        
            $averageReviews = [];

        foreach ($products as $product) {
            $averageReviews[$product->id] = round(Review::where('productId', $product->id)->avg('review'), 0);
        }
        $reviewsavarage = round(Review::where('productId', $id)->avg('review'), 0);
        $reviewscount = Review::where('productId', $id)->count();
            // dd($reviewscount);
        // ->get();
        // dd($products);
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }




        $categories = ProductCategory::all();

        return view('pages.allproducts', [
            'categories' => $categories, 'products' => $products, 'activeCategoryId' => $id, 'reviewsavarage' => $reviewsavarage, 'reviewscount' => $reviewscount, 'averageReviews' => $averageReviews

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }



    // public function search(Request $request)
    // {

    //     $categories = ProductCategory::all();
    //     // $query = Product::all();
    //     $query = Product::query();
    //     if (isset($request->name) && $request->name != null) {


    //         $query->where('name', 'LIKE', '%' . $request->name . '%');
    //     }
    //     // $products = $query->paginate(6);
    //     // $products = $query;
    //     $products = $query->get();
    //     // foreach ($products as $product) {
    //     //     $donate = 0;
    //     //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
    //     //     if ($volnteerDetails->count() > 0) {
    //     //         foreach ($volnteerDetails as $value) {
    //     //             $donate += $value->price;
    //     //         }
    //     //     }
    //     //     $product->donate = $donate;
    //     // }

    // $id=null;
    //     return view('pages.allproducts', ['products' => $products, 'categories' => $categories ,'activeCategoryId' => $id]);
    //     // }
    // }

    public function search(Request $request)
    {
        $id = null;
        $categories = ProductCategory::all();
        // $query = Product::all();
        $query = Product::query();
        if (isset($request->name) && $request->name != null) {


            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        // $products = $query->paginate(6);
        // $products = $query;
        $products = $query
            ->with('discount') // Eager load the 'discount' relationship
            ->orderBy('name')
            ->paginate(request('perPage', 6));

        $reviewsavarage = round(Review::where('productId', $id)->avg('review'), 0);
        $reviewscount = Review::where('productId', $id)->count();
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }

        // ->get();
        // dd($products);
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }




        $categories = ProductCategory::all();




        return view('pages.allproducts', ['products' => $products, 'categories' => $categories, 'activeCategoryId' => $id ,'reviewsavarage' => $reviewsavarage, 'reviewscount' => $reviewscount,]);
        // }
    }




    public function indexdash()
    {
      

       
        
        
        $reviewscount = Review::all()->count();
        $productscount = Product::all()->count();
        $usersCount = User::where('role', 0)->count();
        $adminsCount = User::where('role', 1)->count();
        $orderscount = Order::all()->count();
        $ordersTotalSum = Order::sum('total');
        $categoriescount = ProductCategory::all()->count();
        
        $contactscount = Contact::all()->count();
        $discountscount = Discount::all()->count();
        $productInventoryscount = ProductInventory::all()->count();

        // $categories = ProductCategory::all();

        return view('Dash.Home', [
            // 'categories' => $categories

            'productscount' => $productscount,
            'usersCount' => $usersCount,
            'adminsCount' => $adminsCount,
            'orderscount' => $orderscount,
            'categoriescount' => $categoriescount,
            'contactscount' => $contactscount,
            'reviewscount' => $reviewscount,
            'discountscount' => $discountscount,
            'productInventoryscount' => $productInventoryscount,
            'ordersTotalSum' => $ordersTotalSum,

        ]);
    }

}
