{{-- HOME PAGE --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Home Page</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    @include('layouts.carousel')
@endsection
