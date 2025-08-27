{{-- Contact Page --}}

{{-- Inheritance from the master layout page --}}
@extends('front.layouts.master')

{{-- Title section --}}
@section('title','Contact us')

{{-- Contents section --}}
@section('content')
    <div class="d-flex flex-column account-form mx-auto mt-5 gap-3">
        <form class="form">
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" id="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
