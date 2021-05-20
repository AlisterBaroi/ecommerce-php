<?php
// starting batabase connection and session
$db_host = "localhost";
$db_user = "root";
// password from phpmyadmin
$db_pass = "";
$db_name = "ecommerce";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("unable to connect");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store</title>
    <!-- linking dependencies -->
    <link href="inc/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<!-- website navigation menu start -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand ms-3 text-light" href="index.php">Ecommerce Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto me-3 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item mx-1">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link text-light" href="store.php">Store</a>
        </li>
        <div class="btn-group mx-1">
            <button type="button" class="btn border dropdown-toggle text-light" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                Account
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php if (!isset($_SESSION['customer'])) {?>
                <li><a class="dropdown-item" href="signin.php">Sign In</a></li>
                <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                <?php } else {?>
                <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
                <li><a class="dropdown-item" href="purchased.php">Purchase History</a></li>
                <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                <?php }?>
            </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- website navigation menu end -->