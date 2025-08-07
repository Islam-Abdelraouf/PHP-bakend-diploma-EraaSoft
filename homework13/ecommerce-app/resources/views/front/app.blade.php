<!doctype html>
<html lang="en" class="h-full bg-gray-100">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce App</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>


    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="{{asset('images/logo2.jpg')}}"
                                    alt="Your Company" class="size-14 rounded-full" />
                            </div>
                            {{-- NAV MENU --}}
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <!-- Home Link -->
                                    <x-nav-link href="/" isActive="{{ request()->is('/') }}">
                                        Home
                                    </x-nav-link>
                                    <!-- Products Link -->
                                    <x-nav-link href="/products" isActive="{{ request()->is('products') }}">
                                        Products
                                    </x-nav-link>
                                    <!-- Contact Link -->
                                    <x-nav-link href="/contact" isActive="{{ request()->is('contact') }}">
                                        Contact
                                    </x-nav-link>
                                    <!-- About Link -->
                                    <x-nav-link href="/about" isActive="{{ request()->is('about') }}">
                                        About
                                    </x-nav-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1
                        class="my-4 text-center text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        <span class="bg-gradient-to-r from-sky-400 to-emerald-600 bg-clip-text text-transparent">
                            @yield('heading', 'Default page heading')
                        </span>
                    </h1>
                </div>
            </header>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <!-- Your content -->
                    @yield('content', '')
                </div>
            </main>
        </div>

        <!-- Add Alpine.js -->
        <script src="https://unpkg.com/alpinejs" defer></script>
        </script>
    </body>

</html>
