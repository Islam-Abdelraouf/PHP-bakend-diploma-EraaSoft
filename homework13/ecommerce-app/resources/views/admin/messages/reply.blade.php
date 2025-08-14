{{-- ADMIN AREA --}}
{{-- REPLY MESSAGE PAGE --}}


{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Reply message</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    @dump($message)
    @dump($message->id)
@endsection
