<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class ContactController extends Controller
{

    public function contactForm()
    {
        return view("front.contact");
    }


    public function sendMessage(Request $request)
    {

        if (!auth()->user()) {
            return back()->withErrors('Please login before contacting us!');
        }
        $userId = auth()->user()?->id;


        //return view("/App/Http/Controllers/");
        $data = $request->validate([
            'email' => ['required', 'email'],
            'title' => ['required', 'min:3'],
            'message' => ['required', 'string', 'max:500']
        ]);
        // dd($data);

        //create new message instance
        $message = new Message();

        //assign message data
        $message->user_id = $userId;
        $message->email = $data['email'];
        $message->title = $data['title'];
        $message->message = $data['message'];

        //save message into database
        $message->save();

        //return back (record successfully saved)
        return back()->with('success', 'Message sent successfully!');
    }
}
