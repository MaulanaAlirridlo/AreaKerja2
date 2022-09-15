@section('css')
<link rel="stylesheet" href="{{asset('css/header.css')}}">
@endsection
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" alt="logo area kerja" style="width:80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="navbarNavAltMarkup">
                <div class="navbar-nav me-5">
                    <a class="nav-link active me-5" href="#">Home</a>
                    <a class="nav-link me-4" href="#">Tips Kerja</a>
                    <a class="nav-link me-4 btn border" href="#">Daftar Sebagai Kandidat</a>
                    <a class="nav-link me-4 btn border" href="#">Pasang Lowongan</a>
                    <a class="nav-link me-4 btn border" style="background-color:#ff6e07; color:white;" href="#">Pasang Lowongan</a>
                </div>
            </div>
        </div>
    </nav>
</header>