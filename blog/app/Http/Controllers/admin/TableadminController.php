<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use App\Models\User;


class TableadminController extends Controller
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
        ->where('role_id', 2) // Add this line to filter users with role_id equal to 2
        ->get();

        return view('admin.tables', compact('users'));
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
        return view('admin.edit_user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            $img->move('images', $imageName);
            $user->img = $imageName;
        }

        $user->save();

        return redirect()->back()->with(['id' => $id, 'success' => 'User updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
