<?php

namespace App\Http\Controllers;

use App\Models\Subscrib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VesacardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $coach_id= $request->input('coach_id');
        $gym_id= $request->input('gym_id');
        $subscriptions_id= $request->input('subscriptions_id');

        return view('home.vesa',compact('coach_id','gym_id','subscriptions_id'));
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
        // Validate the form data
        $validatedData = $request->validate([
            'card_number' => 'required',
            'card_name' => 'required',
            'date_month' => 'required',
            'date_year' => 'required',
            'cvv' => 'required',

        ]);
         // Create a new instance of your model and populate it with the form data
        $formData = new Subscrib(); // Replace `Subscrib` with your actual model name
        $formData->card_number = $request->input('card_number');
        $formData->card_name = $request->input('card_name');
        $formData->coach_id = $request->input('coach_id');
        $formData->subscriptions_id = $request->input('subscriptions_id');

        $formData->gym_id = $request->input('gym_id');
        $formData->date_month = $request->input('date_month');
        $formData->date_year = $request->input('date_year');
        $formData->cvv = $request->input('cvv');
        $formData->user_id = Auth::id(); // Assuming the user ID is provided in the request


        // Save the form data to the database
        $formData->save();

        // Return a response indicating success
        return redirect('/sucsess')->with('success', 'Form data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
