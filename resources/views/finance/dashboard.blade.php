@extends('finance.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-5 mt-3">
            <div class="card rounded">
                <div class="card-header" style="background: orange; height: 100px;">
                    <h4>Welcome Back !</h4>
                    <h6>Keuangan Area Kerja</h6>
                </div>
                <div class="card-body" style="height: 120px;">
                    <img src="{{asset('/img/avatar/5.jpg')}}" alt="" class="rounded-circle border border-white" style="width: 50px; position: absolute; display: block; margin-top: -40px; margin-left: 10px;">
                    <div class="col-5">
                        <h4 class="mt-3">Henry Price</h4>
                        <p class="mt-4">Finance</p>
                    </div>
                    <div class="col-7">
                        <button type="button" class="btn text-light mt-5 mr-2 rounded" style="background: orange; width: 70px;">Sleep</button>
                        <button type="button" class="btn text-light mt-5 rounded" style="background: orange; width: 80px;">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 mt-3">
            <div class="row">
                <div class="col">
                    <div class="card rounded">
                        <p class="mt-2" style="padding-left: 20px;">Jumlah Saldo Saat ini</p>
                        <h5 style="padding-left: 20px;">Rp 503.120.000</h5>
                        <div class="card rounded-circle" style="background: orange; width: 50px; height: 50px; margin-left: 180px; margin-top: -50px;">
                            <i class="fa-solid fa-file-lines" style="margin-top: 15px; margin-left: 18px; "></i>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded">
                        <p class="mt-2" style="padding-left: 20px;">Jumlah Dicairkan</p>
                        <h5 style="padding-left: 20px;">Rp 420.000.000</h5>
                        <div class="card rounded-circle" style="background: orange; width: 50px; height: 50px; margin-left: 180px; margin-top: -50px;">
                            <i class="fa-solid fa-circle-dollar-to-slot" style="margin-top: 15px; margin-left: 18px; "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto" style="">
                    <div class="card rounded">
                        <p class="mt-2" style="padding-left: 20px;">Rata-Rata Pendapatan</p>
                        <h5 style="padding-left: 20px;">Rp 8.750.000</h5>
                        <div class="card rounded-circle" style="background: orange; width: 50px; height: 50px; margin-left: 180px; margin-top: -50px;">
                            <i class="fa-solid fa-sack-dollar" style="margin-top: 15px; margin-left: 18px; "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-5">
            <div class="card rounded" style="height: 340px;">
                <div class="row">
                    <div class="col-8">
                        <h6 class="mt-3" style="padding-left: 20px;">Pendapatan Bulanan</h6>
                        <p class="m-0 mt-5" style="padding-left: 20px;">Bulan ini</p>
                        <h4 class="mt-3" style="padding-left: 20px;">Rp 109.235.000</h4>
                        <p class=" mt-3 mb-0">
                            <span class="col-green" style="padding-left: 20px;">12%</span> From Previous Period</p>
                        <button type="button" class="btn mt-5" style="background: orange; margin-left: 20px;">View More <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    <div class="col-4">

                        <p>diagram</p>

                    </div>
                    <p class="mt-3" style="margin-left: 20px;">We Craft digital, graphic and dimensional thinking</p>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card rounded" style="height: 340px;">
                <h6 class="mt-2" style="margin-left: 20px;">Activity</h6>
                <div class="row mt-2">
                    <div class="col-2 sm-2">
                        <i class="fa-regular fa-circle-right" style="margin-left: 30px;"></i></div>
                    <div class="col-3">
                        <p>17 Des 2022</p>
                    </div>
                    <div class="col-4">
                        <p>Rekapitulasi Bulan Desember</p>
                    </div>
                    <div class="col-3">
                        <p class="" style="color: orange;">Read More</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 sm-2">
                        <i class="fa-regular fa-circle-right" style="margin-left: 30px;"></i></div>
                    <div class="col-3">
                        <p>17 Nov 2022</p>
                    </div>
                    <div class="col-4">
                        <p>Rekapitulasi Bulan November</p>
                    </div>
                    <div class="col-3">
                        <p class="" style="color: orange;">Read More</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 sm-2">
                        <i class="fa-regular fa-circle-right" style="margin-left: 30px;"></i></div>
                    <div class="col-3">
                        <p>15 Nov 2022</p>
                    </div>
                    <div class="col-4">
                        <p>Maintenance Finance</p>
                    </div>
                    <div class="col-3">
                        <p class="" style="color: orange;">Read More</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 sm-2">
                        <i class="fa-regular fa-circle-right" style="margin-left: 30px;"></i></div>
                    <div class="col-3">
                        <p>12 Okt 2022</p>
                    </div>
                    <div class="col-4">
                        <p>Rekapitulasi Bulan Oktober</p>
                    </div>
                    <div class="col-3">
                        <p class="" style="color: orange;">Read More</p>
                    </div>
                </div>
                <button type="button" class="btn mt-4" data-toggle="modal" data-target="#exampleModal" style="background: orange; margin-left: auto; margin-right: auto; width: 120px;">View More <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    @include('finance.partials.activity')

    <div class="row mt-3">
        <div class="col">
            <div class="card p-5">
                <h4 class="mt-2">Jumlah Uang</h4>
                <canvas class="mt-2" id="densityChart" width="600" height="400"></canvas>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card p-5">
                <div class="container">

                    <h4>Riwayat Transaksi Terakhir</h4>
                    <hr>
                    <div class="row">
                        <table class="table row-select">
                            <thead>
                                <tr class="head">
                                    <th>
                                        <div class="checkbox table-checkbox">
                                            <label class="block-label selection-button-checkbox">
                                                <input type="checkbox" name="all" value="all" id="toggleAll" tabindex="0"> ALL </label>
                                        </div>
                                    </th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Billing Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox table-checkbox">
                                            <label class="block-label selection-button-checkbox">
                                                <input type="checkbox" name="ck1" value="ck1"> </label>
                                        </div>
                                    </td>
                                    <td>#SK2540</td>
                                    <td>Neal Matthews</td>
                                    <td>07 oct, 2022</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>
                                        <div class="card rounded" style="background: orange; width: 70px; margin-left: auto; margin-right: auto;">
                                            <h6>Success</h6>
                                        </div>
                                    </td>
                                    <td>Mastercard</td>
                                    <td><button type="button" class="btn btn-warning rounded">View Details</button></td>
                                </tr>

                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection