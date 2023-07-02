<?php

namespace App\Http\Controllers\admin2;
use App\Http\Controllers\Controller;
use App\Models\Subcribtion;
use Illuminate\Support\Facades\Session;

use App\Models\Coach;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SubcribtionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $userId = Auth::id();
         return view('admin_coach.cratesubcribtion', compact('userId'));
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
        $user_id = Session::get('user_id');
        // Validate the incoming request data
        $validatedData = $request->validate([
            'description' => 'required',
            'date' => '',
            'price' => '',
            'total_price' => '',

        ]);
        $validatedData['coach_id'] = $user_id;
        // Create a new Subcribtion instance with the validated data
        $subcribtion = Subcribtion::create($validatedData);

        // Optionally, you can perform additional operations or return a response here

        // Redirect or return a success response
        return redirect()->back()->with('success', 'Data inserted successfully!');
    }



    /**
     * Display the specified resource.
     */public function show(string $id)
{
    $card = Subcribtion::all();
    $coach = Coach::with('user')->findOrFail($id); // Retrieve the coach using the provided ID
    return view('home.single-page-coach', compact('coach', 'card'));
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
