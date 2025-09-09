<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\phone;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $status;
    protected $error;
    protected $data;
    //  Listing of all users
    public function index()
    {
        //  loading all users with eager loading
        $users = User::with('phones')->get();

        if (!$users) {
            $this->data = null;
            $this->status = 500;
            $this->error = 'Error collecting';
        } else {
            $this->data = UserResource::collection($users);
            $this->status = 200;
            $this->error = null;
        }

        return response()->json([
            'status' => $this->status,
            'error' => $this->error,
            'data' => $this->data,
        ]);
    }
    //  Show details of the logged in  user
    public function user(Request $request)
    {
        $user = $request->user()->load('phones');
        return new UserResource($user);
    }

}
