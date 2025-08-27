<?php
// HomeController

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("front.home");
    }
    public function contact()
    {
        return view("front.contact");
    }
    public function history()
    {
        return view("front.history");
    }
}
