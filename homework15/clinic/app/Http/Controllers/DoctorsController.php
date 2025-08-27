<?php
// DoctorsController

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function doctors()
    {
        return view('front.doctors/index');
    }
}
