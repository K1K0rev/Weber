@vite('resources/css/edit_profile.css')

@extends('layouts.app')

@section('content')
    <div class="container">
        <span class="title">ИЗМЕНЕНИЕ ЛИЧНЫХ ДАННЫХ</span>
        <form method="POST" action="{{ route('update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="data_input">
                <label for="nickname" class="data">NICKNAME:</label>
                <input type="text" id="nickname" name="nickname">
            </div>
            <div class="data_input">
                <label for="email" class="data">EMAIL:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="data_input">
                <label for="password" class="data">PASSWORD:</label>
                <input type="text" id="password" name="password">
            </div>
            <button type="submit">ИЗМЕНИТЬ ДАННЫЕ</button>
        </form>
    </div>
@endsection
