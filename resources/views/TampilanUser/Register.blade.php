@extends('layouts.layouts')

@section('content')
<section class="container login d-flex shadow-lg p-3 mb-5 bg-body rounded position-absolute top-50 start-50 translate-middle">
    <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-sm-6">
                <div class="header">
                    <h1 class="text-center">Registrasi</h1>
                </div>
                <div class="login-form">
                    <!-- Nama Input-->
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control bg-transparent" placeholder="Nama Depan" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="Name" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control bg-transparent" placeholder="Nama Belakang" aria-label="Last name">
                        </div>
                    </div>
                    <!-- Email Input-->
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-transparent"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Masukan Email" required>
                    </div>
                    <!-- No. Hp-->
                    <label for="NomorHp" class="NomorHp">Nomor Handphone</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-transparent"><i class="bi bi-phone"></i></span>
                        <input type="NomorHp" class="form-control bg-transparent" id="NomorHp" placeholder="Masukan Nomor HP" required>
                    </div>
                    <!-- username -->
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-transparent"><i class="bi bi-person-circle"></i></span>
                        <input type="username" class="form-control bg-transparent" id="username" placeholder="Buat Uername" required>
                    </div>

                    <!-- Password Input-->
                    <div class="row">
                        <div class="col">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" class="form-control bg-transparent" placeholder="Password" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="Password" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control bg-transparent" placeholder="Password" aria-label="Last name">
                        </div>
                    </div>
                    <button class="btn btn center-block signin">Daftar Sekarang</button>
                </div>
            </div>
        </div>

    </div>
    <div class="login-right w-50 h-100 position-absolute top-50 end-0 translate-middle-y">
        <div id="carouselExampleIndicators" class="carousel slide ">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-end">
                <div class="carousel-item active">
                    <img src="img/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@endsection