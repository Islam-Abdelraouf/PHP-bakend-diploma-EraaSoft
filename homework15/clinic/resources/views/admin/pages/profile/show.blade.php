{{-- ADMIN PROFILE PAGE --}}



@extends('admin.layouts.master')

{{-- Title section --}}
@section('title', 'Admin Profile')

{{-- Contents section --}}
@section('content')

    @auth
        {{-- @dd(Auth::guard()->user()) --}}
    @endauth
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin: {{ auth('admin')->user()->name }}</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        {{-- Edit doctor --}}
                        <a href="{{ route('admin.profile.edit', auth('admin')->user()->id) }}" class="btn btn-primary">Edit
                            Profile</a>
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

                <div class="card mx-auto mt-4" style="width: 24rem;">
                    <img src="{{ asset('front/images/users/' . auth('admin')->user()->image) }}" class="card-img-top"
                        alt="{{ auth('admin')->user()->name }}">
                    <div class="card-body">
                        <h5 class="card-title mb-2"><strong>Name: </strong>{{ auth('admin')->user()->name }}</h5>
                        <h5 class="card-text mb-2"><strong>Email: </strong>{{ auth('admin')->user()->email }}</h5>
                        <a href="{{ route('admin.profile.edit', auth('admin')->user()->id) }}"
                            class="btn btn-primary d-block mt-2">Edit Profile</a>
                        <a href="{{ route('admin.dashboard', auth('admin')->user()->id) }}"
                            class="btn btn-outline-dark d-block mt-2">Exit</a>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
