<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<link href="{{ asset('css/lockscreen.css') }}" rel="stylesheet">
<div class="card mx-auto" style="width: 23rem; border-top-left-radius:18px; border-top-right-radius:18px; top:20%;">
    <div class="card-header lockscreen2">
        Lock screen
        <p>Enter your password to unlock
            the screen!</p>
    </div>
    <div class="card-body text-center">
        <div class="col d-none d-lg-flex text-center">
            <img class="w-82 mx-auto" src="{{ asset('img/lockscreen.svg') }}" alt="" srcset="">
        </div>
        <h5 class="card-title">Maria Laird</h5>
        <div class="row mb-3">
            <div class="col position-relative">
                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Enter password">
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn mt-4 w-50 lockscreen3 float-end">
            Unlock
        </button>
    </div>
</div>
<div class="text-center w-100" style="position: absolute; bottom: 20px;">
    <p>Not
        you ? return<span style="color: #556EE6"> Sign In </span></p>
    <h6 class="w-100" style="width: 18rem; border-top-left-radius:18px; border-top-right-radius:18px; top:20%;">© 2022
        Areakerja </h6>
</div>
<div></div>
