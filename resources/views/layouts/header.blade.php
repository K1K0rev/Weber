@vite('resources/css/app.css')

@auth

    <header>
        @if (Route::currentRouteName() == 'main')
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'>
        @else
            <a href="{{ route('main') }}"><img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'></a>
        @endif
        <div class="link">
            <a href="{{ route('catalog') }}" class="catalog">КАТАЛОГ КУРСОВ</a>
        </div>
        <div class="autorize">
            <div class="header_icon" id="icon"><img src="{{ asset('img/rang/' . $user->rank . '.png') }}"
                    alt="" class="icon">
            </div>
        </div>
    </header>

    <div class="burger" id="burger">
        <a href="{{ route('profile') }}">ПРОФИЛЬ</a>
        <a href="">ПОДДЕРЖКА</a>
        <a href="{{ route('logout') }}">ВЫХОД</a>
    </div>
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

<script src="{{ mix('resources/js/burger.js') }}"></script>
