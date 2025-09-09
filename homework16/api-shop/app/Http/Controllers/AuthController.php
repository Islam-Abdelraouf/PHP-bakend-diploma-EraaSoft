<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //  register a new user & create relatrd token
    public function register(Request $request)
    {
        //  Validation section
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        //  create user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);
        //  return JSON success response
        if ($user) {
            $token = $user->createToken('apiToken');
            return response()->json([
                'message' => 'User has been created successfully!',
                'user' => $user,
                'token' => $token->plainTextToken,
                'error' => null,
            ], 201);
        }
        //  return JSON failure response
        return response()->json([
            'message' => null,
            'error' => 'Error creating user, please try again later!',
        ], 500);
    }
    //  Login a registered user & using the created token
    public function login(Request $request)
    {
        //  Validation section
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        //  session validation check
        if (!Auth::attempt($validatedData)) {
            return response()->json([
                'message'=>null,
                'error' => '401, Unauthorized!',
            ], 401);
        }
        //  prepare JSON response Params
        $user = $request->user();

        $token = $user->createToken('apiToken');
        return response()->json([
            'message' => 'User has been logged in successfully!',
            'user' => $user,
            'token' => $token->plainTextToken,
            'error' => null,
        ], 201);
    }
    //  Logout a registered user
    public function logout(Request $request)
    {
        if ($request->user()?->currentAccessToken()) {
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => '200, Logged out successfully!',
                'error' => null,
            ], 200);
        }
        if(auth()->check()) {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            return response()->json([
                'message' => '200, Logged out successfully!',
                'error' => null,
            ], 200);
        }

        return response()->json([
            'error' => '503, User is not logged in!',
        ], 503);

    }
}
