<?php

namespace App\Http\Controllers\Admin;

use App\Models\Major;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::query();

        $doctors = request()->has('search')
            ? Doctor::where('name', 'LIKE', '%' . request()->search . '%')->with('major')->paginate(10)
            : Doctor::with('major')->paginate(10);
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
    public function store(CreateDoctorRequest $request)
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
    public function show(Doctor $doctor)
    {
        return view('admin.pages.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $majors = Major::all();
        return view('admin.pages.doctors.edit', compact('majors', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $validatedRequest = $request->validated();

        if ($request->hasFile('image')) {
            // dd('has image');
            $image = $validatedRequest['image'];
            $imageName = uploadImage($image, 'doctors');
        }
        $validatedRequest['image'] = $imageName ?? $doctor->image;

        if ($doctor->update($validatedRequest)) {
            return redirect()->route('admin.doctor.index')->with('success', 'Doctor has been updated successfully!');
        } else {
            return back()->with('error', 'Error updating the doctor, please try again later!');
        }
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
