<!doctype html>
<html lang="en">

<head>
  <?php
  session_start()

  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

</head>


<body>

  <header>






    <nav class="navbar navbar-expand-lg  navbar-style">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="loop.php">Loop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="operators.php">operators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="functions.php">functions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="array.php">array</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="datatypes.php">datatypes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">index</a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="calculator.php">calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="calender.php">calender</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conditionals.php">conditionals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="superglobals.php">superglobals</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <?php

$_SESSION['username'] = "triplemoe19";
echo $_SESSION['username'];
if (!isset($_SESSION['username'])){
  echo " You are not logged in";
}else{
  echo"<h1>You are logged in<h1>";
}


?>


  </header>