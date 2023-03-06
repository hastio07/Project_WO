<!-- modal untuk hapus -->
@foreach ($data_pegawai as $value)


<div class="Modal">
    <div class="modal fade" id="smallModal{{ $value->id }}" tabindex="-1" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="smallModalLabel">Peringatan!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Yakin Ingin Menghapusnya?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <form action="{{ route('managepegawai.destroy', $value->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">YA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- end modal -->
@foreach ($data_pegawai as $value)
<form action="{{ route('managepegawai.update', $value->id) }}" method="post">
    @method('put')
    @csrf
    <div class="Modal">
        <div class="modal fade" id="UpdateModal{{ $value->id }}" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallModalLabel">Ubah Data Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="p-3 mb-5">
                            <div class="add-pegawai">
                                <div class="form-inpt">
                                    <label for="basicInput" class="form-label">Nama Pegawai</label>
                                    <input type="text" placeholder="Masukan Nama" class="form-control" id="nama" name="nama" value="{{ $value->nama }}">
                                </div>
                                <div class="form-inpt">
                                    <label for="basicInput" class="form-label">Umur</label>
                                    <input type="number" placeholder="Masukan Umur" class="form-control" id="umur" name="umur" value="{{  $value->umur }}">
                                </div>
                                <div class="form-inpt">
                                    <label for="basicInput" class="form-label">Gaji</label>
                                    <input type="number" placeholder="Masukan Gaji" class="form-control" id="gaji" name="gaji" value="{{ $value->gaji }}">
                                </div>
                                <div class="form-inpt">
                                    <label for="basicInput" class="form-label">Jabatan</label>
                                    <input type="Text" placeholder="Masukan Jabatan" class="form-control" id="jabatan" name="jabatan" value="{{ $value->jabatan }}">
                                </div>
                                <div class="form-inpt">
                                    <label for="basicInput" class="form-label">No. Telephone</label>
                                    <input type="Text" placeholder="Masukan No.Telephone" class="form-control" id="no_telepon" name="no_telepon" value="{{ $value->no_telepon }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button class="btn icon-left  btn-success" type="submit"><i class="ti-check"></i>selesai</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>


@endforeach
