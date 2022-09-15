@extends('layouts.master')
@section('title', 'Tempat Cari Kerja')

@section('content')
  @include('layouts.header')
  <!-- Home -->
<section class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="subheadingdua"> Tempat Mencari Kerja</p>
                <h1 class="heading text-black">Temukan Loker Jogja</h1>
                <h1 class="heading text-black">Terbaru Dengan Mudah</h1>
                <p class="subheadingsatu">Ayo Cari Lowongan Terbaru</p>
                <div class="btn-home mt-5 py-2">
                    <a href="#" class="btn btn-daftar text-white">Ayo Cari Kerja <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/kerja.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

  @include('layouts.footer')
@endsection
