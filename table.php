<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';
$obj = new dataCrud();
$tableAlt = $obj->query("SELECT id,alternatif, layar, processorname, processor, ram, harddisk, gpuname, gpuvram, berat, harga FROM laptops ORDER BY id");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daftar Laptop</title>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
    <div class="top">
      <div class="header">
        <h1 align="center" class="judul">Daftar Laptop</h1>
      </div>

      <div class="navigasi">
        <a href="indexAdmin.php">Halaman Utama</a>
        <a href="logout.php" class="log">LOGOUT</a>
      </div>
    </div>

    <div class="main">
      <h2></h2>
      <a href="formTambah.php">Tambah Data</a>
      <table border="1" cellspadding ="10" cellspacing="0" align="center">
        <tr>
          <th> Id </th>
          <th> Alternatif </th>
          <th> Layar </th>
          <th> Processor </th>
          <th> Processor Speed </th>
          <th> RAM </th>
          <th> Harddisk </th>
          <th> GPU </th>
          <th> GPU VRAM </th>
          <th> Berat </th>
          <th> Harga </th>
          <th> Aksi </th>
        </tr>
        <?php foreach ($tableAlt as $a) : ?>
          <tr>
          <?php foreach ($a as $b) : ?>
            <td> <?= $b ?> </td>
          <?php endforeach; ?>
            <td>
              <a href="hapusData.php?id=<?= $a[0]; //index 0 = kolom id?>" onclick="return confirm('yakin?')">Hapus</a>
              ||
              <a href="editData.php?id=<?= $a[0];?>">Edit</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </body>
</html>
