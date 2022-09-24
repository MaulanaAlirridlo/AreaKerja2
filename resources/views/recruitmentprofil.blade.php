@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection
@section('content')
@include('layouts.header')

<div class="container ">
    <section class="mt-4" style="height: 510px;">
        <div class="row">
            <img src="{{asset('img/rekrut9.svg')}}" alt="">
        </div>
        <div class="col-3 letak mx-auto">
            <div class="row" style="height: 200px; width: 250px;">
                <img src="{{asset('img/rekrut10.svg')}}" alt="">
            </div>
        </div>
    </section>
    <div class="row mt-5">
        <div class="col-5">
            <h2 class="text-start fw-bold">Theresa Web</h2>
            <h3 class="text-start fw-bold">Senior Project Manager</h3>
            <p>kota-jember, East Java, Indonesia</p>
        </div>
        <div class="col-5">
            <h4>By: Google.inc</h4>
        </div>
        <div class="col-2">
            <button type="button" class="btn" style="background-color: darkorange;">Hubungi</button>
            <button type="button" class="btn" style="background-color: darkorange;">Undang</button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card" style="background-color: #FFF0E2; height: 250px;">
            <div class="row ms-3 mt-2">
                <div class="col-5" style="height: 200px;">
            <h2 class="text-start fw-bold">About Me</h2>
            <p class="m-0">About me...</p>
            <p class="m-0">Skills :</p>
            <p class="m-0">Language :</p>
            <p>Interest :</p></div>
            <h6 class="text-start" style="color: ;#FFF0E2">Detail <i class="fa-solid fa-arrow-right"></i></h6>
        </div>
        </div>
        </div>
        <div class="col">
            <div class="card" style="background-color: #FFF0E2; height: 250px;">
        <div class="row ms-3 mt-2">
        <h2 class="text-start fw-bold">My Activity</h2>
        <div class="col-8" style="height: 160px;">
            <p>At vero eos et ultimum bonorum, quod omnium 
philosophorum sententia tale debet esse, ut aut
fugiat aliquid, praeter voluptatem ut de quo.</p></div>
<h6 class="text-start" style="color: ;#FFF0E2">Detail <i class="fa-solid fa-arrow-right"></i></h6>

        </div>
    </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="row">
            <h2 class="text-start fw-bold"> Pengalaman Kerja</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>Jakarta</td>
                        <td>2014-present</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <h5>UI/UX Desaigner</h5>
                            <p>PT.Google.inc</p>
                        </td>
                        <td>Surabaya</td>
                        <td>2018-2019</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>jember</td>
                        <td>2022-present</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn border" style="background-color: whitesmoke; width: max-content; margin-right: auto; margin-left: auto;">Load More</button>
        </div>
    </section>

    <section class="mt-5">
        <div class="row">
            <h2 class="text-start fw-bold"> Pengalaman Edukasi</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>Jakarta</td>
                        <td>2014-present</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <h5>UI/UX Desaigner</h5>
                            <p>PT.Google.inc</p>
                        </td>
                        <td>Surabaya</td>
                        <td>2018-2019</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>jember</td>
                        <td>2022-present</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn border" style="background-color: whitesmoke; width: max-content; margin-right: auto; margin-left: auto;">Load More</button>
        </div>
    </section>

    <section class="mt-5">
        <div class="row">
            <h2 class="text-start fw-bold"> Sertifikasi / Lisensi</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>Jakarta</td>
                        <td>2014-present</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <h5>UI/UX Desaigner</h5>
                            <p>PT.Google.inc</p>
                        </td>
                        <td>Surabaya</td>
                        <td>2018-2019</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <h5>Full Stack Development</h5>
                            <p>Google.inc</p>
                        </td>
                        <td>jember</td>
                        <td>2022-present</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn border" style="background-color: whitesmoke; width: max-content; margin-right: auto; margin-left: auto;">Load More</button>
        </div>
    </section>


</div>


@include('layouts.footer')
@endsection