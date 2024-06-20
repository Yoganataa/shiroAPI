<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Episode;
use App\Models\Webtoon;

class Episodes extends Component
{
    public $episodes, $webtoons, $webtoon_id, $episode_title, $episode_number, $status, $episode_id;
    public $isOpen = 0;

    public function render()
    {
        $this->episodes = Episode::all();
        $this->webtoons = Webtoon::all();
        return view('livewire.episodes');
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
        $this->webtoon_id = '';
        $this->episode_title = '';
        $this->episode_number = '';
        $this->status = '';
        $this->episode_id = '';
    }

    public function store()
    {
        $this->validate([
            'webtoon_id' => 'required',
            'episode_title' => 'required',
            'episode_number' => 'required|integer',
            'status' => 'required',
        ]);

        Episode::updateOrCreate(['id' => $this->episode_id], [
            'webtoon_id' => $this->webtoon_id,
            'episode_title' => $this->episode_title,
            'episode_number' => $this->episode_number,
            'status' => $this->status,
        ]);

        session()->flash('message',
            $this->episode_id ? 'Episode Updated Successfully.' : 'Episode Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $episode = Episode::findOrFail($id);
        $this->episode_id = $id;
        $this->webtoon_id = $episode->webtoon_id;
        $this->episode_title = $episode->episode_title;
        $this->episode_number = $episode->episode_number;
        $this->status = $episode->status;

        $this->openModal();
    }

    public function delete($id)
    {
        Episode::find($id)->delete();
        session()->flash('message', 'Episode Deleted Successfully.');
    }
}
