{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    <h1 class="display-2 py-3 text-center">About This Project</h1>
@endsection

{{-- Page Contents --}}
@section('content')
    <div class="row w-75 d-flex justify-content-center mx-auto my-5 px-5 text-center">
        <p>
            This project was developed by <b>Islam Abdelraouf</b> as part of the PHP Backend Development Diploma <b>offered
                by Eaara Soft.</b> The course is being led by <b>Eng. Moustafa Mahfouz</b> (Instructor) with support from
            <b>Eng. Ziad Mohamed</b> (Assistant Instructor).
        </p>
    </div>
@endsection
