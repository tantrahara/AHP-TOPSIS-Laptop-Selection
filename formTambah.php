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
  $procName = $_POST["processorname"];
  $proc = $_POST["processor"];
  $ram = $_POST["ram"];
  $hd = $_POST["harddisk"];
  $gpu = $_POST["gpu"];
  $gpuvram = $_POST["gpuvram"];
  $berat = $_POST["berat"];
  $harga = $_POST["harga"];

  $cek = mysqli_num_rows(mysqli_query($objCrud->getKoneksi(), "SELECT * FROM laptops WHERE alternatif='$alt' OR id='$id'"));
  if ($cek > 0) {
    $error = true;
  } else {
    	$sql= "INSERT INTO laptops (id, alternatif, layar, processor, ram, harddisk, gpuvram, berat, harga, processorname, gpuname) VALUE
      ('$id', '$alt', '$layar', '$proc', '$ram', '$hd', '$gpuvram', '$berat', '$harga', '$procName', '$gpu')";
    	$query	= mysqli_query($objCrud->getKoneksi(),$sql);

    	if($query){
    		header('location: table.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
    	}
    	else{
    		echo 'Gagal';
    	}
    }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
    <div class="top">
      <div class="header">
        <h1 align="center" class="judul">Form Tambah Data</h1>
      </div>

      <div class="navigasi">
        <a href="indexAdmin.php">Halaman Utama</a>
        <a href="table.php">Daftar Table</a>
        <a href="logout.php" class="log">LOGOUT</a>
      </div>
    </div>

    <div class="main">
      <h2></h2>
      <?php if(isset($error)) : ?>
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
              <input name="processorname" type="text" size="20" autocomplete="off" required>
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Processor speed</td>
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
            <td height="27" align="right" valign="middle">GPU</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input name="gpu" type="text" size="20" autocomplete="off" required>
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
            <td><input type="submit" name="tambah" value="TAMBAH"></td>
          </tr>
        </table>
      </form>
    </div>

  </body>
</html>
