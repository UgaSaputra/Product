<?php

namespace App\Livewire\Tasks;
use App\Models\manage;

use Livewire\Component;

class Edit extends Component
{
    public string $nama = '';
    public string $kelas = '';
    public string $jurusan = '';
    public string $alamat = '';

    public manage $data;

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ];
    }

    public function mount(manage $data): Void
    {
        $this->data = $data;
        $this->nama = $data->nama;
        $this->kelas = $data->kelas;
        $this->jurusan = $data->jurusan;
        $this->alamat = $data->alamat;
    }

    public function save()
    {
        $data = $this->validate();
        $this->data->update($data);
        return redirect()->route('tasks.index');
    }

    public function render()
    {
        return view('livewire.tasks.edit');
    }
}
