{{-- MASTER HTML PAGE --}}


{{-- HEADER SECTION --}}
@include('layouts.header')

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{-- Contents section --}}
        @yield('content', '')
    </div>
</main>
</div>

{{-- FOOTER SECTION --}}
@include('layouts.footer')
