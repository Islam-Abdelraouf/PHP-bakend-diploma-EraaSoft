{{-- PRODUCTS LISTING PAGE --}}


{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Products Page</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')


    {{-- ALL PRODUCTS LISTING --}}

    {{-- cards grid --}}
    <div class="relative w-full overflow-x-auto text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($products as $product)
            {{-- @dd($product) --}}
                {{-- card contents --}}
                @include('layouts.card-grid')
            @endforeach
        </div>
    </div>
@endsection
