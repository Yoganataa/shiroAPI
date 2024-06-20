<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users, $name, $username, $role, $image, $date_of_birth, $email, $password, $user_id;
    public $isOpen = 0;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users');
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
        $this->name = '';
        $this->username = '';
        $this->role = '';
        $this->image = '';
        $this->date_of_birth = '';
        $this->email = '';
        $this->password = '';
        $this->user_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'role' => 'required|in:admin,user',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'username' => $this->username,
            'role' => $this->role,
            'image' => $this->image,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('message',
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->role = $user->role;
        $this->image = $user->image;
        $this->date_of_birth = $user->date_of_birth;
        $this->email = $user->email;

        $this->openModal();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
