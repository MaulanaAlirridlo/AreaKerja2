@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/wizard.css')}}">
<link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
@endsection

@section('title', 'Tempat Cari Kerja')

@section('content')
@include('layouts.header')

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="daftarkandidatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <form class="form-group" action="" method="post" id="registration">
                            <nav>
                                <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-link border bg-grey active" id="step1-tab" data-bs-toggle="tab" href="#step1">1. Account</a>
                                    <a class="nav-link border bg-grey" id="step2-tab" data-bs-toggle="tab" href="#step2">2. Skill</a>
                                    <a class="nav-link border bg-grey" id="step3-tab" data-bs-toggle="tab" href="#step3">3. Pendidikan</a>
                                    <a class="nav-link border bg-grey" id="step3-tab" data-bs-toggle="tab" href="#step3">4. Organisasi</a>
                                    <a class="nav-link border bg-grey" id="step3-tab" data-bs-toggle="tab" href="#step3">5. Pengalaman</a>
                                    <a class="nav-link border bg-grey" id="step3-tab" data-bs-toggle="tab" href="#step3">6. Finish</a>
                                </div>
                            </nav>
                            <div class="tab-content py-4">
                                <div class="tab-pane fade show active" id="step1">
                                    <h4>Personal data</h4>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput1" placeholder="Nama Lengkap" required>
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput2" placeholder="name@example.com" required>
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea type="text" class="form-control" id="floatingInput3" placeholder="alamat" required></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea type="text" class="form-control" id="floatingInput4" placeholder="biografi" required></textarea>
                                        <label for="floatingInput">Biografi</label>
                                    </div>
                                    <div class="mb-3">
                                    <select class="form-select" id="autoSizingSelect">
                                        <option selected>Pilih Skill Utama</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Uploud Pas Foto</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Uploud Pas Foto</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step2">
                                    <h4>Contact information</h4>
                                    <div class="mb-3">
                                        <label for="field4">Required field 1</label>
                                        <input type="text" name="field4" class="form-control" id="field4" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="field5">Optional field</label>
                                        <input type="text" name="field5" class="form-control" id="field5">
                                    </div>
                                    <div class="mb-3">
                                        <label for="textarea1">Required field 2</label>
                                        <textarea name="textarea1" rows="5" class="form-control" id="textarea1" required></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step3">
                                    <h4>Review your information</h4>
                                    <div class="mb-3">
                                        <label for="first_name">Required field 1</label>
                                        <input type="text" class="form-control-plaintext" value="Lorem ipsum dolor sit amet">
                                    </div>
                                    <div class="mb-3">
                                        <label for="first_name">Optional field</label>
                                        <input type="text" class="form-control-plaintext" value="Lorem ipsum dolor sit amet">
                                    </div>
                                    <div class="mb-3">
                                        <label for="first_name">Required field 2</label>
                                        <input type="text" class="form-control-plaintext" value="Lorem ipsum dolor sit amet">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-primary" data-enchanter="next">Next</button>
                                    <button type="submit" class="btn btn-primary" data-enchanter="finish">Finish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal -->


@include('layouts.footer')
@endsection