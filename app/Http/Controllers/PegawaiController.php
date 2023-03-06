<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pegawai = pegawai::get();
        return view('TampilanAdmin.ManagePegawai', compact('data_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('umur', $request->umur);
        Session::flash('gaji', $request->gaji);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('no_telepon', $request->no_telepon);

        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'gaji' => 'required',
            'jabatan' => 'required',
            'no_telepon' => 'required|unique:pegawai,no_telepon',
        ], [
            'nama.required' => "Nama Wajib Diisi",
            'umur.required' => "Umur Wajib Diisi",
            'gaji.required' => "Gaji Wajib Diisi",
            'jabatan.required' => "Jabatan Wajib Diisi",
            'no_telepon.required' => "No. Telephone Wajib Diisi",
            'no_telepon.unique' => "No. Telephone Sudah Ada",
        ]);
        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'gaji' => $request->gaji,
            'jabatan' => $request->jabatan,
            'no_telepon' => $request->no_telepon,
        ];
        pegawai::create($data);
        return redirect('/managepegawai')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        Session::flash('nama', $request->nama1);
        Session::flash('umur', $request->umur1);
        Session::flash('gaji', $request->gaji1);
        Session::flash('jabatan', $request->jabatan1);
        Session::flash('no_telepon', $request->no_telepon1);

        $data = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'gaji' => 'required',
            'jabatan' => 'required',
            'no_telepon' => 'required|unique:pegawai,no_telepon,' . $id,
        ], [
            'nama.required' => "Nama Wajib Diisi",
            'umur.required' => "Umur Wajib Diisi",
            'gaji.required' => "Gaji Wajib Diisi",
            'jabatan.required' => "Jabatan Wajib Diisi",
            'no_telepon.required' => "No. Telephone Wajib Diisi",
            'no_telepon.unique' => "No. Telephone Sudah Ada",
        ]);

        pegawai::where('id', $id)->update($data);
        return redirect('/managepegawai')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = pegawai::findOrFail($id);
        $value->delete();
        return redirect('/managepegawai')->with('success', 'Data Berhasil DiHapus!');
    }
}
