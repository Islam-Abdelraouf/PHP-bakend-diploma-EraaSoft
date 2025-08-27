<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::query();

        $doctors = request()->has('search')
            ? Doctor::where('name', 'LIKE', '%' . request()->search . '%')->paginate(10)
            : Doctor::paginate(10);
        return view("admin.pages.doctors.index", compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        return view('admin.pages.doctors.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        
        $validatedRequest = $request->validated();

        if (isset($validatedRequest['image'])) {
            $image = $validatedRequest['image'];
            $newImageName = uploadImage($image, 'doctors');
        }
        $validatedRequest['image'] = $newImageName ?? 'default.jpg';

        $results = Doctor::create($validatedRequest);
        if ($results) {
            return redirect()->route('admin.doctor.index')->with('success', 'Doctor has been created successfully!');
        }
        return back()->with('error', 'Error creating major!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {

        // Doctor::destroy($id);
        $doctor->delete();
        return back()->with('success', 'Doctor record has been deleted successfully!');
    }
}
