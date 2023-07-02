<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Coach;
use App\Models\Gym;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        ->where('role_id', 2)
        ->get();

        $userCount = User::where('role_id', 2)->count();
        $coachCount = Coach::count();
        $gymCount = Gym::count();

        return view('admin.index', compact('users', 'userCount', 'coachCount', 'gymCount'));
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
