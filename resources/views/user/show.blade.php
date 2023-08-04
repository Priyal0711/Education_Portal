@extends('layouts.app')

@section('content')
    <h3>User Details</h3>
    <!-- Display user details here -->
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Mobile: {{ $user->mobile }}</p>
    <p>city: {{ $user->city }}</p>

@endsection
