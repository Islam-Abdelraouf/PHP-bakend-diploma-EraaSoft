@props(['isActive' => false])

<a class="{{ $isActive ? 'bg-gray-900 text-white' : 'bg-gray-800 text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $isActive ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}

</a>
