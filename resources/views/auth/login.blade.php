@extends('layouts.app')

@section('title', 'Login')
    
@section('content')
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
            >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
            >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
