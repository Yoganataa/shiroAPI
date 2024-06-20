<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReadingHistory;
use App\Models\User;
use App\Models\Episode;

class ReadingHistories extends Component
{
    public $readingHistories, $users, $episodes, $user_id, $episode_id, $last_page_read, $read_time, $reading_history_id;
    public $isOpen = 0;

    public function render()
    {
        $this->readingHistories = ReadingHistory::all();
        $this->users = User::all();
        $this->episodes = Episode::all();
        return view('livewire.reading_histories');
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
        $this->user_id = '';
        $this->episode_id = '';
        $this->last_page_read = '';
        $this->read_time = '';
        $this->reading_history_id = '';
    }

    public function store()
    {
        $this->validate([
            'user_id' => 'required',
            'episode_id' => 'required',
            'last_page_read' => 'required|integer',
            'read_time' => 'required|date',
        ]);

        ReadingHistory::updateOrCreate(['id' => $this->reading_history_id], [
            'user_id' => $this->user_id,
            'episode_id' => $this->episode_id,
            'last_page_read' => $this->last_page_read,
            'read_time' => $this->read_time,
        ]);

        session()->flash('message',
            $this->reading_history_id ? 'Reading History Updated Successfully.' : 'Reading History Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $readingHistory = ReadingHistory::findOrFail($id);
        $this->reading_history_id = $id;
        $this->user_id = $readingHistory->user_id;
        $this->episode_id = $readingHistory->episode_id;
        $this->last_page_read = $readingHistory->last_page_read;
        $this->read_time = $readingHistory->read_time;

        $this->openModal();
    }

    public function delete($id)
    {
        ReadingHistory::find($id)->delete();
        session()->flash('message', 'Reading History Deleted Successfully.');
    }
}
