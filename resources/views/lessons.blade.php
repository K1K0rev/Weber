@vite('resources/css/lesson.css')

@extends('layouts.app')

@section('content')
    <span class="title">УРОКИ</span>

        <container class="grid_lessons">
            @foreach ($lessons as $item)
            <a href="{{ route('lesson', ['course_id' => $item->course_id, 'id' => $item->id]) }}" class="lessons">
                    <div class="lesson">
                        <span class="mini_title">УРОК {{ $count++ }}</span>
                        <span class="mini_title">{{ $item->name }}</span>
                    </div>
                </a>
                @endforeach
        </container>

@endsection
