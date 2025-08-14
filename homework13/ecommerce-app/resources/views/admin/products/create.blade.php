{{-- ADMIN AREA --}}
{{-- CREATE PRODUCT --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Page Contents --}}
@section('content')
    <div class="flex justify-center bg-gray-100">
        <form class="w-100 w-full rounded border bg-white p-5 shadow-lg" action="{{ route('products.store') }}"
            method="POST" enctype="multipart/form-data">

            <x-section-title mainTitle="false">Create New Product</x-section-title>

            {{-- CSRF TOKEN --}}
            @csrf

            {{-- Success Message --}}
            @if (session('success'))
                @include('layouts.alert-success')
            @endif

            {{-- FORM Fields --}}
            <div class="mb-6 grid gap-6 p-5 md:grid-cols-1">

                {{-- Product Title --}}
                <div class="full-width mb-3">
                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Product Title
                    </label>
                    <input type="text" name="title" id="title"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Enter product title" value="{{ old('title') }}" />
                    <x-validation-errors errorName="title"></x-validation-errors>
                </div>

                {{-- Product Description --}}
                <div class="full-width mb-3">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Product Description
                    </label>
                    <textarea name="description" id="description" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Enter product description">{{ old('description') }}</textarea>
                    <x-validation-errors errorName="description"></x-validation-errors>
                </div>

                {{-- Product Price --}}
                <div class="full-width mb-3">
                    <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Product Price
                    </label>
                    <input type="number" step="0.01" name="price" id="price"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Enter product price" value="{{ old('price') }}" />
                    <x-validation-errors errorName="price"></x-validation-errors>
                </div>

                {{-- Product Image --}}
                <div class="full-width mb-3">
                    <label for="image" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Product Image
                    </label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" />
                    <x-validation-errors errorName="image"></x-validation-errors>
                </div>

                {{-- Submit Button --}}
                <div class="full-width mb-3">
                    <button
                        class="full-width group relative me-2 mt-2 inline-flex items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-green-400 to-blue-600 p-0.5 text-sm font-medium text-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-green-200 group-hover:from-green-400 group-hover:to-blue-600 dark:text-white dark:focus:ring-green-800"
                        style="width: 100%;">
                        <span
                            class="relative rounded-md bg-white px-5 py-2.5 transition-all duration-75 ease-in group-hover:bg-transparent dark:bg-gray-900 group-hover:dark:bg-transparent"
                            style="width: 100%;">
                            Create Product
                        </span>
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
