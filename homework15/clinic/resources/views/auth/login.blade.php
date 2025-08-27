{{-- Login Page --}}

{{-- Inheritance from the master layout page --}}
@extends('front.layouts.master')


{{-- Title section --}}
@section('title', 'Login')


{{-- Contents section --}}
@section('content')
    <div class="d-flex flex-column account-form mx-auto mt-5 gap-3">

        {{-- success message component --}}
        <x-success />
        {{-- LOGIN Form Markup --}}
        <form class="form" method="POST" action="{{ route('auth.login.post') }}" novalidate>

            {{-- cross-site request forgerty --}}
            @csrf
            {{-- email --}}
            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
                <x-alert key="email" />
            </div>
            {{-- password --}}
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" name="password" required>
                <x-alert key="password" />
            </div>
            {{-- Login button --}}
            <button type="submit" value="login" class="btn btn-primary">Login</button>
        </form>
        <div class="d-flex justify-content-center flex-column flex-lg-row flex-md-row flex-sm-column gap-2">
            <span>don't have an account?</span><a class="link" href="{{ route('auth.register') }}">create account</a>
        </div>
    </div>
@endsection
