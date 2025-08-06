<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce App</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>

    <body>

        <body class="h-full">
            <div class="min-h-full">
                <nav class="bg-gray-800">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 items-center justify-between">
                            <div class="flex items-center">
                                <div class="shrink-0">
                                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                        alt="Your Company" class="size-8" />
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
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                            @yield('heading', 'Default page heading')
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
            </script>
        </body>

</html>
