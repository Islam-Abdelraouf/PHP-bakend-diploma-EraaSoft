{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    <h1 class="display-2 py-3 text-center">Contact Form</h1>
@endsection

{{-- Page Contents --}}
@section('content')
    <!-- CONTACT FORM -->

    <form class="mt-3 rounded border p-5 shadow-sm" action="{{ url('send-message') }}" method="POST">

        {{-- CSRF TOKEN --}}
        @csrf

        {{-- Success Message --}}
        @if (session('success') != null)
            <div class="alert alert-success p-1">
                {{ session('success') }}
            </div>
        @endif

        {{-- name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-circle-user"></i></span>
                <input type="text" name="name" value="{{ old('name') ?? '' }}" class="form-control" autofocus>
            </div>
            <x-val-errors errorName="name"> </x-val-errors>
        </div>
        {{-- email --}}
        <div class="mb-3">
            <label for="email">Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                <input type="email" name="email" value="{{ old('email') ?? '' }}" class="form-control">
            </div>
            <x-val-errors errorName="email"> </x-val-errors>
        </div>
        {{-- Message --}}
        <div class="mb-3">
            <label for="">Message</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-message"></i></span>
                <textarea name="message" rows="5" class="form-control"> {{ old('message') ?? '' }}</textarea>
            </div>
            <x-val-errors errorName="message"> </x-val-errors>
        </div>
        {{-- Submit Button --}}
        <div class="mb-3">
            <input type="submit" value="send" class="btn btn-primary form-control">
        </div>
    </form>
@endsection
