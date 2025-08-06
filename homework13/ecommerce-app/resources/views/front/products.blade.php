{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    <h1 class="display-2 py-3 text-center">Products Page</h1>
@endsection

{{-- Page Contents --}}
@section('content')

    {{-- assign received products array to $allProducts variable --}}
    @php
        $allProducts = $products;
    @endphp

    {{-- Show product by id --}}
    <div class="container mt-5">
        <div class="row g-4">
            @foreach ($allProducts as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ url($product->image) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
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
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
