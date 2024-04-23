@vite('resources/css/catalog.css')

@extends('layouts.app')

@section('content')
    <div class="courses">
        <span class="title">КУРСЫ</span>
        <div class="block">
            @foreach ($course_type as $type)
                <span class="mini_title">{{ $type }}</span>
                @foreach ($courses as $item)
                    @if ($item->course_status !== 'active')
                        @if ($item['course_type'] == $type)
                            <a href="{{ route('show', ['id' => $item->id]) }}" class="course">
                                <div class="text">
                                    <span class="title_course">ОСНОВЫ {{ $item->name }}</span>
                                    <span class="mini_title_course">СРОК ОБУЧЕНИЯ: {{ $item->duration_training }} ДНЕЙ</span>
                                </div>
                            </a>
                        @endif
                    @endif
                @endforeach
            @endforeach
        @endsection
