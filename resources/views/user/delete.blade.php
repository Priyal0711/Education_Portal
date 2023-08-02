
<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <p>Are you sure you want to delete the user '{{ $user->name }}'?</p>
    <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <a href="{{ route('list-users') }}">Cancel</a>
</body>
</html>
