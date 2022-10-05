@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection

@section('title', '404 Not Found')

@section('content')
    @include('layouts.header')
    <div class="text-center d404">
        <img class="mx-auto d-block w-45" src="{{asset('img/404.svg')}}" alt="" srcset="">
        <h1 class="fw-bolder mt-4">Page Not Found :(</h1>
        <p class="text-secondary">it appears the page you were looking for couldn't be found.</p>
        <button class="btn">Go Back to Home</button>
    </div>
    {{-- @include('layouts.footer') --}}
@endsection
