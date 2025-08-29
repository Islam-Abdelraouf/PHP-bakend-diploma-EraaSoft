{{-- MAJORS CREATE PAGE --}}


@extends('admin.layouts.master')

{{-- Title section --}}
@section('title', 'Create New Major')

{{-- Contents section --}}
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Major</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.major.index') }}" class="btn btn-primary">Back</a>
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
                <form action="{{ route('admin.major.update', $major) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                {{-- Name --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name" value="{{ old('name', $major->name) }}">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="name" />
                                </div>
                                {{-- slug --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Slug</label>
                                        <input type="text" name="slug" id="slug" class="form-control"
                                            placeholder="Slug" value="{{ old('slug', $major->slug) }}">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="slug" />
                                </div>
                                {{-- Image --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image"
                                            class="form-control py-1"></input>
                                    </div>
                                    <div>
                                        <img src="{{ $major->getImageUrl() }}" alt="{{ $major->name }}">
                                    </div>
                                    {{-- validation error message --}}
                                    <x-alert key="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Submit button --}}
                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <a href="{{ route('admin.major.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>

@endsection
