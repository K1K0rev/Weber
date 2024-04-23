    @vite('resources/css/auth.css')


<body>
    @extends('layouts.app')
    @section('content')
        <div class="auth">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">{{ $error }}</div>
                @endforeach
            @endif
            <form method="POST" class="form_auth">
                <div class="title">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                    <span class="text">РЕГИСТРАЦИЯ</span>
                </div>
                @csrf
                <div class="input_date">
                    <div class="line">
                        <input id="login" name="login" placeholder="LOGIN" value="{{ old('login') }}" required
                            autofocus>
                    </div>
                    <div class="line">
                        <input id="email" name="email" placeholder="EMAIL" value="{{ old('email') }}" required
                            autofocus>
                    </div>
                    <div class="line">
                        <input id="password" type="password" name="password" placeholder="PASSWORD" required>
                    </div>
                    <button type="submit" class="btn">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
