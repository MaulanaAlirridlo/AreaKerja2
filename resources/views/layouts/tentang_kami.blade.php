@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
@include('layouts.header')

<section class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-lg-start" style="margin-top: -200px;">
                <div class="row">
                    <img src="{{asset('img/jendela.svg')}}" alt="" class="img-fluid d-none d-lg-block" style="width: 250px; height: 400px; margin-left: 100px; ">
                </div>
                <div class="row">
                    <img src="{{asset('img/tangga.svg')}}" alt="" class="img-fluid d-none d-lg-block" style="width: 250px; margin-left: 100px;">
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-start" style="margin-top: 50px; margin-left: 50px;">
                <img src="{{asset('img/lepitentang.svg')}}" alt="" class="img-fluid d-none d-lg-block" style="width: 250px;">
            </div>
            <div class="col-lg-6 text-center" style="margin-left: -50px;">
                <p class="subheadingdua"> Tempat Mencari Kerja</p>
                <h1 class="heading text-black">Temukan Loker Jogja</h1>
                <h1 class="heading text-black">Terbaru Dengan Mudah</h1>
                <p class="subheadingsatu">Ayo Cari Lowongan Terbaru</p>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
@endsection