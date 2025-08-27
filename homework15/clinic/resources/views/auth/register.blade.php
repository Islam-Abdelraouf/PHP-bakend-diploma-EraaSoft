{{-- Login Page --}}

{{-- Inheritance from the master layout page --}}
@extends('front.layouts.master')


{{-- Title section --}}
@section('title', 'Register')


{{-- Contents section --}}
@section('content')
    <div class="d-flex flex-column account-form mx-auto mt-5 gap-3">

        {{-- REGISTER Form Markup --}}
        <form class="form" method="post" action="{{ route('auth.register.post') }}" enctype="multipart/form-data" novalidate>

            {{-- cross-site request forgerty --}}
            @csrf
            <div class="form-items">
                {{-- Name --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                    <x-alert key='name' />
                </div>
                {{-- Phone --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone">
                    <x-alert key='phone' />
                </div>
                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                    <x-alert key='email' />
                </div>
                {{-- Image --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <x-alert key='image' />
                </div>
                {{-- Password --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="password">password</label>
                    <input type="password" class="form-control" name="password">
                    <x-alert key='password' />
                </div>
                {{-- Password Repeat --}}
                <div class="mb-3">
                    <label class="form-label required-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>
            </div>
            {{-- Register button --}}
            <button type="submit" value="register" class="btn btn-primary">Create account</button>
        </form>
        <div class="d-flex justify-content-center gap-2">
            <span>already have an account?</span><a class="link" href="{{ route('auth.login') }}"> login</a>
        </div>
    </div>
@endsection
