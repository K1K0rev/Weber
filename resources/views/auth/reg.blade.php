@vite('resources/css/auth.css')

@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="position_error">
            <div class="errors">
                @foreach ($errors->all() as $error)
                    @if ($error == 'The login has already been taken.')
                        <span class="error">Логин уже существует введите другой</span>
                    @elseif ($error == 'The email has already been taken.')
                        <span class="error">Email уже существует введите другой</span>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
    <div class="auth">

        <form method="POST" class="form_auth" id="registrationForm">
            <div class="title">
                <img src="{{ asset('img/logo.svg') }}" alt="logo">
                <span class="text">РЕГИСТРАЦИЯ</span>
            </div>
            @csrf
            <div class="input_date">
                <div class="line">
                    <input id="login" name="login" placeholder="LOGIN" required autofocus>
                </div>
                <div class="line">
                    <input id="email" name="email" placeholder="EMAIL" required autofocus>
                </div>
                <div>
                    <div class="line">
                        <input id="password" type="password" name="password" placeholder="PASSWORD" required>
                    </div>
                    <span class="input_description">Минимум 8 символов</span>
                </div>
                <button type="submit" class="btn">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </div>
        </form>
    </div>
    {{-- <script src="{{ mix('resources/js/error.js') }}"></script> --}}
@endsection
