<?php

namespace App\Http\Livewire;

use App\Enums\UserStatus;
use App\Models\User;
use Livewire\Component;

class UsersListItem extends Component
{
    public $user;
    public $active;

    protected $rules = [
        'user.name' => 'required',
        'user.username' => 'required',
        'active' => 'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user->toArray();
        $this->active = $user->isActive();
    }

    public function render()
    {
        return view('livewire.users-list-item');
    }

    public function save()
    {
        $this->validate();
        info($this->active);
        User::findOrFail($this->user['id'])->update([
            'name' => $this->user['name'],
            'username' => $this->user['username'],
            'status' => $this->active ? UserStatus::Active : UserStatus::Inactive,
        ]);

        $this->dispatchBrowserEvent('success', 'User Saved Successfully');
    }

    public function delete()
    {
        User::findOrFail($this->user['id'])->delete();
        $this->dispatchBrowserEvent('success', 'User Deleted Successfully');

        $this->emit('refreshUsers');
    }
}
