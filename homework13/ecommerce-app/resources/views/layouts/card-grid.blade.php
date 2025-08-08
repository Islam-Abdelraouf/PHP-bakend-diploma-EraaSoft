{{-- PRODUCT'S CARD HTML SECTION --}}


{{-- product card --}}
<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

    <img class=" w-full rounded-t-lg" style="height: 600px;" src={{ asset($product->image) }} alt="product image" />
    <div class="px-5 pb-5">
        <h5
            class="mt-3 text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white" style="font-size:x-large;">
            {{ $product->title }}
        </h5>
        <p class="mt-3 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
            {{ Str::limit($product->description, 50) }}
            <span>
                <a href="{{ url('product') . '/' . $product->id }}" class="text-blue-600">
                    Read more
                </a>
            </span>
        </p>
        <x-product-rating></x-product-rating>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">EGP
                {{ $product->price }}</span>
            <x-card-button>Add to cart</x-card-button>
        </div>
    </div>
</div>
{{-- card ends here --}}

