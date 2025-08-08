{{-- SHOW A PRODUCT BY ID --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Show Product</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    {{-- Card contents by id --}}
    @include('layouts.card-main')


    {{-- RELATED PRODUCTS LISTING --}}

    {{-- Section header --}}
    <x-section-title mainTitle="false">Related products</x-section-title>

    {{-- cards grid --}}
    <div class="relative mt-4 w-full overflow-x-auto text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($products as $product)
                {{-- card contents --}}
                @include('layouts.card-grid')
            @endforeach
        </div>
    </div>
@endsection
