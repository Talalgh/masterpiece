<?php

namespace App\Http\Controllers\admin2;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Coach;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminCoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin_coach.admin2');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'education' => 'required',
            'experiences' => 'required',
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file validation rules as per your requirements
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->role_id = 3;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            $img->move('images', $imageName);
            $user->img = $imageName;
        }

        $user->save();

        $coach = Coach::where('user_id', $id)->firstOrFail();
        $coach->education = $request->education;
        $coach->experiences = $request->experiences;
        $coach->description = $request->description;
        $coach->save();

        return redirect()->back()->with(['id' => $id, 'success' => 'User updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
