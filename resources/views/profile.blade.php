@extends('layouts.app')
@vite('resources/css/profile.css')

@section('content')
    <div class="container">
        <span class="title">ЛИЧНЫЙ КАБИНЕТ</span>
        <div class="container_2">
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
                </div>
            @endforeach
        </div>
        <span class="title">АКТИВНЫЕ КУРСЫ</span>
        @foreach ($courses as $course)
            <a href="{{ route('lesson', ['course_id' => $course->id]) }}" class="course">
                <div class="text">
                    <span class="title_course">ОСНОВЫ {{ $course->name }}</span>
                    <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->duration_training }} ДНЕЙ</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection
