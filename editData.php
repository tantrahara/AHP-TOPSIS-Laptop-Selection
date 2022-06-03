<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';
$objCrud = new dataCrud();

$id = $_GET["id"];
$dataAlt = $objCrud->query("SELECT id,alternatif, layar, processor, ram, harddisk, gpuvram, berat, harga, processorname, gpuname FROM laptops WHERE id = $id")[0];

if (isset($_POST["tambah"])) {
  if ($objCrud->edit($_POST) > 0) {
    echo "
      <script>
        alert('data berhasil diubah');
        document.location.href = 'table.php';
      </script>
      ";
  }else {
    echo "
      <script>
        alert('data tidak diubah');
        document.location.href = 'table.php';
      </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
    <div class="top">
      <div class="header">
        <h1 class="judul">FORM EDIT DATA</h1>
      </div>

      <div class="navigasi">
        <a href="indexAdmin.php">Halaman Utama</a>
        <a href="table.php">Daftar Table</a>
        <a href="logout.php" class="log">LOGOUT</a>
      </div>
    </div>

    <div class="main">
      <h2></h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $dataAlt[0]; ?>">
        <table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
          <tr>
            <td width="189" height="20"> </td>
            <td width="26"> </td>
            <td width="331"> </td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Nama Laptop</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input name="alternatif" type="text" size="20" autocomplete="off" required value="<?= $dataAlt[1]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Layar</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="layar" size="10" autocomplete="off" required value="<?= $dataAlt[2]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Processor</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input name="processorname" type="text" size="20" autocomplete="off" required value="<?= $dataAlt[9]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Processor Speed</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="processor" size="10" autocomplete="off" required value="<?= $dataAlt[3]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">RAM</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="ram" size="10" autocomplete="off" required value="<?= $dataAlt[4]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Harddisk</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="harddisk" size="10" autocomplete="off" required value="<?= $dataAlt[5]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">GPU</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input name="gpu" type="text" size="20" autocomplete="off" required value="<?= $dataAlt[10]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">GPU VRAM</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="gpuvram" size="10" autocomplete="off" required value="<?= $dataAlt[6]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Berat</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="berat" size="10" autocomplete="off" required value="<?= $dataAlt[7]; ?>">
            </label></td>
          </tr>
          <tr>
            <td height="27" align="right" valign="middle">Harga</td>
            <td align="center" valign="top">:</td>
            <td valign="middle"><label>
              <input type="number" step="any" name="harga" size="10" autocomplete="off" required value="<?= $dataAlt[8]; ?>">
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
