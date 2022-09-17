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
  
<section class="benefit" id="benefit">
  <div class="container">
    <img class="w-100" src="{{ asset('img/garis.svg')}}" alt="">
  </div>
</section>

  <section class="rekomendasi-lowongan text-center">
    <div class="container">
      <h1 class="fw-bold">Rekomendasi Lowongan</h1>
      <p>Coba cek dulu rekomendasi lowongan dari kami</p>
  
      <div class="row mt-5 py-3">
        <div class="col">
          <div class="wrapper shadow p-3 rounded m-auto overflow-hidden position-relative">
            <div class="non-hover">
              <div class="rec-link px-2">
                <div class="row align-items-center mb-2">
                  <div class="col">
                    <button class="btn float-end">REKOMENDASI</button>
                  </div>
                  <div class="col">
                    <i class="float-end me-3 fa-solid fa-heart"></i>
                  </div>
                </div>
              </div>
              <img class="mt-2 mb-5" src="{{asset('img/logo.png')}}" alt="">
              <h3 class="text-start m-0">Seven Inc</h3>
              <p class="text-start m-0">Lokasi: Bantul</p>
              <h5 class="text-end">Full Time</h5>
            </div>
            <div class="hover">
              <div class="hover-wrapper">
                <button class="btn border text-white my-1 tombol-lihat"><i class="fa-solid fa-eye"></i> Lihat</button>
                <button class="btn text-white my-1 tombol-keranjang"><i class="fa-solid fa-basket-shopping"></i> Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="wrapper shadow p-3 rounded m-auto overflow-hidden position-relative">
            <div class="non-hover">
              <div class="rec-link px-2">
                <div class="row align-items-center mb-2">
                  <div class="col">
                    <button class="btn float-end">REKOMENDASI</button>
                  </div>
                  <div class="col">
                    <i class="float-end me-3 fa-solid fa-heart"></i>
                  </div>
                </div>
              </div>
              <img class="mt-2 mb-5" src="{{asset('img/logo.png')}}" alt="">
              <h3 class="text-start m-0">Seven Inc</h3>
              <p class="text-start m-0">Lokasi: Bantul</p>
              <h5 class="text-end">Full Time</h5>
            </div>
            <div class="hover">
              <div class="hover-wrapper">
                <button class="btn border text-white my-1 tombol-lihat"><i class="fa-solid fa-eye"></i> Lihat</button>
                <button class="btn text-white my-1 tombol-keranjang"><i class="fa-solid fa-basket-shopping"></i> Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="wrapper shadow p-3 rounded m-auto overflow-hidden position-relative">
            <div class="non-hover">
              <div class="rec-link px-2">
                <div class="row align-items-center mb-2">
                  <div class="col">
                    <button class="btn float-end">REKOMENDASI</button>
                  </div>
                  <div class="col">
                    <i class="float-end me-3 fa-solid fa-heart"></i>
                  </div>
                </div>
              </div>
              <img class="mt-2 mb-5" src="{{asset('img/logo.png')}}" alt="">
              <h3 class="text-start m-0">Seven Inc</h3>
              <p class="text-start m-0">Lokasi: Bantul</p>
              <h5 class="text-end">Full Time</h5>
            </div>
            <div class="hover">
              <div class="hover-wrapper">
                <button class="btn border text-white my-1 tombol-lihat"><i class="fa-solid fa-eye"></i> Lihat</button>
                <button class="btn text-white my-1 tombol-keranjang"><i class="fa-solid fa-basket-shopping"></i> Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="wrapper shadow p-3 rounded m-auto overflow-hidden position-relative">
            <div class="non-hover">
              <div class="rec-link px-2">
                <div class="row align-items-center mb-2">
                  <div class="col">
                    <button class="btn float-end">REKOMENDASI</button>
                  </div>
                  <div class="col">
                    <i class="float-end me-3 fa-solid fa-heart"></i>
                  </div>
                </div>
              </div>
              <img class="mt-2 mb-5" src="{{asset('img/logo.png')}}" alt="">
              <h3 class="text-start m-0">Seven Inc</h3>
              <p class="text-start m-0">Lokasi: Bantul</p>
              <h5 class="text-end">Full Time</h5>
            </div>
            <div class="hover">
              <div class="hover-wrapper">
                <button class="btn border text-white my-1 tombol-lihat"><i class="fa-solid fa-eye"></i> Lihat</button>
                <button class="btn text-white my-1 tombol-keranjang"><i class="fa-solid fa-basket-shopping"></i> Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn border w-25 m-auto mt-5 fw-bold">Rekomendasi Loker Lainnya</button>
      </div>
    </div>
  </section>

  @include('layouts.footer')
@endsection