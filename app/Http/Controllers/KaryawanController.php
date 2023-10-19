<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

    public function index()
    {
        return view('karyawan.index');
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        Karyawan::create([
            'jabatan_id' => $request->jabatan_id,
            'user_id' => $request->user_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'tgl_mulai_kerja' => $request->tgl_mulai_kerja,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
        ]);

        return redirect('/karyawan')
                ->with('pesan', 'Berhasil tambah karyawan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
