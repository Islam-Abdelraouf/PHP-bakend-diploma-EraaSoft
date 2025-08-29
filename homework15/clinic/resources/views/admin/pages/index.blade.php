{{-- ADMIN DASHBOARD --}}



@extends('admin.layouts.master')

@section('title', 'Majors Listing')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>****</h3>
                                <p>Patients</p>
                                <p>(in progress)</p>
                            </div>
                            <div class="icon"><i class="fas fa-user-injured"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>{{ $totalDoctors }}</h3>
                                <p>Doctors</p>
                                <p> .</p>
                            </div>
                            <div class="icon"><i class="fas fa-user-md"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>****</h3>
                                <p>Appointments</p>
                                <p>(in progress)</p>
                            </div>
                            <div class="icon"><i class="fas fa-calendar-check"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>$****</h3>
                                <p>Revenue</p>
                                <p>(in progress)</p>
                            </div>
                            <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
