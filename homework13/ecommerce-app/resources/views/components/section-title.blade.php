@props(['mainTitle' => "false"])

<header class="bg-white shadow-sm" {{$attributes}}>
    <div class="{{ ($mainTitle == 'true')? 'mt-0' : 'mt-5' }} mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="my-4 text-center text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            <span class="bg-gradient-to-r from-sky-400 to-emerald-600 bg-clip-text text-transparent">
                {{-- @yield('title', 'Default Title') --}}
                {{ $slot }}
            </span>
        </h1>
    </div>
</header>
