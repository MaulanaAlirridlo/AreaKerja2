@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/listloker.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
@include('layouts.header')
<div class="container">

    <span><i class="fa-solid fa-arrow-left mt-4"></i> Back to home</span>
    <div class="row">
        <div class="col-sm-3 mt-3">
            <div class="border sm-2 p-2">
                <p>GAJI</p>

                <div class="slidecontainer">
                    <input type="range" min="1" max="10" value="50" class="slider" id="myRange">Rp: 0 jt
                    <p class="float-end">Rp: <span id="demo"></span> jt</p>
                </div>

                <script>
                    var slider = document.getElementById("myRange");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                        output.innerHTML = this.value;
                    }
                </script>


                <p class="mt-3">KATEGORI</p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Teknologi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Kesehatan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Multimedia
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Adminitrasi
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Pemasaran
                    </label>
                </div>

                <p class="mt-3">LOKASI</p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Bantul
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Kota Yogyakarta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Sleman
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Kulonprogo
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Gunung Kidul
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Lainnya
                    </label>
                </div>
                <div><button type="button" class="btn mt-4 border tombol" style="background-color: darkorange;">Filter Result</button>
                </div>
                <button type="button" class="btn btn-light mt-4 border tombol">Clear Filter</button>
            </div>
        </div>

        <div class="col-sm-9 mt-3">

            <div class="input-group mb-3 mt-1">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <div class="float-end mt-2">
                    <label for="rating" class="ms-5">Sort by:</label>
                    <select name="rating" id="rating">
                        <option value="highest">Highest Rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="rekomendasi-lowongan">
                <div class="row mt-3 py-3">
                    @for ($i = 1; $i <= 12; $i++) 
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
                @endfor
            </div>

                <nav aria-label="Page navigation example" class="mt-5 d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    @include('layouts.footer')
    @endsection