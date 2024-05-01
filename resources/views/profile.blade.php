@extends('layouts.app')
@vite('resources/css/profile.css')

@section('content')
    <div class="container">
        <span class="title">ЛИЧНЫЙ КАБИНЕТ</span>
        <div class="container_2">
            <span class="title_2">ПРОФИЛЬ</span>
            <div class="user">
                <div class="info">

                    <img src="{{ asset('img/rang/' . $user_data->rank . '.png') }}" alt="icon" class="icon_profile">
                    <div class="line"></div>
                    <div class="user_data">
                        <div class="data">
                            <span class="name_data">NICKNAME: </span>
                            @if ($user_data->nickname == '')
                                <span class="mini_title">ПОЛЬЗОВАТЕЛЬ.{{ $user_data->id }}</span>
                            @else
                                <span class="mini_title">{{ $user_data->nickname }}</span>
                            @endif
                        </div>
                        <div class="data">
                            <span class="name_data">RANK: </span>
                            <span class="mini_title">{{ $user_data->rank }}</span>
                        </div>
                        <div class="data">
                            <span class="name_data">EXPERIENCE: </span>
                            <span class="mini_title">{{ $user_data->exp }} <span
                                    style="text-transform: lowercase;">exp</span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="{{ route('edit_profile') }}" class="profile_btn">РЕДАКТИРОВАТЬ</a>
        <div class="container_3">

            @foreach ($user_courses as $course_status => $user_course)
                @if ($course_status == 'processing')
                    <span class="title_2">Активные курсы</span>
                @else
                    <span class="title_2">Завершенные курсы</span>
                @endif
                @foreach ($user_course as $course)
                    @if ($course_status == 'processing')
                        <a href="{{ route('lessons', ['course_id' => $course->course->id]) }}" class="course">
                            <div class="text">
                                <span class="title_course">ОСНОВЫ {{ $course->course->name }}</span>
                                <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->course->duration_training }}
                                    ДНЕЙ</span>
                            </div>
                            <div class="type">
                                <span class="title_course">{{ $course->course->course_type }}</span>
                            </div>
                        </a>
                    @else
                        <div class="course">
                            <div class="text">
                                <span class="title_course">ОСНОВЫ {{ $course->course->name }}</span>
                                <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->course->duration_training }}
                                    ДНЕЙ</span>
                            </div>
                            <div class="type">
                                <span class="title_course">{{ $course->course->course_type }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach


        </div>
    </div>
@endsection
