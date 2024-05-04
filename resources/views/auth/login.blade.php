
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    @vite('resources/css/auth.css')


<body>
    @extends('layouts.app')
    @section('content')
        <div class="auth">
            <form method="POST" class="form_auth">
                <div class="title">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                    <span class="text">АВТОРИЗАЦИЯ</span>
                </div>
                @csrf
                <div class="input_date">
                    <div class="line">
                        <label for="login"></label>
                        <input id="login" name="login" placeholder="LOGIN" value="{{ old('login') }}" required autofocus>
                    </div>
                    <div class="line">
                        <label for="password"></label>
                        <input id="password" type="password" name="password" placeholder="PASSWORD" required>
                    </div>
                    <button type="submit" class="btn">Войти</button>
                </div>
            </form>
        </div>
    @endsection
</body>

