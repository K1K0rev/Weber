@include('layouts.header')

<main>
    @yield('content')
</main>
@auth
    @if (Auth::user()->admin_rights == 1)
        @if (Route::currentRouteName() !== 'admin')
            <div class="admin">
                <div class="position">
                    <a href="{{ url('/admin') }}" class="admin_btn">Панель админа</a>
                </div>
            </div>
        @endif
    @endif
@endauth
@include('layouts.footer')
