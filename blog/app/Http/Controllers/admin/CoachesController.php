<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Coach;
use App\Models\Subcribtion;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CoachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coaches = Coach::with('user')->get();
        $users = User::where('role_id', 3)->get();
        return view('home.coaches', compact('coaches', 'users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_coaches');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'experiences' => '',
            'description' => '',
            'education' => '',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move('images', $imageName);
            $user->img = $imageName;
        }

        $user->save();

        $coach = new Coach;
        $coach->experiences = $request->experiences;
        $coach->description = $request->description;
        $coach->education = $request->education;

        // Associate the coach with the user
        $coach->user_id = $user->id;

        $coach->save();

        return view('admin.add_coaches')->with('success', 'Coach created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($coach)
    {
        $card = Subcribtion::where('coach_id',  $coach)->get();
        $coach = Coach::with('user')->findOrFail($coach);
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
