<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;
use App\Models\Episode;

class Pages extends Component
{
    public $pages, $episodes, $episode_id, $page_number, $page_text, $page_id;
    public $isOpen = 0;

    public function render()
    {
        $this->pages = Page::all();
        $this->episodes = Episode::all();
        return view('livewire.pages');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->episode_id = '';
        $this->page_number = '';
        $this->page_text = '';
        $this->page_id = '';
    }

    public function store()
    {
        $this->validate([
            'episode_id' => 'required',
            'page_number' => 'required|integer',
            'page_text' => 'required',
        ]);

        Page::updateOrCreate(['id' => $this->page_id], [
            'episode_id' => $this->episode_id,
            'page_number' => $this->page_number,
            'page_text' => $this->page_text,
        ]);

        session()->flash('message',
            $this->page_id ? 'Page Updated Successfully.' : 'Page Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $this->page_id = $id;
        $this->episode_id = $page->episode_id;
        $this->page_number = $page->page_number;
        $this->page_text = $page->page_text;

        $this->openModal();
    }

    public function delete($id)
    {
        Page::find($id)->delete();
        session()->flash('message', 'Page Deleted Successfully.');
    }
}
