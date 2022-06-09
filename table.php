<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';
$obj = new dataCrud();
$tableAlt = $obj->query("SELECT id,alternatif, layar, processor, ram, harddisk, gpuvram, berat, FORMAT(harga, 0) FROM laptops ORDER BY id");
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
  <nav class="navbar navbar-expand navbar-light pt-2 pb-2 bg-white sticky-xl-top">
    <div class="container">
      <a href="indexadmin.php"><img src="assets/Logo/LaptopRanks.png" alt="LaptopRanksLogo" draggable="false" width="150" /></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item ms-3">
            <a class="btn btn-rounded" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="pt-2 pb-3 text-light bg-danger shadow">
    <div class="container">
      <h1 class="display-4">
        <p class="fw-semibold">Laptop Ranks</p>
      </h1>
      <p class="lead fw-semibold">Table Daftar Laptop</p>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Main -->
  <div class="main">
    <h2></h2>
    <a class="btn btn-primary mb-2 ms-2" href="formTambah.php">Tambah Data</a>
    <div class="table-container table-responsive">
      <table class="table table-hover text-center">
        <thead class="table-dark sticky-top">
          <tr>
            <th> Id </th>
            <th> Alternatif </th>
            <th> Layar </th>
            <th> Processor </th>
            <th> RAM </th>
            <th> Harddisk </th>
            <th> GPU VRAM </th>
            <th> Berat </th>
            <th> Harga </th>
            <th> Aksi </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tableAlt as $a) : ?>
            <tr>
              <?php foreach ($a as $b) : ?>
                <td> <?= $b ?> </td>
              <?php endforeach; ?>
              <td>
                <a class="btn btn-secondary" href="hapusData.php?id=<?= $a[0]; //index 0 = kolom id
                                          ?>" onclick="return confirm('yakin?')">Hapus</a>
                ||
                <a class="btn btn-secondary" href="editData.php?id=<?= $a[0]; ?>">Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Akhir Main -->

  <!-- Footer -->
  <footer class="text-center bg-danger text-light fw-bold pt-2 pb-5">
    <p>Created by <a href="https://github.com/tantrahara" class="text-white">Hara Tantra</a></p>
  </footer>
  <!-- Akhir Footer -->

</body>

</html>
