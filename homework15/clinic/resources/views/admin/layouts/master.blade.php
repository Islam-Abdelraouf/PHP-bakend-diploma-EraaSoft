<!DOCTYPE html>
<html lang="en">

    @include('admin.layouts.header')

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <!-- Navbar -->
            @include('admin.layouts.navbar')

            <!-- Sidebar -->
            @include('admin.layouts.sidebar')

            <!-- Content -->
            {{-- @include('admin.layouts.content') --}}
            @yield('content', '')

            <!-- Footer -->
            @include('admin.layouts.footer')

        </div>

        <!-- Scripts -->
        @include('admin.layouts.script')
    </body>

</html>
