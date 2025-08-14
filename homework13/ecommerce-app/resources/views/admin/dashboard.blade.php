{{-- ADMIN AREA --}}
{{-- PRODUCTS LISTING PAGE --}}


{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Admin Dashboard</x-section-title>
@endsection


{{-- Page Contents --}}
@section('content')
    <div class="flex flex-wrap">
        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--users Metric Card-->
            <div class="rounded-lg border-b-4 border-green-600 bg-gradient-to-b from-green-200 to-green-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-green-600 p-5"><i class="fa-solid fa-user-tie fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Total Admins</h5>
                        <h3 class="text-3xl font-bold">{{ $admins }} <span class="text-green-500"><i
                                    class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--admins Metric Card-->
            <div class="rounded-lg border-b-4 border-pink-500 bg-gradient-to-b from-pink-200 to-pink-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-pink-600 p-5"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Total Users</h5>
                        <h3 class="text-3xl font-bold">{{ $users }} <span class="text-pink-500"><i
                                    class="fas fa-exchange-alt"></i></span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--messages Metric Card-->
            <div
                class="rounded-lg border-b-4 border-yellow-600 bg-gradient-to-b from-yellow-200 to-yellow-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-yellow-600 p-5"><i
                                class="fa-solid fa-envelope-open-text fa-2x fa-inverse"></i>
                        </div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Total MEssages</h5>
                        <h3 class="text-3xl font-bold">{{ $messages }} <span class="text-yellow-600"><i
                                    class="fas fa-caret-down"></i></span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--latestMessage Metric Card-->
            <div class="rounded-lg border-b-4 border-blue-500 bg-gradient-to-b from-blue-200 to-blue-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-blue-600 p-5"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Total Products</h5>
                        <h3 class="text-3xl font-bold">{{ $products }}<span class="text-blue-600"><i
                                    class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--products Metric Card-->
            <div
                class="rounded-lg border-b-4 border-indigo-500 bg-gradient-to-b from-indigo-200 to-indigo-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-indigo-600 p-5"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Latest Product</h5>
                        <h3 class="text-2xl font-bold">{{ Str::limit($latestProduct->title,10) }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-4 md:w-1/2 xl:w-1/3">
            <!--latestProduct Metric Card-->
            <div class="rounded-lg border-b-4 border-red-500 bg-gradient-to-b from-red-200 to-red-100 p-4 shadow-xl">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full bg-red-600 p-5"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-600">Latest Message</h5>
                        <h3 class="text-2xl font-bold">{{ Str::limit($latestMessage->title,10) }}</h3>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
