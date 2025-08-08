{{-- ABOUT PAGE --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Ecommerce Project</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    <div class="grid grid-flow-col grid-rows-3 gap-4">
        <p>
            This project was developed by <b>Islam Abdelraouf</b> as part of the PHP Backend Development Diploma
            <b>offered
                by Eaara Soft.</b> The course is being led by <b>Eng. Moustafa Mahfouz</b> (Instructor) with support
            from
            <b>Eng. Ziad Mohamed</b> (Assistant Instructor).
        </p>
    </div>
@endsection
