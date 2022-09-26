<!DOCTYPE html>
<!-- bootstrap verison 5.2 -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
  <title>Bootstrap Playground</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 py-4 text-start">
        <h3 class="display-5 fw-bold">Kategori Lowongan Kerja</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="card panjang" style="background-color:#EDECFF;">
          <div class="card-body">
            <h5 class="card-title fw-bold">
              Teknologi Informasi
              <a href="#" class="btn float-end" style="background-color:#FF9637;">See ALL</a>
            </h5>
            <p class="card-text">1.402 Lowongan</p>
          </div>
          <img src="{{asset('img/hp.svg')}}" alt="" class="d-flex mx-auto">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card kecil" style="background-color:#FEE8EE;">
          <div class="card-body">
            <h5 class="card-title fw-bold">Adminitrasi</h5>
            <p class="card-text">593 Lowongan</p>
            <a href="#" class="btn" style="background-color:#FF9637;">See All</a>
          </div>
          <div class="float-end">
            <img src="{{asset('img/laptop.svg')}}" alt="" class="d-flex mx-auto float-end">
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card kecil" style="background-color:#E2F9EF;">
          <div class="float-end">
            <img src="{{asset('img/laptop2.svg')}}" alt="" class="d-flex mx-auto float-end">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold">Multimedia</h5>
            <p class="card-text">492 Lowongan</p>
            <a href="#" class="btn" style="background-color:#FF9637;">See All</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card kecil2" style="background-color:#FFF0E2;">
          <div class="float-end">
            <img src="{{asset('img/jam.svg')}}" alt="" class="d-flex mx-auto float-end">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold">Pemasaran</h5>
            <p class="card-text">204 Lowongan</p>
            <a href="#" class="btn" style="background-color:#FF9637;">See All</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card kecil2" style="background-color:#E2F6FC;">
          <div class="card-body">
            <h5 class="card-title fw-bold">Lain-lain</h5>
            <p class="card-text">349 Lowongan</p>
            <a href="#" class="btn" style="background-color:#FF9637;">See All</a>
          </div>
          <div class="float-end">
            <img src="{{asset('img/earphone.svg')}}" alt="" class="d-flex mx-auto float-end">
          </div>
        </div>
      </div>

      <div class="col-sm-6 mt-4">
        <div class="card panjang" style="background-color:#FFF7E4;">
          <div class="card-body">
            <h5 class="card-title fw-bold">Multimedia
              <a href="#" class="btn float-end" style="background-color:#FF9637;">See All</a>
            </h5>
            <p class="card-text">1492 Lowongan</p>
          </div>
          <img src="{{asset('img/elektro.svg')}}" alt="" class="d-flex mx-auto">
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-12 py-4 text-start">
        <h3 class="display-5 fw-bold">Lokasi Lowongan Kerja</h3>
        <div class="row align-items-center">
          <div class="col">
            <p class="card-text">check our latest article to get meaningfull content or tips for shopping</p>
          </div>
          <div class="col d-flex justify-content-end">
            <a href="#" class="btn border" style="background-color:#FFffff;"> <i class="fa-solid fa-chevron-left"></i></a>
            <a href="#" class="btn ms-2 border" style="background-color:#FFffff;"><i class="fa-solid fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 position-relative">
        <div class="col">
          <div class="card loker">
            <img src="{{asset('img/loker1.svg')}}" alt="">
            <div class="card-body">
            </div>
          </div>
        </div>

        <div class="card boxloker m-auto border">
          <div class="card-body">
            <a href="#" class="btn float-end m-auto label" style="background-color:#FF9637;">Hot</a>
            <p class="card-text  ms-2 fw-bold">Technology</p>
            <h3 class="card-title ms-2 fw-bold">Sleman</h3>
            <p class="card-text  ms-2">Basically, this is a compact backup battery that easilly attaches to...</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4 position-relative">
        <div class="card loker">
          <img src="{{asset('img/loker2.svg')}}" alt="">
          <div class="card-body"></div>
        </div>

        <div class="card boxloker m-auto border">
          <div class="card-body">
            <a href="#" class="btn float-end m-auto label" style="background-color:#FF9637;">New</a>
            <p class="card-text  ms-2 fw-bold">Technology</p>
            <h3 class="card-title ms-2 fw-bold">Kota Yogyakarta</h3>
            <p class="card-text  ms-2">Basically, this is a compact backup battery that easilly attaches to...</p>
          </div>
        </div>
      </div>


      <div class="col-sm-4 position-relative">
        <div class="card loker">
          <img src="{{asset('img/loker3.svg')}}" alt="">
          <div class="card-body"></div>
        </div>

        <div class="card boxloker m-auto border">
          <div class="card-body">
            <a href="#" class="btn float-end m-auto label" style="background-color:#FF9637;">Hot</a>
            <p class="card-text  ms-2 fw-bold">Technology</p>
            <h3 class="card-title ms-2 fw-bold">Bantul</h3>
            <p class="card-text  ms-2">Basically, this is a compact backup battery that easilly attaches to...</p>
          </div>
        </div>
      </div>
      <div class="row btloker mx-auto">
        <a href="#" class="btn float-end border" style="background-color:#ffffff;">
          <p class="card-text  ms-2">Lokasi lowongan kerja lainnya...</p>
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row cardinfo">
      <div class="card posisi" style="background-color:#FFF0E2 ;">
        <div class="card-body posisi">
          <h3 class="fw-bold ms-5">Berlangganan untuk mendapatkan informasi</h3>
          <h3 class="fw-bold ms-5 ">dan lowongan kerja terbaru
            <div class="card-body search float-end">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter email address" aria-describedby="button">
                <button class="btn warna ms-2 fw-bold" type="button" id="button-subcribe" style="background-color:#FF9637 ;">Subcribe</button>
              </div>
            </div>
          </h3>
        </div>
        <img src="{{asset('img/kerang.svg')}}" alt="" class="image2">
      </div>
      <img src="{{asset('img/goresan.svg')}}" alt="" class="image1">
    </div>
  </div>
  <script src="https://kit.fontawesome.com/d770eb273a.js" crossorigin="anonymous"></script>
</body>

</html>