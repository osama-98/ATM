@extends('layouts.auth')

@section('title', 'login')

@section('content')
    <div class="form">
        <form class="login-form" method="POST" action="{{ route('login.store') }}">
            @csrf

            <input type="text" autocomplete="off" placeholder="username" />
            <input type="password" autocomplete="off" placeholder="password" />
            <button>login</button>
            <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
@endsection
