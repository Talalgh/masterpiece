<?php

namespace App\Http\Controllers\admin2;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use App\Models\Coach;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CoachprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $coach = $user->coach;

        return view('admin_coach.profilecoach', compact('user', 'coach'));
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
        //
    }


    /**
     * Update the specified resource in storage.
     */    public function update(Request $request, $id)
    {
        $coach = Coach::findOrFail($id); // Find the coach by ID
        $user_id = Session::get('user_id');
        $coach->experiences = $request->experiences;
        $coach->description = $request->description;
        $coach->education = $request->education;
        $coach->id =$user_id;

        $coach->price = $request->price;

        // Save the updated data
        $coach->save();

        // You can also update the user's data if needed
        $user = $coach->user;
        $user->name = $request->name;
        $user->email = $request->email;

        // Check if a new image was uploaded
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move('images', $imageName);
            $user->img = $imageName;
        }

        // Check if a new password was provided
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        // Save the updated user data
        $user->save();

        return redirect()->route('admin_coach.profilecoach.index')->with('success', 'Profile updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
