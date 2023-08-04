@extends('layouts.app')

@section('content')

<h3>List of All Standard</h3>
<form action="{{ route('standard.store') }}" method="POST">
    @csrf
    <label for="standard">Add New Subject : </label>
    <input type="text" name="standard">
    <input type="submit" name="add_std" value="Add Standard">
</form>
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Standard</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    @forelse ($standard as $std)
    <tr>
        <td>
            {{ $std->id }}
        </td>
        <td>
            {{ $std->standard }}
        </td>
        <td>
            <button> <a href="{{ route('standard.edit', $std->id) }}"> Edit </a> </button>
        </td>
        <td>
            <form action="{{ route('standard.delete', $std->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    <tr>
        @empty
        <div>There are no standards!</div>
    </tr>
    @endforelse
</table>

@endsection