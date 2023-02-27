@extends('layouts.Admins')
@section('title','Manage Produk')

@section('content')
<section class="manage-akun">
    <div class="title">
        <h5>Manage Produk</h5>
    </div>
    <div class="content-wrapper">
        <div class="same-height">
            <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="p-3 mb-5">
                                <div class="add-jadwal">
                                    <div class="form-inpt">
                                        <label for="basicInput" class="form-label">Nama Produk</label>
                                        <input type="text" placeholder="Masukan Nama" class="form-control" id="basicInput">
                                    </div>
                                    <div class="form-inpt">
                                        <label for="basicInput" class="form-label">Kategori</label>
                                        <select class="form-select form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-inpt">
                                        <label for="basicInput" class="form-label">Harga Sewa</label>
                                        <input type="number" placeholder="Masukan Harga" class="form-control" id="basicInput">
                                    </div>
                                    <div class="form-inpt form-control">
                                        <div class="wrap">
                                            <label for="basicInput" class="form-label">Rincian Pesanan</label>
                                            <a href="#" class="add">+</a>
                                        </div>
                                        <div class="inp-group"></div>
                                    </div>
                                    <div class="form-inpt">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-inpt">
                                        <label for="formFile" class="form-label">Upload Gambar</label>
                                        <input class="form-control" type="file" id="files" multiple="multiple" accept="image/jpg, image/png, image/jpeg">
                                        <output id="result" class="img-result">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn mb-2 icon-left  btn-success" type="button "><i class="ti-check"></i>selesai</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-header ">
                        <h4>List Produk</h4>
                    </div>
                    <div class="card-body">
                        <div class="btn-modal">
                            <button class="btn mb-2 icon-left  btn-success" data-bs-toggle="modal" data-bs-target="#largeModal" type="button "><i class="bi bi-plus-lg"></i>Tambah Produk</i></button>
                        </div>
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Sewa</th>
                                    <th>Rincian Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <ul>
                                            <li>Baju = Cardinal</li>
                                            <li>Tenda = ya itulah</li>
                                            <li>rias = wardar</li>
                                        </ul>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</td>
                                    <td>img1.jpg</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary" type="button"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <ul>
                                            <li>Baju = Cardinal</li>
                                            <li>Tenda = ya itulah</li>
                                            <li>rias = wardar</li>
                                        </ul>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</td>
                                    <td>img1.jpg</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary" type="button"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Sewa</th>
                                    <th>Rincian Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection