<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Message;

class DashboardController extends Controller
{
    public function home()
    {

        $users = User::where('role', 'user')->count();
        $admins = User::where('role', 'admin')->count();

        $messages = Message::count();
        $latestMessage = Message::latest()->first();

        $products = Product::count();
        $latestProduct = Product::latest()->first();

        $data = [
            'users' => $users,
            'admins' => $admins,
            'messages' => $messages,
            'latestMessage' => $latestMessage,
            'products' => $products,
            'latestProduct' => $latestProduct,
        ];

        return view('admin.dashboard', compact(
            'users',
            'admins',
            'messages',
            'products',
            'latestMessage',
            'latestProduct'
        ));
    }
}
