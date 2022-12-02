@extends('layouts.auth')

@section('title', 'register')

@section('content')
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name" name="name" id="name" />
            <input type="text" placeholder="username" name="username" id="username" />
            <input type="password" autocomplete="off" placeholder="password" name="password" id="password" />
            <input type="password" autocomplete="off" placeholder="confirm password" name="current_password" id="current_password" />
            <button>create</button>
            <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
@endsection
