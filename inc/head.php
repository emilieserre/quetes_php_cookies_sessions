<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cookie Factory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navBar container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" >
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="menuBtn" href="#">Chocolates chips</a></li>
                    <li><a class="menuBtn" href="#">Nuts</a></li>
                    <li><a class="menuBtn" href="#">Gluten full</a></li>
                    <li><a class="logoutBtn" href="logout.php">Logout</a></li>
                    <li>
                        <a href="/cart.php" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center title_size">
        <strong>Hello <?php
            if  (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            } else {
                echo "Wilder";
            } ?> !</strong>
    </div>
</header>