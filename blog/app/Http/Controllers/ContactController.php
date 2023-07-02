<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.contact');
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
         $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => ['required', function ($attribute, $value, $fail) {
                $wordCount = str_word_count($value);
                if ($wordCount > 40) {
                    $fail('The '.$attribute.' must not exceed 40 words.');
                }
            }],
        ]);

         $user = Auth::user();

         if ($user->email !== $request->email) {
             return redirect()->back()->with('error', 'Email does not match the logged-in user.');
         }

         $contact = new Contact;
         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->comment = $request->comment;

         $contact->save();

         return redirect()->back()->with('success', 'Contact created successfully.');
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
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
