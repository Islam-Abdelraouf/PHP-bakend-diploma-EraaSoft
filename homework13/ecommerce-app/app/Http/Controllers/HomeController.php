<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view("front.home");
    }


    public function contact()
    {
        return view("front.contact");
    }

    public function about()
    {
        return view("front.about");
    }


    public function sendMessage(Request $request)
    {
        //return view("/App/Http/Controllers/");
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:500']
        ]);

        //create new message instance
        $message = new Message();

        //assign message data
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->message = $data['message'];

        //save message into database
        $message->save();

        //return back (record successfully saved)
        return back()->with('success', 'Data inserted successfully!');
    }
}
