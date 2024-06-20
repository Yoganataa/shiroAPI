<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Webtoon;

class Favorites extends Component
{
    public $favorites, $users, $webtoons, $user_id, $webtoon_id, $favorite_id;
    public $isOpen = 0;

    public function render()
    {
        $this->favorites = Favorite::all();
        $this->users = User::all();
        $this->webtoons = Webtoon::all();
        return view('livewire.favorites');
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
        $this->webtoon_id = '';
        $this->favorite_id = '';
    }

    public function store()
    {
        \Log::info('Store method called'); 
    
        $this->validate([
            'user_id' => 'required',
            'webtoon_id' => 'required',
        ]);
    
        try {
            Favorite::updateOrCreate(['id' => $this->favorite_id], [
                'user_id' => $this->user_id,
                'webtoon_id' => $this->webtoon_id,
            ]);
    
            session()->flash('message',
                $this->favorite_id ? 'Favorite Updated Successfully.' : 'Favorite Created Successfully.');
    
        } catch (\Exception $e) {
            \Log::error('Error saving favorite: ' . $e->getMessage()); 
            session()->flash('error', 'Error saving favorite');
        }
    
        $this->closeModal();
        $this->resetInputFields();
    }
    

    public function edit($id)
    {
        $favorite = Favorite::findOrFail($id);
        $this->favorite_id = $id;
        $this->user_id = $favorite->user_id;
        $this->webtoon_id = $favorite->webtoon_id;

        $this->openModal();
    }

    public function delete($id)
    {
        Favorite::find($id)->delete();
        session()->flash('message', 'Favorite Deleted Successfully.');
    }
}
