@include('layouts.header')

<main>
    @yield('content')
</main>
@auth
    @if (Auth::user()->admin_rights == 1)
        @if (Route::currentRouteName() !== 'admin')
            <a href="{{ url('/admin') }}" class="admin_btn">Admin Panel</a>
        @endif
    @endif
@endauth
@include('layouts.footer')
