@vite('resources/css/admin.css')

@extends('layouts.app')

@section('content')

<span class="title">Добавление курса</span>
<form method="POST" action="{{ route('store_course') }}">
    @csrf
    <div>
        <label for="name">Название курса:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="course_type">Напрвление курса:</label>
        <input type="text" id="course_type" name="course_type" required>
    </div>
    <div>
        <label for="start_date">Дата начала:</label>
        <input type="date" id="start_date" name="start_date" required>
    </div>
    <div>
        <label for="end_date">Дата окончания:</label>
        <input type="date" id="end_date" name="end_date" required>
    </div>
    <button type="submit">Добавить курс</button>
</form>

<span class="title">Добавление урока</span>
<form method="POST" action="{{ route('store_lesson') }}">
    @csrf
    <div>
        <label for="name">Название урока:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="lesson_text">Текст урока:</label>
        <input type="text" id="lesson_text" name="lesson_text" required>
    </div>
    <div>
        <label for="lesson_img">Изображения:</label>
        <input type="file" id="lesson_img" name="lesson_img">
    </div>
    <div>
        <label for="course_id">Номер курса:</label>
        <input type="number" id="course_id" name="course_id" required>
    </div>
    <button type="submit">Добавить урок</button>
</form>
@endsection

