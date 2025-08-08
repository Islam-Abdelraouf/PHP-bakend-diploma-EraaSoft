{{-- HEADER HTML SECTION --}}


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
            {{-- navbar section --}}
            @include('layouts.nav-bar')
            {{-- page title --}}
            @yield('heading')
