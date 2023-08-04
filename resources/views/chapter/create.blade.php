@extends('layouts.app')

@section('content')

<h3>List of All Chapters</h3>
<form action="{{ route('chapter.store') }}" method="POST">
    @csrf
    <label for="chapter">Add New Chapter : </label>
    <input type="text" name="chapter">
    <input type="submit" name="add_chap" value="Add Chapter">
</form>
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Chapter</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    @forelse ($chapter as $chap)
    <tr>
        <td>
            {{ $chap->id }}
        </td>
        <td>
            {{ $chap->chapter }}
        </td>
        <td>
            <button> <a href="{{ route('chapter.edit', $chap->id) }}"> Edit </a> </button>
        </td>
        <td>
            <form action="{{ route('chapter.delete', $chap->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    <tr>
        @empty
        <div>There are no chapters!</div>
    </tr>
    @endforelse
</table>

@endsection