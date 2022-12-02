<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTransactions extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public  $user;

    public function mount($user)
    {
        $this->user = User::findOrFail($user);
    }

    public function render()
    {
        return view('livewire.user-transactions', [
            'transactions' => Transaction::select(['type', 'value'])->paginate()
        ]);
    }
}
