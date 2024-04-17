@vite('resources/css/app.css')

@auth

    <header>
        @if (Route::currentRouteName() == 'main')
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'>
        @else
            <a href="{{ route('main') }}"><img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'></a>
        @endif
        <div class="link">
            <a href="{{ route('catalog') }}" class="">КАТАЛОГ КУРСОВ</a>
            <a href="{{ route('support') }}" class="">ПОДДЕРЖКА</a>
            <a href="#" class="">О НАС</a>
        </div>
        <div class="autorize">
            <a href="{{ route('logout') }}">Выход</a>
        </div>
    </header>
@else
    <header>
        @if (Route::currentRouteName() == 'main')
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'>
        @else
            <a href="{{ route('main') }}"><img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'></a>
        @endif
        <div class="autorize">
            @if (Route::currentRouteName() == 'login')
                <a href="{{ route('reg') }}" class="btn">Регистрация</a>
            @elseif (Route::currentRouteName() == 'reg')
                <a href="{{ route('login') }}" class="btn">Авторизация</a>
            @else
                <a href="{{ route('login') }}" class="btn">Авторизация</a>
                <a href="{{ route('reg') }}" class="btn">Регистрация</a>
            @endif
        </div>

    </header>
@endauth
