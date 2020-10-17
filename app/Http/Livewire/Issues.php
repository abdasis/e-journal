<?php

namespace App\Http\Livewire;

use App\Models\journal;
use Livewire\Component;

class Issues extends Component
{
    public function render()
    {
        $journal = journal::latest()->get();
        return view('livewire.issues', [
            'journals' => $journal
        ]);
    }
}
