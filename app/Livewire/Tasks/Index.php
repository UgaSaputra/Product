<?php

namespace App\Livewire\Tasks;
use App\Models\manage;
use Livewire\WithPagination;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tasks.index',[
            'data' => manage::paginate(2),
        ]);
    }

    public function delete(int $id): Void
    {
        manage::where('id', $id)->delete();
    }
}
