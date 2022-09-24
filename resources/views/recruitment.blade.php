@extends('layouts.master')

@section('css')

<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
@include('layouts.header')

<div class="container">
    <section>
        <div class="row mt-2">
            <p style="color: darkorange;">RECRUITMENT</p>
            <h2 class="fw-bold">Ayo Recrut Tim Kamu</h2>
            <h2 class="fw-bold">Lewat Area Kerja</h2>
            <div class="row mt-2">
                <div class="col-lg-2 col-md-12 mb-2 mb-lg-0">
                    <img src="{{asset('img/rekrut1.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <img src="{{asset('img/rekrut2.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{asset('img/rekrut3.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <img src="{{asset('img/rekrut4.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('img/rekrut5.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                    </div>
                    <div class="col-6">
                        <h4 class="fw-bold">Flexible Hours</h4>
                        <p>We will equip your workplace at the expense of the company. You can order everything you need for your work.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('img/rekrut6.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
                    </div>
                    <div class="col-6">
                        <h4 class="fw-bold">Work And Travel</h4>
                        <p>If you are too tired you can distract yourself from thinking about working in the game room.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row mt-4">
            <h4 class="fw-bold">Recruitment</h4>
            <div class="col-10">
                <p class="m-0">These are the people who work every day to create</p>
                <p>great products that will help you in your work.</p>
            </div>
            <div class="col-2 justify-content-end">
                <a href="#" class="btn border" style="background-color:#FFffff;"> <i class="fa-solid fa-chevron-left"></i></a>
                <a href="#" class="btn ms-2 border" style="background-color:#FFffff;"><i class="fa-solid fa-chevron-right"></i></a>
            </div>

            <div class="row ms-1">
                <button type="button" class="btn border text-white" style="background-color: darkorange; width: 130px;">
                    <i class="fa-solid fa-circle-plus" style="color: white;"></i> Top Up Coin
                </button>
                <div class="card ms-3" style="width: 100px; height: 50px; background-color: #FFF7E4;">
                    <h6 class="fw-bold" style="margin-right: auto; margin-left: auto; margin-top: auto; margin-bottom: auto;">31 Coin</h6>
                </div>
            </div>
        </div>
        <div class="rekomendasi-lowongan">
            <div class="row mt-3 py-3">
                @for ($i = 1; $i <= 6; $i++) <div class="col-4">
                    <div class="wrapper shadow p-4 w-100 rounded m-auto overflow-hidden position-relative">
                        <div class="non-hover">
                            <div class="rec-link px-2">
                                <div class="row align-items-center mb-2">
                                    <div class="card ms-3" style="width: 80px; height: 30px; background-color: #FFF7E4;">
                                        <h6 class="fw-bold" style="margin-right: auto; margin-left: auto; margin-top: auto; margin-bottom: auto;">31 Coin</h6>
                                    </div>
                                </div>
                            </div>
                            <img class="mb-2" style="width: 120px; height: 120px; margin: auto; display: block;" src="{{asset('img/rekrut7.svg')}}" alt="">
                            <h4 class="text-center m-0">Theresa Web</h4>
                            <h3 class="text-center fw-bold">Senior Project Manager</h3>
                            <div class="row">
                                <div class="col-1">
                                    <h4 class="text-start">By</h4>
                                </div>
                                <div class="col-11">
                                    <h4 class="text-start" style="color: orange;">Google.inc</h4>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-1"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="col-6">
                                    <p>3 days ago</p>
                                </div>
                                <div class="col-5">
                                    <button type="button" class="btn border text-white" style="background-color: #FF9637; width: 110px; height: 40px;">Lihat Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-wrapper">
                                <button class="btn border text-white my-1 tombol-lihat"><i class="fa-solid fa-eye"></i> Lihat</button>
                                <button class="btn text-white my-1 tombol-keranjang"><i class="fa-solid fa-basket-shopping"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </section>
    <section>
    <div class="mt-5">
        @include('layouts.subcribe')
    </div>
    </section>
</div>



@include('layouts.footer')
@endsection