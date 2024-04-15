<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    @vite('resources/css/auth.css')
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="auth">
            <form method="POST" action="{{ route('login') }}" class="form_auth">
                <div class="title">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                    <span class="text">АВТОРИЗАЦИЯ</span>
                </div>
                @csrf
                <div class="input_date">
                    <div class="line">
                        <input id="login" name="login" placeholder="LOGIN" value="{{ old('login') }}" required autofocus>
                    </div>
                    <div class="line">
                        <input id="password" type="password" name="password" placeholder="PASSWORD" required>
                    </div>
                    <button type="submit" class="btn">Войти</button>
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
