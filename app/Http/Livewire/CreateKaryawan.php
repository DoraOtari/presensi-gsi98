<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jabatan;
class CreateKaryawan extends Component
{
    public $jabatan;

    public function mount(Jabatan $jabatan)
    {
        $this->jabatan = $jabatan;
        dd($this->jabatan);
    }

    public function render()
    {
        return view('livewire.create-karyawan');
    }
}
