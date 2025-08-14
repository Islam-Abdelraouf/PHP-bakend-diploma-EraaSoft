{{-- NAV LINKS SECTION --}}


<!-- Left side: Logo + Links -->
<div class="flex items-center">
    <div class="ml-10 flex items-center space-x-4">
        <div class="">
            <img src="{{ asset('front/images/logo/logo2.jpg') }}" alt="Your Company" class="size-14 rounded-full" />
        </div>

        @auth

            @if (auth()->user()?->role == 'admin')
                {{-- ADMIN LINKS --}}
                @include('layouts.nav.links-admin')
            @else
                {{-- PUBLIC LINKS --}}
                @include('layouts.nav.links-public')
                {{-- USERS LINKS --}}
                @include('layouts.nav.links-users')
            @endif
        @else
            {{-- PUBLIC HOME --}}
            @include('layouts.nav.links-public')
        @endauth
    </div>
</div>

<!-- Right side: Auth buttons -->
<div class="ml-4 flex items-center md:ml-6">
    {{-- <div class="flex items-center md:ml-6"> --}}

    @auth
        {{-- LOGOUT section --}}

        {{-- User logo --}}
        <div>
            <i class="fa-solid fa-user fa-2x" style="color: #ffffff;"></i>
        </div>

        {{-- User role && name --}}
        @php
            $role = auth()->user()?->role;
            $name = Auth()->user()?->name;
        @endphp
        <div class="mr-3 flex flex-col text-sm text-white">
            <p><strong>{{ $role }}</strong></p>
            <p>{{ Auth()->user()->name }}</p> {{-- template text: Admin: Islam --}}
        </div>

        {{-- LOGOUT button --}}
        <form action="{{ route('auth.logout') }}" method="POST" class="mx-3 my-0 py-0">
            @csrf
            <input type="submit"
                class="rounded-lg bg-gradient-to-r from-red-400 via-red-500 to-red-600 px-2 py-2 text-center text-sm font-medium text-white shadow-lg shadow-red-500/50 hover:bg-gradient-to-br focus:outline-none focus:ring-4 focus:ring-red-300 dark:shadow-lg dark:shadow-red-800/80 dark:focus:ring-red-800"
                value="Logout">
        </form>
    @else
        {{-- LOGIN Link --}}
        <a href="{{ route('auth.login') }}"
            class="{{ request()->is('login') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
            Login
        </a>
        {{-- REGISTER Link --}}
        <a href="{{ route('auth.register') }}"
            class="{{ request()->is('register') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
            Register
        </a>
    @endauth

</div>
