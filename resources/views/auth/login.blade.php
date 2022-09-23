@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-none d-lg-flex">
                <img class="w-82" src="{{ asset('img/login.svg') }}" alt="" srcset="">
            </div>
            <div class="col-lg-5">
                <div class="card border-0 bg-transparent">
                    <div class="card-header bg-transparent border-0">
                        <div class="row">
                            <div class="col">
                                <h2 class="fw-bolder m-0">Area Kerja</h2>
                            </div>
                            <div class="col">
                                <div class="text-end">
                                    <p class="m-0">Belum Daftar?</p>
                                    <a href="/register">Ayo Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="account row mt-4 mb-3">
                            <div class="col">
                                <button type="button" class="btn w-85 btn-dark"><i class="fa-brands me-1 fa-apple"></i> Apple</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn w-85 btn-warning d-block mx-auto"><i class="fa-brands me-1 fa-google"></i> Google</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn w-85 btn-primary float-end"><i class="fa-brands me-1 fa-facebook"></i> Facebook</button>
                            </div>
                        </div>

                        <p class="text-center">or</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-4">
                                <div class="col position-relative">
                                    <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter email">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col position-relative">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="current-password" placeholder="Enter password">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link float-end" href="{{ route('password.request') }}">
                                    <p>Forgot Password?</p>
                                </a>
                            @endif

                            <div class="mt-5">
                                <button type="submit" class="btn mt-4 w-50 submit">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
