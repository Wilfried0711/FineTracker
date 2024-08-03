@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to FineTracker</h1>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
</div>
@endsection
