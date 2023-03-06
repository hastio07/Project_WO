@extends('layouts.Admins')
@section('title','Manage Perusahaan')

@section('content')
<section>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profil Perusahaan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profil Karyawan</button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="content-wrapper">
                            <div class="row same-height">
                                <div class="col-md-8">
                                    <div class="card">
                                        <h4 class="card-title text-center">Manage Profil Perusahaan</h4>
                                        <div class="card-body">
                                            <label for="withHelperTextBottom" class="form-label">Uplaod Foto Owner</label>
                                            <div class="d-flex">
                                                <input class="form-control w-50" type="file" id="formFile">
                                                <button class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Owner Perusahaan</h4>
                                            <hr>
                                            <div class="text-center">
                                                <img src="template/assets/images/fotoowner.jpg" class="rounded img-owner" alt=" ...">
                                            </div>
                                            <h6 class="fw-bolder">Imam Rosisdi S.Kom</h6>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Logo & Nama Perusahaan</h4>
                                            <hr>
                                            <div class="text-center">
                                                <img src="template/assets/images/logomulia.jpg" class="rounded-circle" alt=" ...">
                                            </div>
                                            <h6 class="fw-bolder">PT. Moelia Design</h6>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Alamat, Kontak & Sosial Media Perusahaan</h4>
                                            <hr>
                                            <i class="fa-sharp fa-solid fa-map-location-dot fa-2xl"></i>
                                            <p>Gg. Cinta Damai No.31, Tj. Baru, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122</p>
                                            <hr>
                                            <i class="fa-solid fa-phone-volume fa-2xl"></i>
                                            <h4>021344567</h4>
                                            <hr>
                                            <i class="fa-brands fa-whatsapp fa-2xl"></i>
                                            <h4>021344567</h4>
                                            <hr>
                                            <i class="fa-brands fa-instagram fa-2xl"></i>
                                            <h4>Moelia Design</h4>
                                            <hr>
                                            <i class="fa-brands fa-facebook fa-2xl"></i>
                                            <h4>Moelia Desg</h4>
                                            <hr>
                                            <i class="fa-brands fa-youtube fa-2xl"></i>
                                            <h4>Moelia Desg</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection