@extends('layouts.app')

@section('content')

        <img src="{{ asset('img/block1.png') }}" alt="" class="block1">
        <img src="{{ asset('img/block1_m2.svg') }}" alt="" class="block1_m">

        <div class="block2">
            <img src="{{ asset('img/block2.png') }}" alt="" class="block2_img">
        </div>


        <img src="{{ asset('img/block3.png') }}" alt="" class="block3">

        <div class="block4">
            <img src="{{ asset('img/block4.png') }}" alt="" class="block4_img">
        </div>

        <div class="block5">
            <img src="{{ asset('img/block5.png') }}" alt="" class="block5_img">
        </div>

        <div class="block6">
            <img src="{{ asset('img/block6.png') }}" alt="" class="block6_img">
        </div>

        <div class="block7">
            <img src="{{ asset('img/block7.png') }}" alt="" class="block7_img">
        </div>

@endsection
