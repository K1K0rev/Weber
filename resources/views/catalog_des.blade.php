@extends('layouts.app')

@vite('resources/css/catalog_des.css')

@section('content')
<span class="title">КРАТКОЕ ОПИСАНИЕ</span>

<div class="container">
    <span class="description">{{$course->short_description}}</span>
    <form method="POST" action="{{ route('description', ['id' => $course->id]) }}">
        @csrf
        <button class="btn_des" type="submit">ЗАПИСАТЬСЯ НА КУРС</button>
    </form>
</div>


@endsection

