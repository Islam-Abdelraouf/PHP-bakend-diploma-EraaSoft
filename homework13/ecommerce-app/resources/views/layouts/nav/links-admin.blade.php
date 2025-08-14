{{-- ADMINS Dashboard --}}
<a href="{{ route('dashboard') }}"
    class="{{ request()->path() == 'admin/dashboard' ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    Dashboard
</a>
{{-- ADMIN PRODUCTS DROPDOWN MENU --}}
@php
    $activeLink = 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800';
    if (request()->path() == 'admin/products/create' || request()->path() == 'admin/products') {
        $activeLink = 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white';
    }
@endphp
<button id="products-dropdown-Link" data-dropdown-toggle="products-dropdown"
    class="{{ $activeLink }} flex w-full items-center justify-between rounded-md px-3 py-2 text-sm font-medium md:w-auto">
    Products
    <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 4 4 4-4" />
    </svg>
</button>
<!-- Dropdown menu -->
<div id="products-dropdown"
    class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow-sm dark:divide-gray-600 dark:bg-gray-700">
    <ul class="py-2 text-sm text-black dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        {{-- ADMIN CREATE PRODUCT --}}
        <li>
            <a href="{{ route('products.create') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Create</a>
        </li>
        {{-- ADMIN PRODUCTS LIST --}}
        <li>
            <a href="{{ route('products.index') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View
                all</a>
        </li>
    </ul>
</div>
{{-- ADMIN MESSAGES LIST --}}
<a href="{{ route('messages.index') }}"
    class="{{ request()->is('admin/messages') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    Messages
</a>