<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Header style */
        h1 {
            text-align: center;
            margin-top: 40px;
        }

        /* Navigation menu style */
        .menu {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .menu form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .menu input[type="submit"] {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #3490dc;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Navbar style */
        .navbar {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .navbar form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .navbar input[type="submit"] {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #38a169;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Dropdown style */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-right: 10px;
        }

        .dropbtn {
            padding: 10px 20px;
            background-color: #6b46c1;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9fafb;
            min-width: 160px;
            z-index: 1;
            border-radius: 4px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px 20px;
            text-align: left;
            background-color: transparent;
            color: #1a202c;
            border: none;
            border-radius: 0;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .dropdown-content input[type="submit"]:hover {
            background-color: #e2e8f0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Fixed menu style */
        .sm\\:fixed {
            position: fixed;
        }

        .sm\\:top-0 {
            top: 0;
        }

        .sm\\:right-0 {
            right: 0;
        }

        .z-10 {
            z-index: 10;
        }

        .p-6 {
            padding: 24px;
        }

        .text-right {
            text-align: right;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-gray-600 {
            color: #718096;
        }

        .hover:text-gray-900:hover {
            color: #2d3748;
        }

        .dark:text-gray-400 {
            color: #cbd5e0;
        }

        .dark:hover:text-white:hover {
            color: #ffffff;
        }

        .focus:outline {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .focus:outline-red-500:focus {
            outline-color: #f56565;
        }

        .link-spacing {
            margin-right: 16px;
        }
    </style>
</head>
<body>
    <h1>Welcome: {{Auth::user()->name}}</h1>

    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">

        <a href="{{ url('list-users') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 link-spacing">List All Users</a>
        
        <a href="{{ url('adduser') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 link-spacing">Add User</a>

        <a href="{{ url('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
    </div>
    <div class="menu">
        <form action="" method="post">
            <input type="submit" name="std" value="Standard">
            <input type="submit" name="sub" value="Subject">
            <input type="submit" name="chap" value="Chapter">
        </form>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Other Operations</button>
        <div class="dropdown-content">
            <form action="" method="post">
                <input type="submit" name="chap_sub" value="Assign Chapter to Subject">
                <input type="submit" name="sub_std" value="Assign Subject to Standard">
                <input type="submit" name="stud_std" value="Assign Student to standard">
            </form>
        </div>
    </div>


</body>
</html>
