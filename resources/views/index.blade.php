@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
  {{-- @include('layouts.header') --}}

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
