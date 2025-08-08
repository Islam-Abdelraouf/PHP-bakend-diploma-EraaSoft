    <div class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <img class=" w-full rounded-t-lg" style="height: 650px;" src={{ $product->image }} alt="product image" />
        <div class="mt-3 px-5 pb-5">
            <h3 class="text-primary mb-3 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white" style="font-size:x-large;">
                {{ $product->title }}
            </h3>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">{{ $product->description }}</p>
            {{-- product rating --}}
            @include('layouts.card-rating')
            <div class="flex items-center justify-between align-bottom">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">EGP. {{ $product->price }}</span>
                {{-- Add to cart button --}}
                <x-card-button>Add to cart</x-card-button>
            </div>
        </div>
    </div>
