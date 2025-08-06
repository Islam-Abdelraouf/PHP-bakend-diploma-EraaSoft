{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    <h1 class="display-2 py-3 text-center">Show Product</h1>
@endsection

{{-- Page Contents --}}
@section('content')
    {{-- Show product by id --}}
    <div
        class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
            <img class="rounded-t-lg p-8" src={{ $product->image }} alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $product->title }}
                </h5>
                <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $product->description }}</p>
            </a>
            <x-product-rating></x-product-rating>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product->price }}</span>
                <a href="#"
                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add to cart
                </a>
            </div>
        </div>
    </div>

    {{-- Related Products --}}
    <h1 class="display-4 mt-5 py-3">Related products</h1>
    <div
        class="mt-2 grid grid-cols-3 gap-2 rounded-lg border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        @foreach ($products as $product)
            <div
                class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <img class="rounded-t-lg p-8" src={{ $product->image }} alt="product image" />
                <div class="px-5 pb-5">
                    <h5
                        class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->title }}
                    </h5>
                    <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        {{ Str::limit($product->description, 100) }}
                        <span>
                            <a href="{{ url('product') . '/' . $product->id }}" class="text-primary">
                                Read more
                            </a>
                        </span>
                    </p>
                    <x-product-rating></x-product-rating>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product->price }}</span>
                        <a href="#"
                            class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
