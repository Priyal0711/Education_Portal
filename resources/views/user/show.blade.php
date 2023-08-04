@extends('layouts.app')

@section('content')
    <h1>User Details</h1>
    <!-- Display user details here -->
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Mobile: {{ $user->mobile }}</p>
    <p>city: {{ $user->city }}</p>

@endsection
