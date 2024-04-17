@vite('resources/css/catalog.css')

@extends('layouts.app')

@section('content')
    <div class="courses">
        <span class="title">КУРСЫ</span>
        <div class="front">
            <span class="mini_title">FRONTEND</span>
            @foreach ($courses as $item)
                <a href="{{ route('lesson', ['course_id' => $item->id]) }}" class="course">
                    <div class="text">
                        <span class="title_course">ОСНОВЫ {{ $item->name }}</span>
                        <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $item->duration_training }} ДНЕЙ</span>
                    </div>
                </a>
            @endforeach
            <span class="mini_title">BACKEND</span>
            <div class="course">
                <div class="text">
                    <span class="title_course">ОСНОВЫ </span>
                    <span class="mini_title_course">СРОК ОБУЧЕНИЯ: ДНЕЙ</span>
                </div>
            </div>
        </div>
    </div>
@endsection
