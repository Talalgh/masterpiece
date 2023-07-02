<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Gym;

class GymtableadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $gyms = $request->input('name_gyms');

        $gyms = Gym::when($gyms, function ($query) use ($gyms) {
                $query->where(function ($query) use ($gyms) {
                    $query->where('name', 'like', '%' . $gyms . '%')
                        ->orWhere('address', 'like', '%' . $gyms . '%')
                        ->orWhere('price', 'like', '%' . $gyms . '%');
                });
            })
            ->get();

        return view('admin.table_gym', compact('gyms'));
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
        $gyms = Gym::findOrFail($id);
        return view('admin.edit_gym',compact('gyms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gym = Gym::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gym->name = $validatedData['name'];
        $gym->address = $validatedData['address'];
        $gym->price = $validatedData['price'];

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            $img->move('images', $imageName);
            $gym->img = $imageName;
        }


        $gym->save();

        return redirect()->route('gyms.index')->with('success', 'Gym updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gym = Gym::findOrFail($id);
        $gym->delete();

        return redirect()->route('gyms.index')->with('success', 'Gym deleted successfully');
    }
}
