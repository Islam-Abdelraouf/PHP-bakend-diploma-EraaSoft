{{-- CONTACT PAGE --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Contact Form</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')

    {{-- CONTACT FORM --}}
    @include('layouts.contact-form')

@endsection
