@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endsection

@section('title', '404 Not Found')

@section('content')
    @include('layouts.header')
    <img src="{{asset('404.svg')}}" alt="" srcset="">
    {{-- @include('layouts.footer') --}}
@endsection
