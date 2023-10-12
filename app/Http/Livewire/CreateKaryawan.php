<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jabatan;
class CreateKaryawan extends Component
{
    public function render()
    {
        return view('livewire.create-karyawan', ['jabatan' => Jabatan::all()]);
    }
}
