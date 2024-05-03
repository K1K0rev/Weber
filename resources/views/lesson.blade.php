@vite('resources/css/lesson.css')

@extends('layouts.app')


@foreach ($lesson as $item)

@extends('lesson.course_'. $item->course_id . '.'. $item->name )

@endforeach

