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
    <script>
        window.onload=function() {

            let pom = Math.floor(Math.random() * 11);

            if(pom === 0){
                document.body.style.backgroundImage = "url('../img/eroSenin.jpg')";
            } else if (pom === 1) {
                document.body.style.backgroundImage = "url('../img/jungle.jpg')";
            } else if (pom === 2) {
                document.body.style.backgroundImage = "url('../img/ship.jpg')";
            } else if (pom === 3) {
                document.body.style.backgroundImage = "url('../img/space.jpg')";
            } else if (pom === 4) {
                document.body.style.backgroundImage = "url('../img/vikings.jpg')";
            } else if (pom === 5) {
                document.body.style.backgroundImage = "url('../img/got.jpg')";
            } else if (pom === 6) {
                document.body.style.backgroundImage = "url('../img/venom.jpg')";
            } else if (pom === 7) {
                document.body.style.backgroundImage = "url('../img/japan.jpg')";
            } else if (pom === 8) {
                document.body.style.backgroundImage = "url('../img/lotr.jpg')";
            } else if (pom === 9) {
                document.body.style.backgroundImage = "url('../img/wow.jpg')";
            } else if (pom === 10) {
                document.body.style.backgroundImage = "url('../img/pirates.jpg')";
            }
        };
    </script>
</foother>
</html>
