@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add input fields for user data to be updated -->
        <button type="submit">Update</button>
    </form>
@endsection
