<?php

namespace App\Http\Controllers;
use App\Models\Review;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.review');
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
   /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validatedData = $request->validate([
        // 'name' => 'required',
        // 'review' => 'required|max:60',
        // 'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the uploaded image
    ]);

    $review = new Review;
    $review->name = $request->name;
    $review->review = $request->review;
    $review->user_id = Auth::id(); // Set the user_id to the currently authenticated user's ID
    $review->save();

    // Store the uploaded image
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $user = User::find(Auth::id());
        $user->img = $imageName;
        $user->save();
    }

    return redirect()->back()->with('success', 'Review added successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
?>
