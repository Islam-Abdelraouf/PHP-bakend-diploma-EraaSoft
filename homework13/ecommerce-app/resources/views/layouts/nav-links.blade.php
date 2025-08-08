{{-- NAV LINKS SECTION --}}


<div class="ml-10 flex items-baseline space-x-4">
    <a href="{{ url('/') }}" {{-- Home Link --}}
        class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'bg-gray-800 text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        Home
    </a>
    <a href="{{ url('/products') }}" {{-- Products Link --}}
        class="{{ request()->is('products') ? 'bg-gray-900 text-white' : 'bg-gray-800 text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        Products
    </a>
    <a href="{{ url('/contact') }}" {{-- Contact Link --}}
        class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'bg-gray-800 text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        Contact
    </a>
    <a href="{{ url('/about') }}" {{-- About Link --}}
        class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'bg-gray-800 text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        About
    </a>
</div>
