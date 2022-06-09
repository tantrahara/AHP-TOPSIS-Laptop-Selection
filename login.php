<?php
session_start(); // menjalankan session

if (isset($_SESSION["login"])) {
  header("Location: indexAdmin.php");
  exit;
}

require 'functions.php';

$objKon = new dataCrud();

if (isset($_POST["login"])) {
  $uname = $_POST["username"];
  $pass = $_POST["password"];

  $result = mysqli_query($objKon->getKoneksi(), "SELECT * FROM user WHERE
    username = '$uname'");

  //cek Username
  if (mysqli_num_rows($result) === 1) {
    //cek Password
    $row = mysqli_fetch_assoc($result);
    if ($pass == $row["password"]) {
      //set session
      $_SESSION["login"] = true;

      header("location: indexAdmin.php");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <title>Halaman Login</title>
  <style media="screen">
    label {
      display: block;
    }

    ul {
      list-style-type: none;
    }
  </style>
</head>

<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-light pt-3 pb-2 fixed-top bg-white">
    <div class="container">
      <a href="index.php"><img src="assets/Logo/LaptopRanks.png" alt="LaptopRanksLogo" draggable="false" width="150" /></a>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron pb-3 text-light bg-danger shadow">
    <div class="container">
      <h1 class="display-4">
        <p class="fw-semibold">Form Login</p>
      </h1>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Main -->
  <div class="main p-5">
    <?php if (isset($error)) : ?>
      <p style="color:red; font-style: italic;">Username/Password Salah</p>
    <?php endif; ?>

    <form action="" method="post" align="" class="">
      <div class="form-floating mb-3 mx-auto w-50 ">
        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mx-auto w-50">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="text-center mx-auto">
        <button type="submit" name="login" class="m-3 btn btn-primary btn-lg">Login</button>
      </div>
    </form>
  </div>
  <!-- Main -->

  <!-- Footer -->
  <footer class="text-center bg-danger text-light fw-bold pt-2 pb-5 fixed-bottom">
    <p>Created by <a href="https://github.com/tantrahara" class="text-white">Hara Tantra</a></p>
  </footer>
  <!-- Akhir Footer -->

</body>

</html>
