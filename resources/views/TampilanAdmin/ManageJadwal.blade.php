@extends('layouts.Admins')
@section('title','Manage Jadwal')

@section('content')
<section class="manage-akun">
    <div class="title">
        <h5>Manage Jadwal</h5>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Rincian Jadwal Kegiatan</h4>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>Nama Customer</th>
                                    <th>Kegiatan</th>
                                    <th>Lokasi</th>
                                    <th>Jam</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>10:10</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-warning me-md-2" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>13:00</td>
                                    <td>2011/07/25</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-warning me-md-2" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Customer</th>
                                    <th>Kegiatan</th>
                                    <th>Lokasi</th>
                                    <th>Jam</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-style bg-white shadow p-3 mb-5 bg-body rounded">
                    <div class="card-header bg-white">
                        <h4 class="text-center">Tambah Jadwal</h4>
                    </div>
                    <div class="add-jadwal">
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Nama</label>
                            <input type="text" placeholder="Masukan Nama" class="form-control" id="basicInput">
                        </div>
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Alamat</label>
                            <input type="text" placeholder="Masukan Alamat" class="form-control" id="basicInput">
                        </div>
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Jam Kegiatan</label>
                            <input type="time" id="appt" name="appt" min="09:00" max="18:00" required class="form-control">

                        </div>
                        <div class="form-inpt">
                            <label for="datepicker-icon" class="form-label">Tentukan Tanggal</label>
                            <div class="input-group input-append date" data-date-format="dd-mm-yyyy">
                                <input class="form-control" type="text" readonly="" autocomplete="off" placeholder="Masukan Tanggal">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="far fa-calendar-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-inpt">
                            <label for="exampleFormControlTextarea1" class="form-label">Kegiatan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="btn-add row justify-content-center align-content-center">
                        <button class="btn mb-2 icon-left  btn-success" type="button "><i class="ti-check"></i>selesai</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection