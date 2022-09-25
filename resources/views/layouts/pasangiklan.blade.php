@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
@include('layouts.header')

<section class="pasangiklan" style="background-repeat: no-repeat; background-image: url('{{ asset('img/backgroundprice1.svg') }}'); background-attachment: fixed;ck">
    <div class="banner-area3">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container">
                    <h1 class="subheading1" style="font-weight: 400; font-size:50px; text-align: center; line-height: 2!important; ">
                        <strong>Pasang Lowongan di Areakerja.com</strong>
                    </h1>
                    <h4 class="subheadingdua" style="font-weight: 500; font-size:20px; color: black; text-align: center; ">
                        Platform lowongan kerja no. 1 <br />untuk mendapatkan talenta terbaik bagi
                        perusahaan anda
                    </h4>

                </div>
                <div class="" style="text-align: center; margin-top: 25px;">
                    <img src="{{asset('img/logo.png')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/instagram.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/google.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/facebook.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/twitter.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/linkedin.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                    <img src="{{asset('img/telegram.svg')}}" alt="" style="height:30px; width:40px;margin-right: 10px;">
                </div>

            </div>

        </div>
        <div class="containerbanner">
            <div class="cardbanner" style="background-color: white;">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('img/logo.png')}}" alt="" style="height:100px; width:130px;margin-right: 10px; padding-left: 30px; padding-top: 20px;">
                    </div>
                    <div class="col">
                        <div class="body-cardpasang">
                            <h1><strong> WEBSITE AREA KERJA </strong></h1>
                            <p><strong> Ribuan pencari kerja mengunjungi website & aplikasi kami setiap hari untuk melihat lowonga baru </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerpasang">
            <div class="cardpasang" style="background-color: gold;">
                <div class="head-cardpasang">
                    <h1><strong> GABUNG MITRA </strong></h1>
                </div>
                <div class="body-cardpasang">
                    <h1><strong> DAPATKAN BENEFIT LEBIH BANYAK </strong></h1>
                    <p><strong> 1 KALI PUBLIKASI DI SEMUA JARINGAN AREAKERJA.COM </strong></p>

                </div>
                <div class="col-11 col-sm-12 mx-auto no-padding" style="margin-top: 15px;">
                    <ul class="text-left mb-4">
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/logo.png')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            Website dan Aplikasi
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/instagram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            INSTAGRAM POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/google.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            GOOGLE JOBS & BISNIS
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/facebook.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            FACEBOOK POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/twitter.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TWITTER
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/linkedin.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            LINKEDIN
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/telegram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TELEGRAM
                        </h5>
                    </ul>
                </div>
                <div class="footer-cardpasang">
                    <h1><strong> IDR 10.000.000 </strong></h1>
                    <p><strong> GABUNG MITRA SEKARANG </strong></p>
                </div>
            </div>
            <div class="cardpasang" style="background-color: rgb(199, 184, 184);">
                <div class="head-cardpasang">
                    <h1><strong> SILVER </strong></h1>
                </div>
                <div class="body-cardpasang">
                    <h1><strong> JANGKAUAN CUKUP LUAS </strong></h1>
                    <p><strong> 3 KALI PUBLIKASI DI SEMUA JARINGAN AREAKERJA.COM </strong></p>

                </div>
                <div class="col-11 col-sm-12 mx-auto no-padding" style="margin-top: 15px;">
                    <ul class="text-left mb-4">
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/logo.png')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            Website dan Aplikasi
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/instagram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            INSTAGRAM POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/google.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            GOOGLE JOBS & BISNIS
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/facebook.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            FACEBOOK POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/twitter.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TWITTER
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/linkedin.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            LINKEDIN
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/telegram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TELEGRAM
                        </h5>
                    </ul>
                </div>
                <div class="footer-cardpasang">
                    <h1><strong> IDR 5.000.000 </strong></h1>
                    <p><strong> PASANG LOWONGAN SEKARANG </strong></p>
                </div>
            </div>
            <div class="cardpasang" style="background-color: rgb(200, 140, 80);">
                <div class="head-cardpasang">
                    <h1><strong> BRONZE </strong></h1>
                </div>
                <div class="body-cardpasang">
                    <h1><strong> REKRUT DENGAN HEMAT </strong></h1>
                    <p><strong> 1 KALI PUBLIKASI DI SEMUA JARINGAN AREAKERJA.COM </strong></p>

                </div>
                <div class="col-11 col-sm-12 mx-auto no-padding" style="margin-top: 15px;">
                    <ul class="text-left mb-4">
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/logo.png')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            Website dan Aplikasi
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/instagram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            INSTAGRAM POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/google.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            GOOGLE JOBS & BISNIS
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/facebook.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            FACEBOOK POST & STORY
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/twitter.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TWITTER
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/linkedin.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            LINKEDIN
                        </h5>
                        <h5 class="mb-3" style="font-weight: normal; font-size: 15px;">
                            <img src="{{asset('img/telegram.svg')}}" alt="" style="height:10%; width:10%;margin-right: 10px;">
                            TELEGRAM
                        </h5>
                    </ul>
                </div>
                <div class="footer-cardpasang">
                    <h1><strong> IDR 2.500.000 </strong></h1>
                    <p><strong> PASANG LOWONGAN SEKARANG </strong></p>
                </div>
            </div>
        </div>


</section>

<section class="pasangiklan" style="padding-bottom: 100px; background-repeat: no-repeat; background-image: url('{{ asset('img/backgroundkertas.svg') }}');">
    <div class="banner-area3">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container">
                    <h1 class="subheading1" style="font-weight: 400; font-size:50px; text-align: center; line-height: 2!important; ">
                        <strong style="font-size: 40px;">Cara Pasang Lowongan</strong>
                    </h1>
                </div>
            </div>
        </div>


        <div class="containerpasang">
            <div class="cardcarapasang" style="background-color: white;">
                <div class="" style="font-size: 50px; width: 50px; position: relative; right: 0; top: -30px; right: -20px;"><strong>1</strong></div>
                <div class="head-cardcarapasang" style="margin-top: -50px;">
                    <img src="{{asset('img/tanggal.svg')}}" alt="">
                </div>
                <div class="body-cardcarapasang">
                    <h1><strong> Pilih paket pemasangan lowongan sesuai yang anda inginkan. </strong></h1>
                </div>
            </div>
            <div class="cardcarapasang" style="background-color: white;">
                <div class="" style="font-size: 50px; width: 50px; position: relative; right: 0; top: -30px; right: -20px;"><strong>2</strong></div>
                <div class="head-cardcarapasang" style="margin-top: -50px;">
                    <img src="{{asset('img/computer.svg')}}" alt="">
                </div>
                <div class="body-cardcarapasang">
                    <h1><strong> Kirimkan materi lowongan via formulir website atau whatsapp kami. </strong></h1>
                </div>
            </div>
            <div class="cardcarapasang" style="background-color: white;">
                <div class="" style="font-size: 50px; width: 50px; position: relative; right: 0; top: -30px; right: -20px;"><strong>3</strong></div>
                <div class="head-cardcarapasang" style="margin-top: -50px;">
                    <img src="{{asset('img/dompet.svg')}}" alt="">
                </div>
                <div class="body-cardcarapasang">
                    <h1><strong> Setelah materi dikirim, anda akan diberikan instruksi pembayaran. </strong></h1>
                </div>
            </div>
            <div class="cardcarapasang" style="background-color: white;">
                <div class="" style="font-size: 50px; width: 50px; position: relative; right: 0; top: -30px; right: -20px;"><strong>4</strong></div>
                <div class="head-cardcarapasang" style="margin-top: -50px;">
                    <img src="{{asset('img/telegram.svg')}}" alt="">
                </div>
                <div class="body-cardcarapasang">
                    <h1><strong> Apabila sudah melakukan pembayaran, lowongan akan dipublikasikan. </strong></h1>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container">
                    <h1 class="subheading1" style="font-weight: 400; font-size:50px; text-align: center; line-height: 2!important; ">
                        <strong style="font-size: 40px;">Kelebihan Areakekrja.com</strong>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 col-sm-6">
                <div class="row justify-content-start">

                    <div class="col-4 mt-5" style="margin-left: 300px;">
                        <div class="" style="width: 25rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('img/www.svg')}}" alt="" style="height:100px; width:130px;margin-left: -100px; padding-left: 30px; padding-top: -20px; padding-bottom: 20px;">
                                    </div>
                                    <div class="col" style="margin-left: -150px;">
                                        <p class="card-text" style="text-align: center;">WEBSITE & APLIKASI AREAKERJA.COM DIKUNJUNGI PENCARI KERJA SETIAP HARINYA DENGAN POSISI TINGGI UNTUK KATA KUNCI LOKAL DI MESIN PENCARIAN SEPERTI GOOGLE</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6">
                <div class="row justify-content-start">

                    <div class="col-4 mt-5" style="margin-left: 300px;">
                        <div class="" style="width: 25rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('img/toa.svg')}}" alt="" style="height:100px; width:130px;margin-left: -350px; padding-left: 30px; padding-top: -20px; padding-bottom: 20px;">
                                    </div>
                                    <div class="col" style="margin-left: -400px;">
                                        <p class="card-text" style="text-align: center;">AKUN SOSIAL MEDIAKAMI DIIKUTI OLEH RATUSAN RIBU PENCARI KERJA, SERTA MEMILIKI JARINGAN SOSIAL MEDIA TERLENGKAP.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="">
                        <div class="col-4 mt-5" style="margin-left: 500px;">
                            <div class="" style="width: 30rem;">
                                <div class="col-5">
                                    <img src="{{asset('img/wanita.svg')}}" alt="" style="height:100px; width:130px;margin-left: -50px; padding-left: 30px; padding-top: -20px; padding-bottom: 20px;">
                                </div>
                                <div class="col" style="margin-left: 100px; margin-top: -85px;">
                                    <p class="card-text" style="text-align: center;">AKUN SOSIAL MEDIAKAMI DIIKUTI OLEH RATUSAN RIBU PENCARI KERJA, SERTA MEMILIKI JARINGAN SOSIAL MEDIA TERLENGKAP.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('layouts.footer')
@endsection