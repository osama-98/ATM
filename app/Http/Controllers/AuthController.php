<?php

namespace App\Http\Controllers;

use App\Enums\UserStatus;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'status' => UserStatus::Active])) {
            $default = auth()->user()->isAdmin() ? 'admin.home' : 'home';
            return redirect()->intended(route($default));
        }

        return redirect()->back()->withInput()->with('message', __('auth.failed'));
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
