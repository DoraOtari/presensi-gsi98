<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class CreateKaryawan extends Component
{
    public $tgl, $user_id;

    public function buatNik()
    {
        $tgl = str_replace('-','',$this->tgl);
        $nik = $tgl.$this->user_id;
        return $nik;
    }

    public function provinsi()
    {
        $provinsi = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json");
        return $provinsi->collect();
    }

    public function render()
    {
        return view('livewire.create-karyawan', [
            'jabatan' => Jabatan::all(),
            'user' => User::all(),
            'nik' => $this->buatNik(),
            'provinsi' => $this->provinsi(),
        ]);
    }
}