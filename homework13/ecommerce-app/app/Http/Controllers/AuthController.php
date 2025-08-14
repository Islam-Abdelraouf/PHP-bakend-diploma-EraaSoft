<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Display the Register form.
     */
    public function register()
    {
        return view('front.auth.register');
    }

    /**
     * Execute the Register form submit.
     */
    public function registerSubmit(request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string|min:4',
                'email' => 'required|email',
                'password' => 'required|min:4'
            ]
        );

        //create new user instance
        $result = User::create($data);

        if ($result) {
            return redirect()->route('auth.login')->with('success', 'Welcome to our website, please login!');
        }
    }


    /**
     * Display the Login form.
     */
    public function login()
    {
        return view('front.auth.login');
    }

    /**
     * Execute the Login form submit.
     */
    public function loginSubmit(request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:4'
            ],
            [
                'email.email' => 'Email or password are not correct!',
                'email.required' => 'Email address is required!',
                'password.required' => 'Email or password are not correct!',
                'password.min' => 'Email or password are not correct!'
            ]
        );
        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['Password and-or email are not correct!']);
        }

        if (Auth::user()->role === "admin") {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->role === "user") {
            return redirect()->route('home');
        }

    }


    /**
     * Execute the Logout process.
     */
    public function logout(request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('front.auth.login');
    }
}
