@extends('layouts.auth')

@section('title', 'login')

@section('content')
    <div class="form">
        <form class="login-form" method="POST" action="{{ route('login.store') }}">
            @csrf

            <input class="form-control rounded-0" type="text" autocomplete="off" placeholder="username" name="username" id="username" />
            <input class="form-control rounded-0" type="password" autocomplete="off" placeholder="password" name="password" id="password" />
            <button>login</button>
            <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
@endsection
