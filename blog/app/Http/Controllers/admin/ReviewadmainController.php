<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewadmainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nameReviews = $request->input('name_reviews');
        $reviews = Review::when($nameReviews, function ($query) use ($nameReviews) {
            $query->where(function ($query) use ($nameReviews) {
                $query->where('name', 'like', '%' . $nameReviews . '%')
                    ->orWhere('review', 'like', '%' . $nameReviews . '%');
            });
        })
        ->get();

        return view('admin.table-review', ['reviews' => $reviews]);
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
    public function show(string $id)
    {
        $reviews = Review::all(); // Retrieve all reviews from the database
        return view('home.testimonial', ['reviews' => $reviews]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $review = Review::findOrFail($id);
    $review->delete();

    return redirect()->back()->with('success', 'Review deleted successfully.');
}

}
