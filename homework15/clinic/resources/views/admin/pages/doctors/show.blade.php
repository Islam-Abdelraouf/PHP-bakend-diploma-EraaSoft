{{-- DOCTOR information PAGE --}}



@extends('admin.layouts.master')

{{-- Title section --}}
@section('title', 'Doctor Personal Information')

{{-- Contents section --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Doctor {{ $doctor->name }}</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        {{-- Edit doctor --}}
                        <a href="{{ route('admin.doctor.edit', $doctor->id) }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">

                {{-- Success Message --}}
                <x-success />

                {{-- @dd($doctor) --}}

                <div class="card mt-4 mx-auto" style="width: 24rem;">
                    <img src="{{ $doctor->getImageUrl() }}" class="card-img-top" alt="{{ $doctor->name }}">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><strong>Name: </strong>{{ $doctor->name }}</h5>
                        <h5 class="card-title mb-2"> <strong>Major: </strong>{{ $doctor->major->name }}</h5>
                        <h5 class="card-text mb-2"><strong>Phone: </strong>{{ $doctor->phone }}</h5>
                        <h5 class="card-text mb-2"><strong>Email: </strong>{{ $doctor->email }}</h5>
                        <h5 class="card-text mb-2"><strong>Address: </strong>{{ $doctor->address }}</h5>
                        <a href="{{ route('admin.doctor.edit', $doctor->id) }}" class="btn btn-primary d-block mt-2">Edit Profile</a>
                        <a href="{{ route('admin.doctor.index', $doctor->id) }}" class="btn btn-outline-dark d-block mt-2">Cancel</a>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
