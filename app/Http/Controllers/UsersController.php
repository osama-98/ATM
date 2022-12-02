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
        if (empty($request->value) || $request->value <= 0) {
            return redirect()->back()->with('error', 'The value is required');
        }

        Transaction::create([
            'user_id' => auth()->id(),
            'value' => $request->value,
            'type' => TransactionType::Deposit
        ]);

        auth()->user()->balance += $request->value;
        auth()->user()->save();

        return redirect()->back()->with('success', 'Deposit Success');
    }

    public function withdraw(Request $request)
    {
        if (empty($request->value) || $request->value <= 0) {
            return redirect()->back()->with('error', 'The value is required');
        }

        if ($request->value > auth()->user()->balance) {
            return redirect()->back()->with('error', 'Your balance is less than the amount');
        }

        Transaction::create([
            'user_id' => auth()->id(),
            'value' => $request->value,
            'type' => TransactionType::Withdraw
        ]);

        auth()->user()->balance -= $request->value;
        auth()->user()->save();

        return redirect()->back()->with('success', 'Withdraw Success');
    }
}
