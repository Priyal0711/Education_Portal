<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
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
            color: green;
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
    <!-- <h2>Welcome: {{ Auth::user()->name }}</h2>
    @if (Auth::user()->userAccess)
        <p>Role: {{ Auth::user()->userAccess->access_type }}</p>
    @endif -->

    

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
                
        <button> <a href="{{ route('chapter.show') }}" style="color:white">Chapter</a> </button>
        <button> <a href="{{ route('subject.show') }}" style="color:white">Subject</a> </button>
        <button> <a href="{{ route('standard.show') }}" style="color:white">Standard</a> </button>
        

   
    
        
        <!-- $accessType = Auth::user_access()->userAccess->access_type; -->
        
    
    <!-- @if($accessType == "admin" || $accessType == "teacher") -->
        <div class="dropdown">
            <button class="dropbtn">Other Operations</button>
            <div class="dropdown-content">
                <button><a href="{{ route('assign_chapter.show') }}">Assign Chapter to Subject</a></button>
                <button><a href="{{ route('assign_subject.show') }}">Assign Subject to Standard</a></button>
                <button><a href="{{ route('assign_student.show') }}">Assign Student to Standard</a></button>
            </div>
        </div>
    <!-- @endif -->
    
   
</div>
</body>
</html>