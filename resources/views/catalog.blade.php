@vite('resources/css/catalog.css')

@extends('layouts.app')

@section('content')
    <div class="courses">
        <span class="title">КУРСЫ</span>
        <div class="block">

                @foreach ($courses as $course)
                    <a href="{{ route('show', ['id' => $course->id]) }}" class="course_link">
                        <div class="text">
                            <span class="title_course">ОСНОВЫ {{ $course->name }}</span>
                            <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $course->duration_training }}ДНЕЙ</span>
                        </div>
                        <div class="type">
                            <span class="title_course">{{ $course->course_type }}</span>
                        </div>
                    </a>
                @endforeach

        @endsection
