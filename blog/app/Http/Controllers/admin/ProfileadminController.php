<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProfileadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated admin user
        $admin = auth()->user();

        return view('admin.profile', compact('admin'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.edit-profile', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $admin = User::findOrFail($id);
    $admin->name = $request->input('name');
    $admin->email = $request->input('email');

    // Check if the password is provided and hash it
    $password = $request->input('password');
    if ($password) {
        $admin->password = bcrypt($password);
    }

    // Handle the image upload if necessary
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $imageName = time() . '_' . $file->getClientOriginalName();
        $imagePath = public_path('images');

        // Move the file to the desired location
        $file->move($imagePath, $imageName);

        // Update the image path in the user model
        $admin->img = $imageName;
    }


    $admin->save();

    return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
