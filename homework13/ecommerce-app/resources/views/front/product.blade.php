{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    Show Product
@endsection

{{-- Page Contents --}}
@section('content')
    {{-- Show product by id --}}
    <div class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <img class="rounded-t-lg p-8" src={{ $product->image }} alt="product image" />
        <div class="px-5 pb-5">
            <h5 class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $product->title }}
            </h5>
            <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $product->description }}</p>
            {{-- product rating --}}
            <x-product-rating></x-product-rating>
            <div class="flex items-center justify-between align-bottom">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">EGP. {{ $product->price }}</span>
                {{-- Add to cart button --}}
                <x-card-button>Add to cart</x-card-button>
            </div>
        </div>
    </div>

    {{-- Related Products Listing --}}

    {{-- Section header --}}
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="my-4 text-center text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                <span class="bg-gradient-to-r from-sky-400 to-emerald-600 bg-clip-text text-transparent">
                    Related products
                </span>
            </h1>
        </div>
    </header>
    {{-- cards grid --}}
    <div class="mt-2 grid grid-cols-3 gap-2 rounded-lg border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        @foreach ($products as $product)
            {{-- product card --}}
            <div class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <img class="rounded-t-lg p-8" src={{ $product->image }} alt="product image" />
                <div class="px-5 pb-5">
                    <h5
                        class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->title }}
                    </h5>
                    <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        {{ Str::limit($product->description, 100) }}
                        <span>
                            <a href="{{ url('product') . '/' . $product->id }}" class="text-blue-600">
                                Read more
                            </a>
                        </span>
                    </p>
                    {{-- product rating --}}
                    <x-product-rating></x-product-rating>
                    <div class="flex items-center justify-between align-bottom">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product->price }}</span>
                        {{-- Add to cart button --}}
                        <x-card-button>Add to cart</x-card-button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
