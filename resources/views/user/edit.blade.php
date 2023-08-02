<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        /* Style the form */
        form {
            width: 50%;
            margin: 0 auto;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #3490dc;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('update-user', ['id' => $user->id]) }}" method="post">
        @csrf
        @method('GET')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ $user->email }}" required>

        <input type="submit" value="Save">
    </form>
</body>
</html>
