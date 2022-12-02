<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersListItem extends Component
{
    public $user;

    protected $rules = [
        'user.name' => 'required',
        'user.username' => 'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user->toArray();
    }

    public function render()
    {
        return view('livewire.users-list-item');
    }

    public function save()
    {
        $this->validate();
        User::findOrFail($this->user['id'])->update([
            'name' => $this->user['name'],
            'username' => $this->user['username'],
        ]);

        $this->dispatchBrowserEvent('success', 'User Saved Successfully');
    }

    public function delete() {
        User::findOrFail($this->user['id'])->delete();
        $this->dispatchBrowserEvent('success', 'User Deleted Successfully');

        $this->emit('refreshUsers');
    }
}
