@vite('resources/css/edit_profile.css')

@extends('layouts.app')

@section('content')
    <span class="title">ИЗМЕНЕНИЕ ЛИЧНЫХ ДАННЫХ</span>
    <div class="container">
        <form method="POST" action="{{ route('update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="data_input">
                <label for="nickname">NICKNAME:</label>
                <input type="text" id="nickname" name="nickname">
            </div>
            <div class="data_input">
                <label for="icon">ICON:</label>
                <input type="file" id="icon" name="icon">
            </div>
            <div class="data_input">
                <label for="email">EMAIL:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="data_input">
                <label for="password">PASSWORD:</label>
                <input type="text" id="password" name="password">
            </div>
            <button type="submit">ИЗМЕНИТЬ ДАННЫЕ</button>
        </form>
    </div>
@endsection
