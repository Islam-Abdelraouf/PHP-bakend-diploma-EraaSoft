{{-- PRODUCT'S CARD HTML SECTION --}}


{{-- product card --}}
<div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">

    <img class="w-full rounded-t-lg" style="height: 500px;" src={{ asset($product->image) }} alt="product image" />
    <div class="px-5 pb-5">
        <h5 class="text-primary mb-3 mt-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white"
            style="font-size:1.5em;">
            {{ $product->title }}
        </h5>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
            {{ Str::limit($product->description, 50) }}
            <span>
                <a href="{{ url('product') . '/' . $product->id }}" class="text-blue-600">
                    Read more
                </a>
            </span>
        </p>
        {{-- product rating --}}
        @include('layouts.card-rating')
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900 dark:text-white">EGP
                {{ $product->price }}</span>
            <x-card-button>Add to cart</x-card-button>
        </div>
    </div>
</div>
{{-- card ends here --}}
