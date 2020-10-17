<?php

namespace App\Http\Livewire\Journal;

use App\Models\journal;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Show extends Component
{
    public $journal;

    public function mount($slug)
    {
        $this->journal = journal::where('slug', $slug)->first();
    }

    public function download()
    {
        return Storage::disk('public')->download($this->journal->file_journal);
    }
    public function render()
    {
        return view('livewire.journal.show');
    }
}
