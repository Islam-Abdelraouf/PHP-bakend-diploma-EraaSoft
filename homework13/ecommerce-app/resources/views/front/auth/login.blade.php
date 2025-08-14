{{-- LOGIN PAGE --}}


<!doctype html>
<html lang="en" class="h-full bg-gray-100">

    {{-- HEADER SECTION --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce App Login</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>

    {{-- LOGIN FORM SECTION --}}
    <div class="flex h-screen items-center justify-center bg-gray-100">

        <form class="w-4/5 max-w-md rounded border bg-white p-5 shadow-lg" action="{{ route('login.submit') }}"
            method="POST">

            {{-- Title Section --}}
            <x-section-title mainTitle="false">
                Login
            </x-section-title>

            {{-- CSRF TOKEN --}}
            @csrf

            {{-- Success Message Section --}}
            @if (session('success') != null)
                @include('layouts.alert-success')
            @endif

            {{-- Error Message Section --}}
            {{-- User incorrect credentials --}}
            @if ($errors->any())
                @include('layouts.alert-error')
            @endif

            {{-- FORM Elements Section --}}
            <div class="mb-6 grid gap-6 p-5 md:grid-cols-1"">
                <div>{{-- email --}}
                    <label for="email"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email"key:
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="m.engineer.islam@gmail.com" value="{{ old('email') ?? '' }}" />
                </div>
                <div>{{-- password --}}
                    <label for="password"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" />
                </div>
                <div class="full-width mb-3">{{-- Submit Button --}}
                    <button
                        class="full-width group relative me-2 mt-2 inline-flex items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-green-400 to-blue-600 p-0.5 text-sm font-medium text-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-green-200 group-hover:from-green-400 group-hover:to-blue-600 dark:text-white dark:focus:ring-green-800"
                        style="width: 100%;" value="send">
                        <span
                            class="relative rounded-md bg-white px-5 py-2.5 transition-all duration-75 ease-in group-hover:bg-transparent dark:bg-gray-900 group-hover:dark:bg-transparent"
                            style="width: 100%;">
                            Login
                        </span>
                    </button>
                    <div>
                        <p class="mt-2 text-center font-medium">Not registered yet? <a href="{{ route('auth.register') }}" class=" text-blue-600 dark:text-blue-500 hover:underline">Register</a></p>
                    </div>
                </div>
            </div>
        </form>

    </div>

    {{-- Script section --}}

    {{-- Tailwind JS --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

    </body>

</html>
