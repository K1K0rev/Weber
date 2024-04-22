@extends('layouts.app')

@section('content')
    <span class="title">ИЗМЕНЕНИЕ ЛИЧНЫХ ДАННЫХ</span>
    <form method="POST" action="{{ route('store_data') }}">
        @csrf
        <div>
            <label for="nickname">NICKNAME:</label>
            <input type="text" id="nickname" name="nickname">
        </div>
        <div>
            <label for="icon">ICON:</label>
            <input type="text" id="icon" name="icon">
        </div>
        <div>
            <label for="email">EMAIL:</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="password">PASSWORD:</label>
            <input type="text" id="password" name="password">
        </div>
        <button type="submit">ИЗМЕНИТЬ ДАННЫЕ</button>
    </form>
@endsection
