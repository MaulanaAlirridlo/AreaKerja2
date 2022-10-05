@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-none d-lg-flex pt-4">
                <img class="w-82" src="{{ asset('img/reset.svg') }}" alt="" srcset="">
            </div>
            <div class="col-md-5">
                <div class="card border-0 bg-transparent">
                    <div class="row m-0">
                        <h2 class="judul card-header bg-transparent border-0 m-0">{{ __('Reset Password') }}</h2>
                        <div class="row">
                            <p>Kami telah mengirimkan kode verifikasi ke email Anda <span
                                    class="kata">cust.areakerja@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" cl value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control reset2 @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-starts">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control reset2 @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Passowd Conform ') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control reset2"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <p class="text-center ">Kirim Kode Ulang</p>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary reset1">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
