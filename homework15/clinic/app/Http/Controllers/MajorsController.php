<?php
//MajorsController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorsController extends Controller
{

    public function majors()
    {
        return view("front.majors");
    }
}
