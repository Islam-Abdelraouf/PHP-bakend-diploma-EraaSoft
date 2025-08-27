{{-- DOCTORS INDEX PAGE --}}



@extends('admin.layouts.master')

{{-- Title section --}}
@section('title', 'Doctors Listing')

{{-- Contents section --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Doctors List</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        {{-- Create new doctor --}}
                        <a href="{{ route('admin.doctor.create') }}" class="btn btn-primary">New Doctor</a>
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
                <div class="card">
                    {{-- Card Header --}}
                    <div class="card-header">
                        <div class="card-tools">

                            {{-- Card Search Form --}}
                            <form action="{{ route('admin.doctor.index') }}" method="GET">
                                <div class="input-group input-group" style="width: 350px;">
                                    <input type="text" name="search"
                                        value="{{ request()->has('search') ? request()->search : '' }}"
                                        class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append text-dark">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <a href="{{ route('admin.doctor.index') }}"
                                        class="btn btn-success my-0 ml-2 py-1">Reset</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Doctors Table section --}}
                    <div class="card-body table-responsive p-0">
                        <table class="table-hover table text-nowrap">
                            <thead>
                                <tr>
                                    <th width="60">ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Major</th>
                                    <th>Phone</th>
                                    {{-- <th>Email</th> --}}
                                    {{-- <th>Address</th> --}}
                                    <th width="100">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td><img src="{{ $doctor->image }}" alt="{{ $doctor->name }}"></td>
                                        <td> {{ $doctor->name }} </td>
                                        <th>{{ $doctor->major->major }}</th>
                                        <td> {{ $doctor->phone }} </td>
                                        {{-- <td> {{ $doctor->email }} </td> --}}
                                        {{-- <td> {{ Str::limit($doctor->address,12) }} </td> --}}
                                        <td class="px-1 text-center">
                                            <div class="flex flex-row justify-content-center">
                                                <a href="#" class="d-inline flex">
                                                    <i class="fa-solid fa-eye" style="color: #002aff;"></i>
                                                </a>
                                                <a href="#" class="d-inline flex">
                                                    <i class="fa-solid fa-pen-to-square" style="color: #05a33a;"></i>
                                                </a>
                                                <form action="{{ route('admin.doctor.destroy', $doctor) }}" method="POST" class="d-inline border-0 bg-transparent">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent"
                                                        onclick="return confirm('Delete this doctor record?')">
                                                        <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination Section --}}
                    <div class="card-footer clearfix">
                        {{ $doctors->links() }}
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
