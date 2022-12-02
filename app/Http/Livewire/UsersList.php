<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    protected $listeners = ['refreshUsers' => '$refresh'];

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::users()->withCount(['deposit_transactions', 'withdraw_transactions'])->paginate()
        ]);
    }
}
