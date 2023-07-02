<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Gym;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class TableCoachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = $request->input('name_users');

        $users = User::when($users, function ($query) use ($users) {
            $query->where(function ($query) use ($users) {
                $query->where('name', 'like', '%' . $users . '%')
                    ->orWhere('email', 'like', '%' . $users . '%');
            });
        })
        ->where('role_id', 3) // Add this line to filter users with role_id equal to 2
        ->get();

        return view('admin.table_coaches', compact('users'));
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
        $user = User::findOrFail($id);
        return view('admin.edit_coach',compact('user'));
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
/**
 * Remove the specified resource from storage.
 */
/**
 * Remove the specified resource from storage.
 */
/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $user = User::findOrFail($id);

    // Delete associated coach record
    if ($user->coach) {
        // Delete associated subscribs records
        $user->coach->subscribs()->delete();

        // Delete the coach record
        $user->coach->delete();
    }

    // Delete the user
    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully.');
}


public function coaches()
{
    return $this->hasMany(Coach::class);
}

}
