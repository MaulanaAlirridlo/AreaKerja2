@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
  @include('layouts.header')
  <!-- Home -->
  <section class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <p class="subheadingdua"> Tempat Mencari Kerja</p>
                <h1 class="heading text-black">Temukan Loker Jogja</h1>
                <h1 class="heading text-black">Terbaru Dengan Mudah</h1>
                <p class="subheadingsatu">Ayo Cari Lowongan Terbaru</p>
                <div class="btn-home mt-5 py-2">
                    <a href="#" class="btn btn-daftar text-white">Ayo Cari Kerja <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg">
                <img src="{{asset('img/kerja.png')}}" alt="" class="img-fluid d-none d-lg-block">
            </div>
        </div>
    </div>
  </section>

<section class="rekomendasi-lowongan text-center">
  <div class="container">
    <h1>Rekomendasi Lowongan</h1>
    <p>Coba cek dulu rekomendasi lowongan dari kami</p>

    <div class="row">
      <div class="col">
        <div class="wrapper">
          <div class="non-hover">
            <div class="rec-link">
              <p>Rekomendasi</p>
              <i class="fa-solid fa-heart"></i>
            </div>
            <img src="{{asset('img/logo.png')}}" alt="">
            <h3>Seven Inc</h3>
            <p>Lokasi: Bantul</p>
            <h5>Full Time</h5>
          </div>
          <div class="hover">
            <button>Lihat</button>
            <button>Simpan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="wrapper">
          <div class="non-hover">
            <div class="rec-link">
              <p>Rekomendasi</p>
              <i class="fa-solid fa-heart"></i>
            </div>
            <img src="{{asset('img/logo.png')}}" alt="">
            <h3>Seven Inc</h3>
            <p>Lokasi: Bantul</p>
            <h5>Full Time</h5>
          </div>
          <div class="hover">
            <button>Lihat</button>
            <button>Simpan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="wrapper">
          <div class="non-hover">
            <div class="rec-link">
              <p>Rekomendasi</p>
              <i class="fa-solid fa-heart"></i>
            </div>
            <img src="{{asset('img/logo.png')}}" alt="">
            <h3>Seven Inc</h3>
            <p>Lokasi: Bantul</p>
            <h5>Full Time</h5>
          </div>
          <div class="hover">
            <button>Lihat</button>
            <button>Simpan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="wrapper">
          <div class="non-hover">
            <div class="rec-link">
              <p>Rekomendasi</p>
              <i class="fa-solid fa-heart"></i>
            </div>
            <img src="{{asset('img/logo.png')}}" alt="">
            <h3>Seven Inc</h3>
            <p>Lokasi: Bantul</p>
            <h5>Full Time</h5>
          </div>
          <div class="hover">
            <button>Lihat</button>
            <button>Simpan</button>
          </div>
        </div>
      </div>
      <button class="btn">Rekomendasi Loker Lainnya</button>
    </div>
  </div>
</section>

@include('layouts.footer')
@endsection