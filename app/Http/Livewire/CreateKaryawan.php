<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class CreateKaryawan extends Component
{
    public $tgl,$user_id, $provinsi_id;

    public function buatNik()
    {
      $tgl = str_replace('-','',$this->tgl);
      $nik = $tgl.$this->user_id;
      return $nik;
    }

    public function provinsi(){
        $provinsi = HTTP::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        return $provinsi->collect();
    }

    public function kota()
    {
        $provinsi = explode('/',$this->provinsi_id);
        $kota = HTTP::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/'.$provinsi[0].'.json');
        return $kota->collect();
    }

    public function render()
    {
        return view('livewire.create-karyawan',[
          'jabatan' => Jabatan::all(),
          'user'    => User::all(),
          'provinsi' => $this->provinsi(),
          'nik'     => $this->buatNik(),
          'kota'    => $this->kota(),
        ]);
    }
}