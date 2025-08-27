<?php
// LoginController

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }
    public function showRegisterForm()
    {
        return view("auth.register");
    }
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::guard('admin')->attempt($data)) {
            return to_route('admin.dashboard')->with('success', 'Welcome Admin.');
        }
        if (Auth::guard('web')->attempt($data)) {
            return to_route('home')->with('success', 'Welcome User.');
        }
        return back()->withErrors('email', 'Wrong credentials provided, please try again later!');
    }
    public function logout()
    {
        // logging all guards out
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();

        // killing active session
        session()->invalidate();
        session()->regenerateToken();

        // redirect to login page
        return redirect()->route('auth.login')->with('success', 'logged out successfully!');
    }
    public function register(RegisterRequest $request)
    {
        // dd(public_path());
        $data = $request->validated();

        // 'name'
        // 'email'
        // 'phone'
        // 'password'
        // 'image'
        if (isset($data['image'])) {
            $image = $data['image'];
            if (($image->getSize() < 2 * 1024 * 1024)) {
                $extension = $image->getClientOriginalExtension();
                $newImageName = time() . '-user.' . $extension;
                $image->move(public_path('front/images/users'), $newImageName);
            }
            $data['image'] = $newImageName ?? 'default.jpg';
        }

        $instance = User::create($data);
        if ($instance) {
            return redirect(route('auth.login'))->with('success', 'User registered successfully!');
        }

        return back()->with('error', 'Failed to create account!');
    }
}
