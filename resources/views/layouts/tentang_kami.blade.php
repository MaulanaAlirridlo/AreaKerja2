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
                    <img src="{{asset('img/jendela.svg')}}" alt="" class="img-rounded" style="margin-left: 100px; margin-top: 100px; padding-bottom: 20px;">
                </div>
                <div class="row">
                    <img src="{{asset('img/tangga.svg')}}" alt="" class="img-rounded" style="margin-left: 100px;">
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-start" style="margin-top: 50px; margin-left: 50px;">
                <img src="{{asset('img/lepitentang.svg')}}" alt="" class="img-rounded" style="margin-top: 50px;">
            </div>
            <div class="col-lg-6 text-center" style="margin-left: -50px;">
                <h1 class="heading text-black">Tentang Kami</h1>
                <p class="subheadingsatu" style="text-align: right;">Areakerja adalah perusahaan berbasis teknologi informasi yang berpusat di Yogyakarta. Perusahaan ini berfokus pada platform untuk mencari lowongan kerja di Daerah Istimewa Yogyakarta</p>
                <img src="{{asset('img/logo.png')}}" alt="" class="img-fluid d-none d-lg-block" style="width: 500px; right: -100px; top: 50px; opacity: 0.4;">
            </div>
        </div>
    </div>
</section>

<section class="tentang" id="home">
    <div class="container" style="padding-top: 11rem;">
        <div class="row">
            <div class="row">
                <h1 class="heading text-black" style="text-align: center;">Yogyakarta</h1>
                <p class="subheadingsatu" style="text-align: center; width: 750px; margin-left: 280px; padding-top: 20px;">
                    DIY sebagai salah satu wilayah prestisius di Indonesia yang menyandang sebagai budaya dan pelajar
                    membuat arus ekonomi dan bisnis di wilayah ini cukup besar. Banyak sekali perusahaan besar, menengah, dan kecil
                    yang berdiri di wilayah DIY dan terus mengembangkan bisnisnya, Hal ini menuntut banyak dibukanya lowongan
                    pekerjaan di DIY.
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-start" style="margin-top: -20px;">
                <div class="row">
                    <img src="{{asset('img/tentang1.svg')}}" alt="" class="img-rounded" style="margin-left: 100px; margin-top: 100px; padding-bottom: 20px; width: 150px;">
                </div>
                <div class="row-lg-6 text-center text-lg-start" style="margin-left: 160px;">
                    <h1 class="heading text-black" style="font-size: 20px; text-align: left;">Arus Lowongan</h1>
                    <p class="subheadingsatu" style="text-align: left;">
                    Banyaknya arus lowongan pekerjaan di Yogyakarta baik dari perusahaan besar, menengah, dan kecil 
                    menuntut diperlukannya sebuah media yang berfokus untuk menampung informasi lowongan pekerjaan 
                    yang ada di Yogyakarta.
                    </p>
                </div>

            </div>
            <div class="col-lg-6 text-center text-lg-start" style="margin-top: -20px;">
                <div class="row">
                    <img src="{{asset('img/tentang2.svg')}}" alt="" class="img-rounded" style="margin-left: 100px; margin-top: 100px; padding-bottom: 20px; width: 150px;">
                </div>
                <div class="row-lg-6 text-center text-lg-start" style="margin-left: 160px;">
                    <h1 class="heading text-black" style="font-size: 20px; text-align: left;">Area Kerja</h1>
                    <p class="subheadingsatu" style="text-align: left;">
                    Untuk itu Areakerja hadir sebagai platform untuk membantu 
                    perusahaan mendapatkan kandidat terbaiknya, serta membantu para pencari kerja 
                    untuk menemukan pekerjaan yanng diinginkan di DIY
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layouts.footer')
@endsection