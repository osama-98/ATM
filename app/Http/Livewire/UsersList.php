<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshUsers' => '$refresh'];

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::users()->withCount(['deposit_transactions', 'withdraw_transactions'])->paginate()
        ]);
    }
}
