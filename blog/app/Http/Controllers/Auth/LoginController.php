<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $role = $user->role;

            if ($role && $role->name === 'Admin') {
                session(['role' => 'Admin']);
                $request->session()->put('user_id', $user);
                return redirect('/Admin');
            } elseif ($role && $role->name === 'User') {
                session(['role' => 'User']);
                $request->session()->put('user_id', $user);
                return redirect('/');
            } elseif ($role && $role->name === 'Coach') {
                session(['role' => 'Coach']);
                $request->session()->put('user_id', $user->id);
                return redirect('/user-subscribtion');
            }
        }

        Session::flash('login-error', 'Invalid email or password');
        return redirect()->back()->withInput($request->only('email'));
    }

}
