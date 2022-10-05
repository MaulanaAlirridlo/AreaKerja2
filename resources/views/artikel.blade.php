@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/artikel.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
@endsection

@section('title', 'Tips Kerja')

@section('content')
@include('layouts.header')

  <section class="container tips-kerja mt-5">
    <div class="text-center">
      <h1 class="judul">Tips Kerja</h1>  
      <p class="sub-judul">Pelajari Tips-Tips Kerja yang Telah Kami Buat untuk Anda</p>
      <div class="row">
        @for ($i = 0; $i < 8; $i++)
        <div class="col mx-5 my-3">
          <div class="rounded shadow mx-auto p-3 tips">
            <img class="rounded" src="{{asset('img/dummy.svg')}}" alt="">
            <div class="p-2 text">
              <p class="text-start px-2 release">RELEASE</p>
              <h3 class="text-start">Smal, Light Earin A-3 Earphone...</h3>
              <p class="text-start desc">Basically, this is a compact backup battery that easyly...</p>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </section>

@include('layouts.footer')
@endsection