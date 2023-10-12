<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JabatanController extends Controller
{
    public function tampil()
    {
        $jabatan = DB::table('jabatan')->get(); //perintah ambil semua data di database
        return view('jabatan.tampil', compact('jabatan'));
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

    public function hapus($id)
    {
        DB::table('jabatan')->where('id', $id)->delete();

        return redirect('/jabatan/tampil')->with('pesan', 'Berhasil hapus data');
    }

    public function ubah($id)
    {
        $jabatan = DB::table('jabatan')->find($id);
        return view('jabatan.ubah', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        DB::table('jabatan')->where('id', $id)->update([
            'nama' => $request->nama,
            'gaji' => $request->gaji,
            'status' => $request->status,
        ]); //kode update data di tabel jabatan

        return redirect('/jabatan/tampil')
                ->with('pesan', ' Berhasil ubah data'); //kode untuk mengalihkan ke halaman tampil disertai pesan
    }
}
