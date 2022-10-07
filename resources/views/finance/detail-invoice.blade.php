@extends('finance.index')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail-invoice.css') }}">
@endsection

@section('content')
    <section class="invoice">
        <div class="invoice-wrapper">
            <div class="container rounded shadow bg-white">
                <div class="row">
                    <div class="col">
                        <div class="border-bottom p-3">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('img/logo.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <h6 class="text-right">Order # 12345</h6>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col">
                                    <h6 class="font-weight-bold">Billed To :</h6>
                                    <p class="m-0">John Smith</p>
                                    <p class="w-10">1234 Main
                                        Apt. 4B
                                        Springfield, ST 54321</p>
                                </div>
                                <div class="col-2 text-right position-relative">
                                    <div class="date">
                                        <h6 class="font-weight-bold">Tanggal :</h6>
                                        <p>10 Oktober 2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <h6 class="font-weight-bold">Payment Method :</h6>
                                    <p class="m-0">Visa ending **** 1111</p>
                                    <p class="w-10">email@email.email</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">No.</th>
                                                <th>Item</th>
                                                <th class="text-center" style="width: 20%">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Mark</td>
                                                <td class="text-right">Rp.10000</td>

                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Jacob</td>
                                                <td class="text-right">Rp.10000</td>

                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Larry</td>
                                                <td class="text-right">Rp.10000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-right">
                                    <p>total <span class="h3 text-body ml-5">RP.1000000</span></p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-right">
                                    <button class="btn btn-success w-15 rounded">Cetak</button>
                                    <select class="custom-select w-15 rounded ml-3">
                                        <option selected>Send</option>
                                        <option value="1">Email</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger rounded w-30 float-right my-5">Back</button>
        </div>
    </section>
@endsection
