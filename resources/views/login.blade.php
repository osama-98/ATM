@extends('layouts.auth')

@section('content')
    <div class="form">
        <form class="login-form">
            <input type="text" placeholder="username" />
            <input type="password" placeholder="password" />
            <button>login</button>
            <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
@endsection
