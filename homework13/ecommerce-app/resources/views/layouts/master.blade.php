{{-- MASTER HTML PAGE --}}


{{-- HEADER SECTION --}}
@include('layouts.header')

<main>
    <div class=" mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" style="padding-left: 7%; padding-right: 7%;">
        {{-- Contents section --}}
        @yield('content', '')
    </div>
</main>
</div>

{{-- FOOTER SECTION --}}
@include('layouts.footer')
