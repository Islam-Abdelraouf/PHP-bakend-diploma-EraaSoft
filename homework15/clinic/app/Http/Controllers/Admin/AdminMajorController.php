<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Major;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AdminMajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::query();

        $majors = request()->has('search')
            ? Major::where('name', 'LIKE', '%' . request()->search . '%')->paginate(10)
            : Major::paginate(10);

        return view('admin.pages.majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMajorRequest $request)
    {
        $validatedRequest = $request->validated();

        if (isset($validatedRequest['image'])) {
            $image = $validatedRequest['image'];
            $newImageName = uploadImage($image, 'majors');
        }
        $validatedRequest['image'] = $newImageName ?? 'default.jpg';

        $results = Major::create($validatedRequest);
        if ($results) {
            return redirect()->route('admin.major.index')->with('success', 'Major has been created successfully!');
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
    public function edit(Major $major)
    {
        return view('admin.pages.majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $validatedRequest = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = uploadImage($image, 'majors');
        }
        $validatedRequest['image'] = $newImageName ?? $major->image;

        if ($major->update($validatedRequest)) {
            return redirect()->route('admin.major.index')->with('success', 'Major has been updated successfully!');
        } else {
            return back()->with('error', 'Error updating major data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('admin.major.index')->with('success', 'Major has been added successfully!');
    }
}
