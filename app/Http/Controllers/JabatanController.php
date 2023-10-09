<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JabatanController extends Controller
{
    public function tampil()
    {
        return view('jabatan.tampil');
    }

    public function buat()
    {
        return view('jabatan.buat');
    }

    public function simpan(Request $request)
    {
       DB::table('jabatan')->insert([
        'nama'      => $request->nama,
        'gaji'      => $request->gaji,
        'status'    => $request->status,
       ]); //fungsi simpan data ke tabel jabatan

       //perintah untuk mengarahkan ke halaman lain beserta notifikasi pesan
       return redirect('jabatan/tampil')->with('pesan', 'Berhasil simpan data jabatan');
    }
}
