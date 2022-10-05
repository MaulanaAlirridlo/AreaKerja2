@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-none d-lg-flex pt-4">
                <img class="w-82" src="{{ asset('img/email.svg') }}" alt="" srcset="">
            </div>
            <div class="col-lg-5">
                <div class="card border-0 bg-transparent">
                    <div class="card-header bg-transparent border-0 ">
                        <h2 class="fw-bolder m-0 mb-2">{{ __('Forgot Password') }}</h2>
                        <p>Enter your
                            email below to
                            receive your password reset instructions.</p>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-4">
                                <div class="col position-relative">
                                    <label for="email" class="col-form-label offset-2"
                                        style="left: 54px;">{{ __('Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control offset-1 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter email" style="width: 85%!important;">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-0">
                                <div class="col ">
                                    <button type="submit" class="btn btn-primary submit ">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p>Remember your password? <a class="btn btn-link" href="{{ route('login') }}">
                                        Sign-in?
                                    </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
