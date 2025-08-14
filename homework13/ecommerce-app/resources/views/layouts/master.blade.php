{{-- MASTER HTML PAGE --}}


{{-- HEADER SECTION --}}
@include('layouts.header')

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 " style="padding-left: 5%; padding-right: 5%;">
        {{-- Contents section --}}
        @yield('content', '')
    </div>
</main>
</div>

{{-- FOOTER SECTION --}}
@include('layouts.footer')
