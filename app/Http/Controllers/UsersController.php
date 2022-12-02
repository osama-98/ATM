<?php

namespace App\Http\Controllers;

use App\Enums\TransactionType;
use App\Models\Transaction;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function edit($id)
    {
        return view('users.edit', [
            'id' => $id
        ]);
    }

    public function deposit(Request $request)
    {
        if (empty($request->value)) {
            return redirect()->back()->with('message', 'The value is required');
        }

        Transaction::create([
            'user_id' => auth()->id(),
            'value' => $request->value,
            'type' => TransactionType::Deposit
        ]);

        return redirect()->back()->with('message', 'Deposit Success');
    }

    public function withdraw(Request $request)
    {

    }
}
