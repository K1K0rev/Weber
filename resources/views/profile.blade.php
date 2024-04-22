@extends('layouts.app')
@vite('resources/css/profile.css')

@section('content')
    <div class="container">
        <span class="title">ЛИЧНЫЙ КАБИНЕТ</span>
        <div class="container_2">
            <span class="title_2">ПРОФИЛЬ</span>
            <div style="display: flex; justify-content: center;">
                <div class="info">
                    <img src="{{ asset('img/icon.svg') }}" alt="icon" class="icon_profile">
                    <div class="line"></div>
                    @foreach ($user_data as $item)
                        <div class="user_data">
                            <div class="data">
                                <span class="name_data">LOGIN: </span>
                                <span class="mini_title">{{ $item->login }}</span>
                            </div>
                            <div class="data">
                                <span class="name_data">EMAIL: </span>
                                <span class="mini_title">{{ $item->email }}</span>
                            </div>
                            <div class="data">
                                <span class="name_data">EXPERIENCE: </span>
                                <span class="mini_title">{{ $item->exp }} <span
                                        style="text-transform: lowercase;">exp</span></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{ route('edit_profile') }}" class="btn">РЕДАКТИРОВАТЬ</a>
        <div class="container_3">
            <span class="title_2">АКТИВНЫЕ КУРСЫ</span>
            @foreach ($courses as $course)
                @if ($course->course_status == 'active')
                    {{-- <a href="{{ route('lesson', ['course_id' => $course->id]) }}" class="course"> --}}
                    <a href="{{ route('lessons', ['course_id' => $item->id]) }}" class="course">
                        <div class="text">
                            <span class="title_course">ОСНОВЫ {{ $course->name }}</span>
                            <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->duration_training }} ДНЕЙ</span>
                        </div>
                    </a>
                @elseif ($course->course_status == 'in progress')
                @endif
            @endforeach
        </div>
    </div>
@endsection
