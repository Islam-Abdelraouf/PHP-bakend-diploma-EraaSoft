<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalDoctors = Doctor::all()->count();
        return view('admin.pages.index', compact('totalDoctors'));
    }
}
