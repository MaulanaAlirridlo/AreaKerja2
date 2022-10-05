@extends('layouts.master')

@section('css')

<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">

@endsection

@section('content')
@include('layouts.header')

<div class="container">
    <section>
        <div class="row" style="background-image: url({{asset('img/bg.svg')}});">
            <div class="col-7 mt-5" style="height:520px; display: inherit;">
                <img src="{{asset('img/daftar1.svg')}}" class="w-100 shadow-1-strong rounded mb-4" /></div>
            <div class="col-4 mt-5">
                <div class="row mt-5" style="margin-left: -110px;">
                    <img src="{{asset('img/daftar2.svg')}}" class="w-100 shadow-1-strong rounded mb-4" /></div>
                <h1 class="fw-bold">Daftarkan Diri Anda</h1>
                <p> Menjadi bagian dari kandidat areakerja.com dan dapatkan pekerjaan impian anda</p>
                <button type="button" class="btn border text-white" style="background-color: darkorange; width: 80px;">Daftar</button>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-4 mt-5">
                <img src="{{asset('img/daftar3.svg')}}" class="w-80 shadow-1-strong rounded mb-4" />
                <div class="row text-center">
                    <h3 class="fw-bold">Prioritas Calon Pekerja</h3>
                    <p style="width: 250px; margin-left: auto; margin-right: auto;">Menjadi prioritas pilihan dari perusahan mitra Areakerja</p>
                </div>
            </div>
            <div class="col-8 mt-5">
                <div class="row mt-3">
                    <h1 class="text-center"> Benefit Menjadi Kandidat</h1>
                    <div class="col mt-5"> <img src="{{asset('img/daftar4.svg')}}" class="w-80 shadow-1-strong rounded mb-4" />
                        <div class="row text-center">
                            <h3 class="fw-bold">Memiliki Banyak Mitra Perusahaan</h3>
                            <p style="width: 250px; margin-left: auto; margin-right: auto;">Areakerja memiliki banyak mitra perushaan yang sedang membuka lowongan</p>
                        </div>
                    </div>
                    <div class="col mt-5" style=""><img src="{{asset('img/daftar5.svg')}}" class="w-80 shadow-1-strong rounded mb-4" style="margin-top: 100px;" />
                        <div class="row text-center">
                            <h3 class="fw-bold">Terpercaya dan Berbadan Hukum</h3>
                            <p style="width: 250px; margin-left: auto; margin-right: auto;">Perusahaan areaakerja merupakan perusahaan yang terpercaya dan berbadan hukum </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="row">
            <div class="row text-center fw-bold">
                <H3>Cara Daftar</H3>
            </div>
            <div class="col-8 "><img src="{{asset('img/daftar6.svg')}}" class="w-100 shadow-1-strong rounded mb-4" />
            </div>
            <div class="col-4 mt-5">
                <h2 class="text-start fw-bold m-0" style="color: #FF9637;">01</h2>
                <p class="fw-bold ms-2">Pilih Daftar untuk melakukan registrasi kandidat</p>
                <h2 class="text-start fw-bold m-0" style="color: #FF9637;">02</h2>
                <p class="fw-bold ms-2">Lengkapi Data yang Diperlukan pada Proses Registrasi</p>
                <h2 class="text-start fw-bold m-0" style="color: #FF9637;">03</h2>
                <p class="fw-bold ms-2">Tunggu Pemberitahuan Setelah Melakukan Registrasi</p>
                <h2 class="text-start fw-bold m-0" style="color: #FF9637;">04</h2>
                <p class="fw-bold ms-2">Anda telah menjadi kandidat Areakerja.com</p>
            </div>
        </div>
    </section>

    <section>
        <div class="row mt-5" style="background-image: url({{asset('img/bg.svg')}});">
            <div class="col-5 mt-5">
                <h2 class="fw-bold">F A Q</h2>
                <h5 class="fw-bold" style="width: 400px;">Pertanyaan dan Jawaban Tentang AreaKerja.Com</h5>
                <div class="row">
                    <div class="col-4">
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                        <button type="button" class="btn border text-white mt-2" style="background-color: #CACACA; width: 130px;">Pertanyaan</button>
                    </div>
                </div>
                <h5 class="fw-bold mt-3">Memiliki Pertanyaan Lain?</h5>
                <h5 class="" style="margin-left: 50px;">Hubungi kami</h5>
                <div class="input-group flex-nowrap mt-3" style="width: 300px;">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="addon-wrapping">
                    <button type="button" class="btn border text-white rounded" style="background-color: darkorange; width: 60px; position: absolute; margin-left: 230px; height: 25px; margin-top: 6px; padding: 1px;">Kirim</button>
                </div>
            </div>
            <div class="col-7">
                <img src="{{asset('img/daftar7.svg')}}" class="w-80 shadow-1-strong rounded mb-4" style="margin-left: -150px; margin-top: -100px;" />
            </div>
        </div>
    </section>
</div>


@include('layouts.footer')
@endsection