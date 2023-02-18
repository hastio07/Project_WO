@extends('layouts.layouts')

@section('content')
<section class="container login d-flex shadow-lg p-3 mb-5 bg-body rounded position-absolute top-50 start-50 translate-middle">
    <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-sm-6">
                <div class="header">
                    <h1 class="text-center">Selamat Datang!</h1>
                </div>
                <div class="login-form">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-transparent"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control text-decoration-none bg-transparent" id="email" placeholder="Masukan Email" required>
                    </div>
                    <label for="email" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-transparent"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control bg-transparent" id="exampleInputPassword1" placeholder="Masukan Password" required>
                    </div>
                    <a href="#" class="text-decoration-none text-center">Lupa Password</a>
                    <button class="btn btn center-block signin"> LogIn</button>
                    <div class="text-center">
                        <span class="d-inline text-center">Tidak Punya Akun? <a href="#" class="d-inline text-decoration-none text-danger">Daftar Sekarang!</a></span>
                    </div>
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