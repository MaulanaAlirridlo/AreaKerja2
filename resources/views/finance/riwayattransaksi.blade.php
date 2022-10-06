@extends('finance.index')

@section('content')
<div class="content mt-3">
    <div class="animated">

        <div class="card">
            <div class="card-header">
                <i class="mr-2 fa fa-align-justify"></i>
                <strong class="card-title" v-if="headerText">Modals</strong>
            </div>
            <div class="card-body">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                    Small
                </button>

                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#riwayatModal">
                    Medium
                </button>
            </div>
        </div>

        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 1000px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Pendapatan Bulanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered" style="border: 1;">
                                    <thead>
                                        <tr style="background-color: #94BDF2; color: white; border-color: black;">
                                            <th rowspan="2" style="text-align: center; vertical-align: middle; border-right:none;">Area kerja laporan laba rugi</th>
                                            <th colspan="12"  style="text-align: center; border-left: none;">2022</th>
                                        </tr>
                                        <tr style="background-color: #94BDF2; color: white;">
                                            <th scope="col" style="border: none;">Jan</th>
                                            <th scope="col" style="border: none;">Feb</th>
                                            <th scope="col" style="border: none;">Mar</th>
                                            <th scope="col" style="border: none;">APR</th>
                                            <th scope="col" style="border: none;">May</th>
                                            <th scope="col" style="border: none;">JUN</th>
                                            <th scope="col" style="border: none;">JUL</th>
                                            <th scope="col" style="border: none;">AUG</th>
                                            <th scope="col" style="border: none;">SEP</th>
                                            <th scope="col" style="border: none;">OCT</th>
                                            <th scope="col" style="border: none;">NOV</th>
                                            <th scope="col" style="border: none;">DES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="border:2px;">
                                            <td scope="row">Aliran Pendapatan 1</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row"  style="border-bottom-color: black;">Aliran Pendapatan 2</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                            <td style="border-bottom-color: black;">-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="border-top-color: black; border-bottom-color: black;">Total Pendapatan Bersih</th>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                            <td style="border-top-color: black; border-bottom-color: black;">-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" style="border-top-color: black;">Harga Pokok Penjualan</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                            <td style="border-top-color: black;">-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Laba Kotor</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pengeluaran</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Periklanan dan Promosi</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Pertanggungan</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Pemeliharaan</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Peralatan Kantor</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Menyewa</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Gaji, Tunjangan, & Upah</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Telekomunikasi</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Berpergian</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Keperluan</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Biaya Lainnya...</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Total Biaya</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Laba Sebelum Bunga &</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Depresi & Amortisasi</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Beban Bunga</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Laba Sebelum Pajak</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Pajak Penghasilan</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Laba Bersih</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 15px; padding-bottom: 15px;">
                        <div style="padding-bottom: 10px;"><button class="btn btn-success tombol" type="submit" value="Submit" style="background-color: #34C38F; border-radius:0.80rem; width: 100px;">Submit</button></div>
                        <div style="padding-bottom: 10px;"><button class="btn btn-danger tombol" type="submit" style="background-color: #D32F61; border-radius:0.80rem; width: 100px;">Delete</button></div>
                        <div><button type="button" class="btn btn-warning tombol" style="background-color: #FE6D0C; color:white; border-radius:0.80rem; width: 100px;" data-dismiss="modal">Cancel</button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="riwayatModal" tabindex="-1" role="dialog" aria-labelledby="riwayatModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="riwayatModalLabel">Riwayat Transaksi Terakhir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body card-block">
                                <form action="" method="post" class="">
                                    <div class="form-group transaksi"><label for="nf-email" class=" form-control-label">Order Id</label><input type="email" id="nf-email" name="nf-email" placeholder="SK2544" class="form-control"><!-- <span class="help-block">Please enter your email</span> -->
                                    </div>
                                    <div class="form-group transaksi"><label for="nf-password" class=" form-control-label">Billing Name</label><input type="password" id="nf-password" name="nf-password" placeholder="Jacob Hunter" class="form-control"><!-- <span class="help-block">Please enter your password</span> -->
                                    </div>
                                    <div class="form-group transaksi"><label for="nf-email" class=" form-control-label">Date</label><input type="date" id="nf-email" name="nf-email" placeholder="04 October 2022" class="form-control"><!-- <span class="help-block">Please enter your email</span> -->
                                    </div>
                                    <div class="form-group transaksi"><label for="nf-email" class=" form-control-label">Items</label><input type="text" id="nf-email" name="nf-email" placeholder="04 October 2022" class="form-control" style="height: 100px;"><!-- <span class="help-block">Please enter your email</span> -->
                                    </div>
                                    <div class="form-group transaksi"><label for="nf-email" class=" form-control-label">Date</label>
                                        <select name="payment" id="payment">
                                            <option value="">Pilih Payment Status</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select></div>
                                    <div class="form-group transaksi"><label for="nf-email" class=" form-control-label">Payment Method</label><input type="email" id="nf-email" name="nf-email" placeholder="Visa" class="form-control"><!-- <span class="help-block">Please enter your email</span> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 19px;">
                        <div style="padding-bottom: 10px;"><button class="btn btn-success tombol" type="submit" value="Submit" style="background-color: #34C38F; border-radius:0.80rem; width: 100px;">Submit</button></div>
                        <div style="padding-bottom: 10px;"><button class="btn btn-danger tombol" type="submit" style="background-color: #D32F61; border-radius:0.80rem; width: 100px;">Delete</button></div>
                        <div><button type="button" class="btn btn-warning tombol" style="background-color: #FE6D0C; color:white; border-radius:0.80rem; width: 100px;" data-dismiss="modal">Cancel</button></div>
                    </div>
                </div>
            </div>
        </div>






    </div><!-- .animated -->
</div><!-- .content -->
@endsection