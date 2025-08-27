{{-- MASTER LAYOUT PAGE --}}


{{-- Header section --}}
@include('front.layouts.header')

<body>

    <div class="page-wrapper">

        {{-- Nav bar section --}}
        @include('front.layouts.nav-bar')

        {{-- Contents section --}}
        @yield('content')

    </div>

    {{-- Footer section --}}
    @include('front.layouts.footer')

    {{-- Scripts section --}}
    @include('front.layouts.scripts')
</body>

</html>
