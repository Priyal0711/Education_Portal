<!DOCTYPE html>
<html>
<head>
    <title>List of Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        /* Add border to table and cells */
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        /* Style buttons */
        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-buttons a {
            padding: 4px 8px;
            background-color: #3490dc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }

        .action-buttons a:hover {
            background-color: #2779bd;
        }

        .action-buttons form {
            display: inline-block;
            margin: 0;
        }

        .action-buttons form button {
            padding: 4px 8px;
            background-color: #e53e3e;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .action-buttons form button:hover {
            background-color: #c53030;
        }
    </style>
</head>
<body>
    <h1>List of Registered Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td class="action-buttons">
                    <a href="{{ route('show-user', ['id' => $user->id]) }}">Show</a>
                    <a href="{{ route('edit-user', ['id' => $user->id]) }}">Edit</a>
                    <form action="{{ route('delete-user', ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>         
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
