<?php

namespace App\Http\Livewire;

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
        # code...
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }
}
