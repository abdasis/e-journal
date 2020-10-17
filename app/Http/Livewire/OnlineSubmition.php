<?php

namespace App\Http\Livewire;

use App\Models\journal;
use Livewire\Component;

class OnlineSubmition extends Component
{
    public $journal_title, $journal_subtitle, $abstract, $type, $keyword;

    protected $listeners = [
        'abstract' => 'getAbstract'
    ];

    public function getAbstract($abstract)
    {
        dd($abstract);
    }

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
        $journal->journal_subtitle = $this->journal_subtitle;
        $journal->abstract = $this->abstract;
        $journal->type = $this->type;
        $journal->keyword = $this->keyword;
        $journal->created_by = 'ADMIN';
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
