<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-nav" href="home">
        <img class="logo" src="/img/logo.png" alt="logo" >
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">


            <li class="nav-item">
                <a class="nav-link" href="/registration">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/information">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logIn">Logout</a>
            </li>

        </ul>
    </div>



</nav>

<div class="underBar">
    <img src="/img/random.png" alt="randomLogo">
</div>

<div class="container">
    <div class="col-12 ">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="textUnForm">
                        <b><label for="inputEmail">Email</label></b>
                    </div>
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <div class="textUnForm">
                        <b><label for="inputPassword">Password</label></b>
                    </div>
                    <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <button type="submit" name="submitLi" class="btn btn-primary">Log in</button>
        </form>
    </div>
</div>


</body>
</html>
