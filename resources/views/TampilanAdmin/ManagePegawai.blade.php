@extends('layouts.Admins')
@section('title','Manage Pegawai')
@section('content')



<section class="manage-pegawai">
    <div class="title">
        <h5>Manage Pegawai</h5>
    </div>
    @if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <p>Lengkapi Data Secara lengkap!</p>
            <ul style="list-style:none;" class="pt=10">
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="content-wrapper">
        <div class="same-height">
            <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="/managepegawai" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Daftar Pegawai</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="p-3 mb-5">
                                    <div class="add-pegawai">
                                        <div class="form-inpt">
                                            <label for="basicInput" class="form-label">Nama Pegawai</label>
                                            <input type="text" placeholder="Masukan Nama" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}">
                                        </div>
                                        <div class="form-inpt">
                                            <label for="basicInput" class="form-label">Umur</label>
                                            <input type="number" placeholder="Masukan Umur" class="form-control" id="umur" name="umur" value="{{ Session::get('umur') }}">
                                        </div>
                                        <div class="form-inpt">
                                            <label for="basicInput" class="form-label">Gaji</label>
                                            <input type="number" placeholder="Masukan Gaji" class="form-control" id="gaji" name="gaji" value="{{ Session::get('gaji') }}">
                                        </div>
                                        <div class="form-inpt">
                                            <label for="basicInput" class="form-label">Jabatan</label>
                                            <input type="Text" placeholder="Masukan Jabatan" class="form-control" id="jabatan" name="jabatan" value="{{ Session::get('jabatan') }}">
                                        </div>
                                        <div class="form-inpt">
                                            <label for="basicInput" class="form-label">No. Telephone</label>
                                            <input type="Tel" placeholder="Masukan No.Telephone" class="form-control" id="no_telepon" name="no_telepon" value="{{ Session::get('no_telepon') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn mb-2 icon-left  btn-success" type="submit" name="submit"><i class="ti-plus"></i>Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-header ">
                        <h4>List Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <div class="btn-modal">
                            <button class="btn mb-2 icon-left  btn-success" data-bs-toggle="modal" data-bs-target="#largeModal" type="button "><i class="bi bi-plus-lg"></i>Tambah Pegawai</i></button>
                        </div>
                        <table id="example2" class="table display text-center">
                            <thead>
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <th>Umur</th>
                                    <th>Gaji</th>
                                    <th>Jabatan</th>
                                    <th>No.Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_pegawai as $value)
                                <tr>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->umur }}</td>
                                    <td>{{ $value->gaji }}</td>
                                    <td>{{ $value->jabatan }}</td>
                                    <td>{{ $value->no_telepon }}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal{{ $value->id }}" type="button"><i class="bi bi-trash"></i></button>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#UpdateModal{{ $value->id }}" type="button"><i class="bi bi-pencil-square"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Pegawai</th>
                                    <th>Umur</th>
                                    <th>Gaji</th>
                                    <th>Jabatan</th>
                                    <th>No.Telepon</th>
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
@include('layouts.Modal')
@endsection
