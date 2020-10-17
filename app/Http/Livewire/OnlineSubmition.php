<?php

namespace App\Http\Livewire;

use App\Models\journal;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class OnlineSubmition extends Component
{
    use WithFileUploads;
    public $journal_title, $journal_subtitle, $abstract, $type, $keyword, $file_journal;

    public function rules()
    {
        return [
            'journal_title' => 'required|max:250',
            'journal_subtitle' => 'required:max:250',
            'abstract'  => 'required',
            'type'  => 'required',
            'keyword'   => 'required'
        ];
    }

    public function store()
    {
        $journal = new journal();
        $journal->journal_title = $this->journal_title;
        $journal->slug = Str::slug($this->journal_title);
        $journal->journal_subtitle = $this->journal_subtitle;
        $journal->abstract = $this->abstract;
        $journal->type = $this->type;
        $journal->keyword = $this->keyword;
        $journal->created_by = 'ADMIN';
        $journal->file_journal = $this->file_journal->storeAs('public', $this->file_journal->getClientOriginalName());
        $journal->ukuran_file = $this->file_journal->getSize();
        $journal->save();
        $this->emit('success', ['type'  => 'success', 'title' => 'Berhasil', 'message' => 'Terimakasih journal anda sudah berhasil di submit']);
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->journal_title = null;
        $this->journal_subtitle = null;
        $this->abstract = null;
        $this->type = null;
        $this->keyword = null;
    }
    public function render()
    {
        return view('livewire.online-submition');
    }
}
