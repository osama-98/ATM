@extends('layouts.auth')

@section('title', 'register')

@section('content')
    <div class="form">
        <form class="register-form" method="POST" action="{{ route('login.store') }}">
            @csrf

            <input class="form-control @error('name') is-invalid @enderror" type="text" autocomplete="off" placeholder="name" name="name" id="name" />
            @error('name')
            <label for="name" class="invalid-feedback">{{ $message }}</label>
            @enderror

            <input class="form-control @error('username') is-invalid @enderror" type="text" autocomplete="off" placeholder="username" name="username" id="username" />
            @error('username')
            <label for="username" class="invalid-feedback">{{ $message }}</label>
            @enderror

            <input class="form-control @error('password') is-invalid @enderror" type="password" autocomplete="off" placeholder="password" name="password" id="password" />
            @error('password')
            <label for="password" class="invalid-feedback">{{ $message }}</label>
            @enderror

            <input
                class="form-control @error('current_password') is-invalid @enderror"
                type="password"
                autocomplete="off"
                placeholder="confirm password"
                name="current_password"
                id="current_password"
            />
            @error('current_password')
            <label for="current_password" class="invalid-feedback">{{ $message }}</label>
            @enderror

            <button>Register</button>
            <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
@endsection
