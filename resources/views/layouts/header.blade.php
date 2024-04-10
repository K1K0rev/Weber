<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
{{-- @if (Route::has('login'))
    @auth --}}
        <header>
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class='logo'>
            <div class="link">
                <a href="#" class="">КАТАЛОГ КУРСОВ</a>
                <a href="#" class="">ПОДДЕРЖКА</a>
                <a href="#" class="">О НАС</a>
            </div>
            <div class="autorize">
                <a href="{{ route('login') }}" class="btn">Авторизация</a>
                <a href="{{ route('reg') }}" class="btn">Регистрация</a>
            </div>
            {{-- <img src="{{ asset('img/icon.svg') }}" alt="icon" class='icon'> --}}
            {{-- <a href="{{ route('edit') }}" style="width: 100px">Edit profile</a>
            <a href="{{ route('logout') }}">Exit</a> --}}

        </header>
    {{-- @elseif (Route::currentRouteName() == 'main')
        <header>

            <div class="autorize">
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('reg') }}">Reg</a>
            </div>

        </header>
    @else
        <header>

            <div class="autorize">
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('reg') }}">Reg</a>
            </div>

            <div class="link">
                <a href="{{ route('main') }}">Home</a>
            </div>

        </header>

    @endauth
@endif --}}
