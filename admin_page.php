<?php
@include 'config.php';

session_start();  

// if(!isset($_SESSION['admin_name']))
// {
//     header('location:login_form.php');
// }
// $name = mysqli_real_escape_string($conn, $_POST['name']);


$conn = mysqli_connect('localhost','root','','user_db');



$query="select * from user_form";
$run=mysqli_query($conn,$query);
$data= mysqli_fetch_array($run);
// if($data)


// if(!isset($_SESSION['admin_name']))
// {
//     header('location:user_page.php');
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Page</title>

    <style>
      .slider{
        height: 600px;
        width: 1640px;
        /* border: 2px solid red; */
        position: absolute;
        bottom: 310px;
        left: 280px;

      }
      .inner{
        padding: 20px 10px;
      }
      img{
        height:400px;
        width: 400px;
      }
    </style>
</head>
<body>
    
<div style="background:#f0c243">
  <!-- <nav class="navbar navbar-dark bg-primary">

</nav> -->

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">GameMode</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="tournament.php">Let's Play Start</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
        <a class="nav-link active text-white" aria-current="page" href="login_form.php">Login</a>
        <span style="font-size:24px;color:white;">/</span>
        <a class="nav-link active text-white" aria-current="page" href="logout.php">Logout</a>
      </form>
    </div>
  </div>
</nav>




<!-- Side bar -->

<div class="b-example-divider b-example-vr"></div>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-primary" style="width: 280px;height:907px;z-index-1;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4 text-white">Game</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <!-- <li class="nav-item">
      <a href="#" class="nav-link active" aria-current="page">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
        Home
      </a>
    </li> -->
    <li>
      <a href="#" class="nav-link link-dark text-white">
        <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
        Dashboard
      </a>
    </li>
    <li>
      <a href="tournament.php" class="nav-link link-dark text-white">
        <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#table"/></svg>
        Play Game
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark text-white">
        <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#grid"/></svg>
        About US
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark text-white">
        <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#people-circle"/></svg>
        Contact Us
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
      <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
      <strong><?php echo $_SESSION['admin_name'] ?></strong>
    </a>
  </div>
</div>



<div class="slider">
  <h3 style="color:white; margin-left:20px;margin-top:20px">How To Play Tournaments</h3>
      <div class="inner">
          <img src="1.png" alt="">
          <img src="2.png" alt="">
          <img src="3.png" alt="">
          <img src="4.png" alt="">
      </div>


</div>
















</div>







</body>
</html>


<!-- <div class="container">
        <div class="contact">
            <h3>hi, <span>Admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <a href="login_form.php" class="btn">Login</a>
            <a href="register_form.php" class="btn">Registe</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>

    </div> -->