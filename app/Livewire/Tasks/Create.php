<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\manage;

class Create extends Component
{
    public $nama;
    public $kelas;
    public $jurusan;
    public $alamat;

    protected $rules = [
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'jurusan' => 'required|string|max:255',
        'alamat' => 'nullable|string',
    ];

    public function save(): void
    {
        $data = $this->validate();
        manage::create($data);
        $this->reset();
        session()->flash('message', 'Data berhasil disimpan.');
    }

    public function render()
    {
        return view('livewire.tasks.create');
    }
}
