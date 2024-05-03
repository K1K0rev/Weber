@vite('resources/css/lesson.css')

@extends('layouts.app')

@section('content')
    <span class="title">УРОКИ</span>

    <div class="container">
        <div class="lessons">
            @foreach ($lessons as $item)
                <a href="{{ route('lesson', ['course_id' => $item->course_id,'name' => $item->name]) }}">
                    <div class="lesson">
                        <span class="mini_title">УРОК {{ $count++ }}</span>
                        <span class="mini_title">{{ $item->name }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection



