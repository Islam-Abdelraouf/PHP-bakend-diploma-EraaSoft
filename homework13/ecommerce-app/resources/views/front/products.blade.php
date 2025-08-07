{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    Products Page
@endsection

{{-- Page Contents --}}
@section('content')
    {{-- assign received products array to $allProducts variable --}}
    @php
        $allProducts = $products;
    @endphp

    {{-- Show product by id --}}
    <div class="relative w-full overflow-x-auto text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($allProducts as $product)
                <div
                    class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <img class="rounded-t-lg p-8" src={{ $product->image }} alt="product image" />
                    <div class="px-5 pb-5">
                        <h5
                            class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $product->title }}
                        </h5>
                        <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ Str::limit($product->description, 50) }}
                            <span>
                                <a href="{{ url('product') . '/' . $product->id }}" class="text-blue-600">
                                    Read more
                                </a>
                            </span>
                        </p>
                        <x-product-rating></x-product-rating>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">EGP {{ $product->price }}</span>
                            <x-card-button>Add to cart</x-card-button>
                        </div>
                    </div>
                </div>

















                {{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <img src="{{ url($product->image) }}" class="rounded-t-lg" alt="Product Image">
                        <div class="p-5">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-title">
                                {{ Str::limit($product->description, 80) }}
                                <span>
                                    <a href="{{ url('product') . '/' . $product->id }}" class="text-primary">
                                        Read more
                                    </a>
                                </span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">EGP {{ $product->price }}</span>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <small class="text-muted">(5)</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light">
                            <button class="btn btn-primary w-100">Add to Cart</button>
                        </div>
                </div> --}}
            @endforeach
        </div>
    </div>
@endsection
