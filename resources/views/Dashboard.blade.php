@extends('layouts.layouts')

@section('content')
<div class="body-sidebar">
    <div class="sidebar">
        <div class="logo-content ">
            <div class="logo d-flex">
                <i class="bi bi-emoji-heart-eyes-fill"></i>
                <div class="logo-name">Moelia Design</div>
            </div>
            <i class="bi bi-list" id="btn"></i>
        </div>
        <!-- <div class="src">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="search...">
        </div> -->
        <ul>
            <li>
                <a href="#">
                    <i class="bi bi-speedometer2"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span data-bs-toggle="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-person-square"></i>
                    <span class="link_name">Manage Akun</span>
                </a>
                <span data-bs-toggle="tooltip">Manage Akun</span>
            </li>
        </ul>
    </div>
</div>
<!-- <div class="home-content">Konten Dashboard</div> -->
@endsection