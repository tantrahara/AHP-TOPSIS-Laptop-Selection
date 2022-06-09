<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';
// $obj = new TOPSIS();
$objCrud = new dataCrud();

if (isset($_POST["tambah"])) {
  $id = $_POST["id"];
  $alt = $_POST["alternatif"];
  $layar = $_POST["layar"];
  $proc = $_POST["processor"];
  $ram = $_POST["ram"];
  $hd = $_POST["harddisk"];
  $gpu = $_POST["gpuvram"];
  $berat = $_POST["berat"];
  $harga = $_POST["harga"];

  $cek = mysqli_num_rows(mysqli_query($objCrud->getKoneksi(), "SELECT * FROM laptops WHERE alternatif='$alt' OR id='$id'"));
  if ($cek > 0) {
    $error = true;
  } else {
    $sql = "INSERT INTO laptops (id, alternatif, layar, processor, ram, harddisk, gpuvram, berat, harga) VALUE
      ('$id', '$alt', '$layar', '$proc', '$ram', '$hd', '$gpu', '$berat', '$harga')";
    $query  = mysqli_query($objCrud->getKoneksi(), $sql);

    if ($query) {
      header('location: table.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
    } else {
      echo 'Gagal';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laptop Ranks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-light pt-2 pb-2 fixed-top bg-white">
    <div class="container">
      <a href="indexadmin.php"><img src="assets/Logo/LaptopRanks.png" alt="LaptopRanksLogo" draggable="false" width="150" /></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item ms-3">
            <a class="btn btn-rounded" href="table.php">Daftar Table</a>
            <a class="btn btn-rounded" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron pb-3 text-light bg-danger shadow">
    <div class="container">
      <h1 class="display-4">
        <p class="fw-semibold">Laptop Ranks</p>
      </h1>
      <p class="lead fw-semibold">Tambah Data</p>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- main -->
  <div class="main">
    <h2></h2>
    <?php if (isset($error)) : ?>
      <p style="color:red; font-style: italic;">Alternatif/Id Sudah Ada</p>
    <?php endif; ?>
    <form action="" method="post">
      <table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td width="189" height="20"> </td>
          <td width="26"> </td>
          <td width="331"> </td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Id</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input name="id" type="number" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Nama Laptop</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input name="alternatif" type="text" size="20" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Layar</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="layar" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Processor</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="processor" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">RAM</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="ram" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Harddisk</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="harddisk" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">GPU VRAM</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="gpuvram" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Berat</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="berat" size="10" autocomplete="off" required>
            </label></td>
        </tr>
        <tr>
          <td height="27" align="right" valign="middle">Harga</td>
          <td align="center" valign="top">:</td>
          <td valign="middle"><label>
              <input type="number" step="any" name="harga" size="10" autocomplete="off" required>
            </label></td>
        </tr>

        <tr>
          <td height="42"> </td>
          <td> </td>
          <td><input type="submit" name="tambah" value="TAMBAH" class="m-3 btn btn-primary btn-lg"></td>
        </tr>
      </table>
    </form>
  </div>
  <!-- main -->

  <!-- Footer -->
  <footer class="text-center bg-danger text-light fw-bold pt-2 pb-5 fixed-bottom">
    <p>Created by <a href="https://github.com/tantrahara" class="text-white">Hara Tantra</a></p>
  </footer>
  <!-- Akhir Footer -->

</body>

</html>
