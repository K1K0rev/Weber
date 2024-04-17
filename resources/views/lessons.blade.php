@vite('resources/css/lesson.css')

@extends('layouts.app')

@section('content')
    <span class="title">УРОКИ</span>
    <a href="" class="lessons">
        @foreach ($lessons as $item)
            <div class="lesson">
                <span class="mini_title">УРОК {{ $count++ }}</span>
                <span class="mini_title">{{ $item->name }}</span>
            </div>
        @endforeach
    </a>
@endsection
