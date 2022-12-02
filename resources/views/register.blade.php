@extends('layouts.auth')

@section('title', 'register')

@section('content')
    <div class="form">
        <form class="register-form" method="POST" action="{{ route('register.store') }}">
            @csrf

            <input class="form-control @error('name') is-invalid @enderror" type="text" autocomplete="off" placeholder="name" name="name" id="name" />
            @error('name')
            <label for="name" class="text-success">{{ $message }}</label>
            @enderror

            <input class="form-control @error('username') is-invalid @enderror" type="text" autocomplete="off" placeholder="username" name="username" id="username" />
            @error('username')
            <label for="username" class="text-success">{{ $message }}</label>
            @enderror

            <input class="form-control @error('password') is-invalid @enderror" type="password" autocomplete="off" placeholder="password" name="password" id="password" />
            @error('password')
            <label for="password" class="text-success">{{ $message }}</label>
            @enderror

            <input
                class="form-control"
                type="password"
                autocomplete="off"
                placeholder="confirm password"
                name="password_confirmation"
                id="password_confirmation"
            />
            <button>Register</button>
            <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
@endsection
