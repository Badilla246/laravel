<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }
    .navbar {
    background-color: #ffffff;
    height: 100px;
    transition: color 0.3s ease, transform 0.3s ease;
    }
    .navbar:hover{
        border: 2px solid black;
        box-shadow: 0px 0px 5px 5px black;
        transform: scale(1.1);

    }
    .navbar .nav-link {
        color: #000000;
        font-size: 20px;
        border: 1px solid black;
        margin: 15px;
        border-radius: 10px;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .navbar .nav-link:hover{
        color: #ededed;
        transform: scale(1.1);
    }

    .navbar .nav-link.active {
        color: #ffffff;
    }

    .container {
        margin-top: 20px;
    }

    .table {
        margin-top: 20px;
    }

    .modal-title {
        color: #000000;
    }

    .success {
        color: #28a745;
    }

    .btn-primary {
        background-color: #007bff;
        color: #ffffff;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #ffffff;
    }

    .btn-primary:hover,
    .btn-secondary:hover {
        opacity: 0.8;
    }

    tr{
        text-align: center;
    }
    .nav{
        background-color: rgb(178, 178, 123);
        border-radius: 15px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center" style="background-color: #dcc699">
        <ul class="nav  ">
            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('bands') ? 'active' : ''}}" href="{{url('/bands')}}">Bands </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('venues') ? 'active' : ''}}" href="{{url('/venues')}}">Venues</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('performances') ? 'active' : ''}}" href="{{url('/performances')}}">Performances</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('attendees') ? 'active' : ''}}" href="{{url('/attendees')}}">Attendees</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
