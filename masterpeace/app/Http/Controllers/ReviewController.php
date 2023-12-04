<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        // $reviews = Review::all()
        //     ->where('productId', $id);

        // return view(
        //     'pages.single',
        //     [
        //         'reviews' => $reviews
        //     ]
        // );


        $reviews = Review::where('productId', $id)->get();

        return view('pages.single', [
            'reviews' => $reviews
        ]);
    }
    public function indexall()
    {
        //
        // $reviews = Review::all()
        //     ->where('productId', $id);

        // return view(
        //     'pages.single',
        //     [
        //         'reviews' => $reviews
        //     ]
        // );


        // $reviews = Review::all();
        $reviews = Review::with(['product', 'user'])
            ->get();
        // dd($reviews);
        return view('Dash.rate_dash', [
            'reviews' => $reviews
        ]);
    }
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
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
        // $request->validate([
        //     // 'name' => 'required|string',
        //     // 'email' => 'required|email',
        //     // 'rating' => 'required|integer|min:1|max:5',
        //     'description' => 'required|string',
        // ]);


        // $user_id = $request->user_id;
        $userId = Auth::user()->id;
        $productId = $request->productId;
        $review = Review::create([
            // 'userId' => $user_id,
            // 'productId' => $user_id,

            // 'userId' => $request->input('userId'),
            'userId' => $userId,
            'productId' => $request->input('productId'),
            'review' => $request->input('review'),
            'description' => $request->input('description'),


        ]);



        return redirect()->route('pages.single', ['id' => $productId])->with('success', 'Review added successfully');
        // return redirect()->route('reviews.store', ['id' => $productId])->with('success', 'Review added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Review $review)
    // {
    //     //
    // }
}
