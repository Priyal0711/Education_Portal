<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #007bff;
        }

        .container {
            background-color: #f5f5f5;
            padding: 10px;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            background-color: #333;
            color: #fff;
            padding: 5px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .menu a:hover {
            background-color: #555;
        }

        .navbar {
            background-color: #f5f5f5;
            padding: 5px;
        }

        .navbar button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            margin-right: 5px;
            cursor: pointer;
        }

        .navbar .dropbtn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content input {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background: none;
            text-align: left;
            cursor: pointer;
        }

        .dropdown-content input:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>


       
</head>
<body>
    <h1>Welcome: {{Auth::user()->name}}</h1>

    <div class="container">
        <div class="header">
            <div class="menu">
                <a href="{{ url('list-users') }}">List All Users</a>
                
                <a href="{{ url('adduser') }}" >Add User</a>

                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
    </div>
    <div class="navbar">
                
        <button> <a href="{{ route('chapter.show') }}">Chapter</a> </button>
        <button> <a href="{{ route('subject.show') }}">Subject</a> </button>
        <button> <a href="{{ route('standard.show') }}">Standard</a> </button>
        
            
        <div class="dropdown">
            <button class="dropbtn">Other Operations</button>
                <div class="dropdown-content">
                        <input type="submit" name="chap_sub" value="Assign Chapter to Subject">
                        <input type="submit" name="sub_std" value="Assign Subject to Standard">
                        <input type="submit" name="stud_std" value="Assign Student to standard">
                    
                </div>
        </div>
    </div>


</body>
</html>