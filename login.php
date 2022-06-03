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
  if (mysqli_num_rows($result)=== 1){
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
    <title>Halaman Login</title>
    <style media="screen">
      label {
        display: block;
      }
      ul{
        list-style-type: none;
      }
    </style>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
    <div class="header">
      <h1 align="center">Form Login</h1>
    </div>

    <div class="main">
      <?php if(isset($error)) : ?>
        <p style="color:red; font-style: italic;">Username/Password Salah</p>
      <?php endif; ?>

      <form action="" method="post" align="center">
        <ul>
          <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
          </li>
          <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
          </li>
          <li>
            <button type="submit" name="login">Login</button>
          </li>
        </ul>
      </form>
    </div>

  </body>
</html>
