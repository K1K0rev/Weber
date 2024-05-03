@vite('resources/css/catalog.css')

@extends('layouts.app')

@section('content')
    <div class="courses">
        <span class="title">КУРСЫ</span>
        <div class="block">
            @if ($courses->isEmpty())
                <span class="mini_title">В ДАННЫЙ МОМЕНТ НЕТ ДОСТУПНЫХ КУРСОВ</span>
            @else
                @foreach ($courses as $course)
                    <a href="{{ route('show', ['id' => $course->id]) }}" class="course_link">
                        @if ($course->course_type == 'backend')
                            <img src="{{ asset('img/dot.svg') }}" alt="" class="status_icon">
                        @else
                            <img src="{{ asset('img/green_dot.svg') }}" alt="" class="status_icon_green">
                        @endif
                        <div class="text">
                            <span class="title_course">{{ $course->name }}</span>
                            <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->duration }} ДНЕЙ</span>
                        </div>
                        <div class="type">
                            @if ($course->course_type == 'backend')
                                <img src="{{ asset('img/back.svg') }}" alt="" class="type_img">
                            @elseif ($course->course_type == 'frontend')
                                <img src="{{ asset('img/front.svg') }}" alt="" class="type_img">
                            @endif
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection
