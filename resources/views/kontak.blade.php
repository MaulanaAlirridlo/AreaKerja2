@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('title', 'Kontak Kami')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="kontak">
            <h1 class="mb-4 mr-auto ml-auto text-center" style="color: #ff6e07; text-shadow: 2px 2px 3px #353535b0;">Kontak
                Kami</h1>
            <p>Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                <br>
                Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk bertanya hal
                terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
            </p>
            <form action="/action_page.php">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="number" class="form-control" id="nama" name="no">
                        </div>
                        <div class="form-group">
                            <label for="no">No Telpon / WA </label>
                            <input type="number" class="form-control" id="no" name="no">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="number" class="form-control" id="email" name="no">
                        </div>
                    </div>
                </div>
                <div class="form-groub">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-warning mx-auto d-block" class="fa-align-center" aria-hidden="true"
                    style="background-color:hsla(14, 100%, 51%, 0.836);color:white;">Submit</button>
            </form>
        </div>
    </div>



    @include('layouts.footer')
@endsection
