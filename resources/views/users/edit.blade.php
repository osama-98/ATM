@extends('layouts.dashboard')

@section('content')
    @livewire('user-transactions', ['user' => $id])
@endsection
