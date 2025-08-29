<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="navbar-nav pl-2">
        <ol class="breadcrumb m-0 bg-white p-0">
            {{-- <li class="breadcrumb-item"><a href="{{ Route::currentRouteName() }}">{{ Route::currentRouteName() }}</a></li>
            <li class="breadcrumb-item active">Create</li> --}}
            @foreach (getBreadcrumbs() as $label => $url)
                @if (is_string($label))
                    <li class="breadcrumb-item"><a href="{{ $url }}">{{ $label }}</a></li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $url }}</li>
                @endif
            @endforeach
        </ol>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                <img src="{{ asset('front/images/users/' . auth('admin')->user()?->image) }}"
                    class='img-circle elevation-2' width="40" height="40" alt="">
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                <h4 class="h4 mb-0"><strong>{{ auth('admin')->user()?->name }}</strong></h4>
                <div class="mb-3">{{ auth('admin')->user()?->email }}</div>
                <div class="dropdown-divider"></div>
                {{-- Admin Profile --}}
                <a href="{{ route('admin.profile.show') }}" class="dropdown-item">
                    <i class="fas fa-user-md mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                {{-- Logout button --}}
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                    {{-- <a href="#" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a> --}}
                </form>
            </div>
        </li>
    </ul>
</nav>
