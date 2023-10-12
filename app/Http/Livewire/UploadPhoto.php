<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $foto;

    public function updatedFoto()
    {
        $this->validate([
            'foto' => 'image|max:1024', //validasi file yang masuk
        ],[
            'foto.max' => 'Foto tidak boleh lebih dari 1Mb'
        ]);
    }

    public function simpan()
    {
        // dd($this->foto);
        $foto = $this->foto->store('Avatars'); //simpan file foto di folder avatars

        User::where('id', auth()->user()->id)->update([
            'foto_profil' => $foto,
        ]); // masukan nama foto ke tabel user

        session()->flash('pesan', 'Berhasil Upload Foto Profil'); // mengirim pesan jika berhasil upload
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }
}
