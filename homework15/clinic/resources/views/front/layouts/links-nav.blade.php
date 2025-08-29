{{-- NAV BAR LINKS SECTION --}}


<div class="d-flex justify-content-center mx-2 flex-wrap gap-3 align-middle" role="group">
    <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ url('/') }}">Home</a>
    <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ url('/majors') }}">majors</a>
    <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ url('/doctors') }}">Doctors</a>
    <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ url('/history') }}">History</a>
    <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ url('/contact') }}">Contact Us</a>







    @guest
        <a type="button" class="btn btn-outline-light navigation--button flex" href="{{ route('auth.login') }}">login</a>
    @endguest


    {{-- @if (auth()->user())
        <form action="{{ route('auth.logout') }}" method="POST" class="flex">
            @csrf
            <button type="submit" value="logout" class="btn btn-outline-light navigation--button text-white">
                logout
            </button>
        </form>
        <div class="flex" role="group">
            <img src="{{ asset('front/images/users/' . auth()->user()?->image) }}" alt="{{ auth()->user()?->name }}"
                style="width: 75px;" class="rounded-circle">
        </div>
    @endif --}}


    @auth('web')
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" value="logout" class="btn btn-outline-light navigation--button text-white">
                User logout
            </button>
        </form>
    @endauth


    @auth('admin')
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" value="logout" class="btn btn-outline-light navigation--button text-white">
                Admin logout
            </button>
        </form>
    @endauth


</div>
<div class="d-flex justify-content-center flex-wrap gap-3" role="group">
    <img src="{{ asset('front/images/users/' . auth()->user()?->image) }}" alt="{{ auth()->user()?->name }}"
        style="width: 75px;" class="rounded-circle">
</div>
