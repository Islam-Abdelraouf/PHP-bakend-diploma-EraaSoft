{{-- DOCTORS CREATE PAGE --}}


@extends('admin.layouts.master')

{{-- Title section --}}
@section('title', 'Create New Doctor')

{{-- Contents section --}}
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Register New Doctor</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.doctor.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="container-fluid">
                {{-- FORM --}}
                <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                {{-- Name --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="name" />
                                </div>
                                {{-- Email --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="email" />
                                </div>
                                {{-- Phone --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Phone">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="phone" />
                                </div>
                                {{-- Major Dropdown List --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="phone">Major</label>
                                        <select name="major->id" class="form-control form-select mb-3"
                                            aria-label="Default select example">
                                            <option value="" @selected(old('major->id'))>--Select Major--</option>
                                            @foreach ($majors as $major)
                                                <option value="{{ $major->id }}">{{ $major->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- Address --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="phone">Address</label>
                                        <textarea name="address" id="address" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="address" />
                                </div>
                                {{-- Image --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control py-1"></input>
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Submit button --}}
                    <div class="pb-5 pt-3">
                        <button type="submit" value="create" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.doctor.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>

@endsection
