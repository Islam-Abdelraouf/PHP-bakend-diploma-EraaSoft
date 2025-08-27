{{-- NAV BAR LINKS SECTION --}}


<div class="d-flex justify-content-center flex-wrap gap-3" role="group">
    <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/') }}">Home</a>
    <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/majors') }}">majors</a>
    <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/doctors') }}">Doctors</a>
    <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/history') }}">History</a>
    <a type="button" class="btn btn-outline-light navigation--button" href="{{ url('/contact') }}">Contact Us</a>
    {{-- <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('auth.login') }}">login</a> --}}
    @guest
        <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('auth.login') }}">login</a>
    @endguest
    @auth('web')
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" value="logout" class="btn btn-outline-light navigation--button text-white">
                logout
            </button>
        </form>
    @endauth
    @auth('admin')
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" value="logout" class="btn btn-outline-light navigation--button text-white">
                logout
            </button>
        </form>
    @endauth




</div>
