@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-none d-lg-flex p-5">
                <img class="w-76" src="{{ asset('img/register.svg') }}" alt="" srcset="">
            </div>
            <div class="col-lg-5">
                <div class="card border-0 bg-transparent">
                    <div class="card-header bg-transparent border-0">
                        <div class="row">
                            <div class="col">
                                <h2 class="fw-bolder m-0">Ayo Daftar</h2>
                            </div>
                            <div class="col">
                                <div class="text-end">
                                    <p class="m-0">Sudah Punya Akun?</p>
                                    <a href="/login">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="account row mt-4 mb-4">
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

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-4">
                                
                                <div class="col position-relative">
                                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                
                                <div class="col position-relative">
                                    <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                
                                <div class="col position-relative">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                
                                <div class="col position-relative">
                                    <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn mt-4 w-50 submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection