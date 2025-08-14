{{-- PUBLIC HOME --}}
<a href="{{ route('home') }}"
    class="{{ request()->is('/') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    Home
</a>
{{-- ABOUT --}}
<a href="{{ route('about') }}"
    class="{{ request()->is('about') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    About
</a>
