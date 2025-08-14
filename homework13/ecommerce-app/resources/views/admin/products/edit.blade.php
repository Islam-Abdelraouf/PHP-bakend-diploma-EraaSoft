{{-- ADMIN AREA --}}
{{-- REPLY MESSAGE PAGE --}}


{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Edit product</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    @dump($product)
    @dump($product->id)
@endsection
