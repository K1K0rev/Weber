@vite('resources/css/admin.css')

@extends('layouts.app')

@section('content')
    <span class="title">Добавление курса</span>
    <div class="container">
        <form method="POST" action="{{ route('store_course') }}">
            @csrf
            <div class="data_input">
                <label for="name" class="data">Название курса:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="data_input">
                <label for="course_type" class="data">Напрвление курса:</label>
                <select id="course_type" name="course_type" required>
                        <option>frontend</option>
                        <option>backend</option>
                </select>
            </div>
            <div class="data_input">
                <label for="short_description" class="data">Краткое описание курса:</label>
                <textarea type="text" id="short_description" name="short_description" required></textarea>
            </div>
            <div class="data_input">
                <label for="duration" class="data">Продолжительность:</label>
                <input type="number" id="duration" name="duration" required>
            </div>
            <button type="submit">Добавить курс</button>
        </form>
    </div>
    <span class="title">Добавление урока</span>
    <form method="POST" action="{{ route('store_lesson') }}">
        @csrf
        <div class="data_input">
            <label for="name" class="data">Название урока:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="data_input">
            <label for="course_id" class="data">Номер курса:</label>
            <input type="number" id="course_id" name="course_id" required>
        </div>
        <button type="submit">Добавить урок</button>
    </form>

    <span class="title">Удаление курса</span>

    <div class="name_field">
        <span>Имя</span>
        <span>Тип</span>
        <span>Дата начала</span>
        <span>Дата завершения</span>
    </div>
    <div class="courses">
        @foreach ($courses as $course)
        <form action="{{ route('destroy_course', ['id' => $course->id]) }}" method="POST">
                    @csrf
                    <div class="course">
                        <span>{{ $course->name }}</span>
                        <span>{{ $course->course_type }}</span>
                        <span>{{ $course->duration}}</span>
                        <button type="submit">
                            <img src="{{ asset('img/cross.png') }}" alt="cross" class="cross">
                        </button>

                    </div>
                </form>
        @endforeach
    </div>

    <span class="title">Удаление урока</span>

    <div class="name_field">
        <span>Имя</span>
        <span>Номер курса</span>
    </div>
    <div class="courses">
        @foreach ($lessons as $lesson)
        <form action="{{ route('destroy_lesson', ['id' => $lesson->id]) }}" method="POST">
                    @csrf
                    <div class="lesson">
                        <span>{{ $lesson->name }}</span>
                        <span>{{ $lesson->course_id }}</span>
                        <button type="submit">
                            <img src="{{ asset('img/cross.png') }}" alt="cross" class="cross">
                        </button>

                    </div>
                </form>
        @endforeach
    </div>
@endsection
