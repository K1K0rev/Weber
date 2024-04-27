@vite('resources/css/lesson.css')

@extends('layouts.app')

@foreach ($lesson as $item)

@extends('lesson.' . $item->name )

@endforeach





