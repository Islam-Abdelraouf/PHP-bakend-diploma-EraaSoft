{{-- NAVBAR HTML SECTION --}}

{{-- NAV BAR SECTION --}}


<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="{{ asset('front/images/logo/logo2.jpg') }}" alt="Your Company" class="size-14 rounded-full" />
                </div>
                {{-- NAV MENU --}}
                @include('layouts.nav-links')
            </div>
        </div>
    </div>
</nav>
