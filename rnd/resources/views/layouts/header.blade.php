<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Random</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    @auth
        <a class="navbar-nav" href="{{ route('wall') }}">
            <img class="logo" src="/img/logo.png" alt="logo" >
        </a>
    @endauth

    @guest
        <a class="navbar-nav" href="{{ route('home') }}">
            <img class="logo" src="/img/logo.png" alt="logo" >
        </a>
    @endguest

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">

            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.show', auth()->user()) }}">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logOut') }}">Logout</a>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logIn') }}">Log in</a>
                </li>
             @endguest
        </ul>
    </div>
</nav>



@yield('content')
</body>

<foother>
    <div class="chngbtn">
        <button id="btn-1" class="chan"></button>
        <button id="btn-2" class="chan"></button>
        <button id="btn-3" class="chan"></button>
        <button id="btn-4" class="chan"></button>
        <button id="btn-5" class="chan"></button>
    </div>

    <script>
        let btn1 = document.getElementById('btn-1');
        let btn2 = document.getElementById('btn-2');
        let btn3 = document.getElementById('btn-3');
        let btn4 = document.getElementById('btn-4');
        let btn5 = document.getElementById('btn-5');

        btn1.addEventListener('click',() => {
            document.body.style.backgroundImage = "url('../img/eroSenin.jpg')";
        });

        btn2.addEventListener('click',() => {
            document.body.style.backgroundImage = "url('../img/jungle.jpg')";
        });

        btn3.addEventListener('click',() => {
            document.body.style.backgroundImage = "url('../img/ship.jpg')";
        });

        btn4.addEventListener('click',() => {
            document.body.style.backgroundImage = "url('../img/space.jpg')";
        });

        btn5.addEventListener('click',() => {
            document.body.style.backgroundImage = "url('../img/vikings.jpg')";
        });

    </script>
</foother>
</html>
