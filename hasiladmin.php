<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';

//Kriteria 1 vs Kriteria 2
if ($_POST["k1vk2"] == "1") {
  $k12 = 1;
  $k21 = 1;
}elseif ($_POST["k1vk2"] == "2") {
  $k12 = 3;
  $k21 = 0.33;
}elseif ($_POST["k1vk2"] == "3") {
  $k12 = 0.33;
  $k21 = 3;
}elseif ($_POST["k1vk2"] == "4") {
  $k12 = 5;
  $k21 = 0.2;
}elseif ($_POST["k1vk2"] == "5") {
  $k12 = 0.2;
  $k21 = 5;
}
//kriteria1 vs kriteria3
if ($_POST["k1vk3"] == "1") {
  $k13 = 1;
  $k31 = 1;
}elseif ($_POST["k1vk3"] == "2") {
  $k13 = 3;
  $k31 = 0.33;
}elseif ($_POST["k1vk3"] == "3") {
  $k13 = 0.33;
  $k31 = 3;
}elseif ($_POST["k1vk3"] == "4") {
  $k13 = 5;
  $k31 = 0.2;
}elseif ($_POST["k1vk3"] == "5") {
  $k13 = 0.2;
  $k31 = 5;
}
//kriteria1 vs kriteria4
if ($_POST["k1vk4"] == "1") {
  $k14 = 1;
  $k41 = 1;
}elseif ($_POST["k1vk4"] == "2") {
  $k14 = 3;
  $k41 = 0.33;
}elseif ($_POST["k1vk4"] == "3") {
  $k14 = 0.33;
  $k41 = 3;
}elseif ($_POST["k1vk4"] == "4") {
  $k14 = 5;
  $k41 = 0.2;
}elseif ($_POST["k1vk4"] == "5") {
  $k14 = 0.2;
  $k41 = 5;
}
//kriteria1 vs kriteria5
if ($_POST["k1vk5"] == "1") {
  $k15 = 1;
  $k51 = 1;
}elseif ($_POST["k1vk5"] == "2") {
  $k15 = 3;
  $k51 = 0.33;
}elseif ($_POST["k1vk5"] == "3") {
  $k15 = 0.33;
  $k51 = 3;
}elseif ($_POST["k1vk5"] == "4") {
  $k15 = 5;
  $k51 = 0.2;
}elseif ($_POST["k1vk5"] == "5") {
  $k15 = 0.2;
  $k51 = 5;
}
//kriteria1 vs kriteria6
if ($_POST["k1vk6"] == "1") {
  $k16 = 1;
  $k61 = 1;
}elseif ($_POST["k1vk6"] == "2") {
  $k16 = 3;
  $k61 = 0.33;
}elseif ($_POST["k1vk6"] == "3") {
  $k16 = 0.33;
  $k61 = 3;
}elseif ($_POST["k1vk6"] == "4") {
  $k16 = 5;
  $k61 = 0.2;
}elseif ($_POST["k1vk6"] == "5") {
  $k16 = 0.2;
  $k61 = 5;
}
//kriteria1 vs kriteria7
if ($_POST["k1vk7"] == "1") {
  $k17 = 1;
  $k71 = 1;
}elseif ($_POST["k1vk7"] == "2") {
  $k17 = 3;
  $k71 = 0.33;
}elseif ($_POST["k1vk7"] == "3") {
  $k17 = 0.33;
  $k71 = 3;
}elseif ($_POST["k1vk7"] == "4") {
  $k17 = 5;
  $k71 = 0.2;
}elseif ($_POST["k1vk7"] == "5") {
  $k17 = 0.2;
  $k71 = 5;
}
//kriteria2 vs kriteria3
if ($_POST["k2vk3"] == "1") {
  $k23 = 1;
  $k32 = 1;
}elseif ($_POST["k2vk3"] == "2") {
  $k23 = 3;
  $k32 = 0.33;
}elseif ($_POST["k2vk3"] == "3") {
  $k23 = 0.33;
  $k32 = 3;
}elseif ($_POST["k2vk3"] == "4") {
  $k23 = 5;
  $k32 = 0.2;
}elseif ($_POST["k2vk3"] == "5") {
  $k23 = 0.2;
  $k32 = 5;
}
//kriteria2 vs kriteria4
if ($_POST["k2vk4"] == "1") {
  $k24 = 1;
  $k42 = 1;
}elseif ($_POST["k2vk4"] == "2") {
  $k24 = 3;
  $k42 = 0.33;
}elseif ($_POST["k2vk4"] == "3") {
  $k24 = 0.33;
  $k42 = 3;
}elseif ($_POST["k2vk4"] == "4") {
  $k24 = 5;
  $k42 = 0.2;
}elseif ($_POST["k2vk4"] == "5") {
  $k24 = 0.2;
  $k42 = 5;
}
//kriteria2 vs kriteria5
if ($_POST["k2vk5"] == "1") {
  $k25 = 1;
  $k52 = 1;
}elseif ($_POST["k2vk5"] == "2") {
  $k25 = 3;
  $k52 = 0.33;
}elseif ($_POST["k2vk5"] == "3") {
  $k25 = 0.33;
  $k52 = 3;
}elseif ($_POST["k2vk5"] == "4") {
  $k25 = 5;
  $k52 = 0.2;
}elseif ($_POST["k2vk5"] == "5") {
  $k25 = 0.2;
  $k52 = 5;
}
//kriteria2 vs kriteria6
if ($_POST["k2vk6"] == "1") {
  $k26 = 1;
  $k62 = 1;
}elseif ($_POST["k2vk6"] == "2") {
  $k26 = 3;
  $k62 = 0.33;
}elseif ($_POST["k2vk6"] == "3") {
  $k26 = 0.33;
  $k62 = 3;
}elseif ($_POST["k2vk6"] == "4") {
  $k26 = 5;
  $k62 = 0.2;
}elseif ($_POST["k2vk6"] == "5") {
  $k26 = 0.2;
  $k62 = 5;
}
//kriteria2 vs kriteria7
if ($_POST["k2vk7"] == "1") {
  $k27 = 1;
  $k72 = 1;
}elseif ($_POST["k2vk7"] == "2") {
  $k27 = 3;
  $k72 = 0.33;
}elseif ($_POST["k2vk7"] == "3") {
  $k27 = 0.33;
  $k72 = 3;
}elseif ($_POST["k2vk7"] == "4") {
  $k27 = 5;
  $k72 = 0.2;
}elseif ($_POST["k2vk7"] == "5") {
  $k27 = 0.2;
  $k72 = 5;
}
//kriteria3 vs kriteria4
if ($_POST["k3vk4"] == "1") {
  $k34 = 1;
  $k43 = 1;
}elseif ($_POST["k3vk4"] == "2") {
  $k34 = 3;
  $k43 = 0.33;
}elseif ($_POST["k3vk4"] == "3") {
  $k34 = 0.33;
  $k43 = 3;
}elseif ($_POST["k3vk4"] == "4") {
  $k34 = 5;
  $k43 = 0.2;
}elseif ($_POST["k3vk4"] == "5") {
  $k34 = 0.2;
  $k43 = 5;
}
//kriteria3 vs kriteria5
if ($_POST["k3vk5"] == "1") {
  $k35 = 1;
  $k53 = 1;
}elseif ($_POST["k3vk5"] == "2") {
  $k35 = 3;
  $k53 = 0.33;
}elseif ($_POST["k3vk5"] == "3") {
  $k35 = 0.33;
  $k53 = 3;
}elseif ($_POST["k3vk5"] == "4") {
  $k35 = 5;
  $k53 = 0.2;
}elseif ($_POST["k3vk5"] == "5") {
  $k35 = 0.2;
  $k53 = 5;
}
//kriteria3 vs kriteria6
if ($_POST["k3vk6"] == "1") {
  $k36 = 1;
  $k63 = 1;
}elseif ($_POST["k3vk6"] == "2") {
  $k36 = 3;
  $k63 = 0.33;
}elseif ($_POST["k3vk6"] == "3") {
  $k36 = 0.33;
  $k63 = 3;
}elseif ($_POST["k3vk6"] == "4") {
  $k36 = 5;
  $k63 = 0.2;
}elseif ($_POST["k3vk6"] == "5") {
  $k36 = 0.2;
  $k63 = 5;
}
//k3 vs k7
if ($_POST["k3vk7"] == "1") {
  $k37 = 1;
  $k73 = 1;
}elseif ($_POST["k3vk7"] == "2") {
  $k37 = 3;
  $k73 = 0.33;
}elseif ($_POST["k3vk7"] == "3") {
  $k37 = 0.33;
  $k73 = 3;
}elseif ($_POST["k3vk7"] == "4") {
  $k37 = 5;
  $k73 = 0.2;
}elseif ($_POST["k3vk7"] == "5") {
  $k37 = 0.2;
  $k73 = 5;
}
//k4 vs k5
if ($_POST["k4vk5"] == "1") {
  $k45 = 1;
  $k54 = 1;
}elseif ($_POST["k4vk5"] == "2") {
  $k45 = 3;
  $k54 = 0.33;
}elseif ($_POST["k4vk5"] == "3") {
  $k45 = 0.33;
  $k54 = 3;
}elseif ($_POST["k4vk5"] == "4") {
  $k45 = 5;
  $k54 = 0.2;
}elseif ($_POST["k4vk5"] == "5") {
  $k45 = 0.2;
  $k54 = 5;
}
//k4 vs k6
if ($_POST["k4vk6"] == "1") {
  $k46 = 1;
  $k64 = 1;
}elseif ($_POST["k4vk6"] == "2") {
  $k46 = 3;
  $k64 = 0.33;
}elseif ($_POST["k4vk6"] == "3") {
  $k46 = 0.33;
  $k64 = 3;
}elseif ($_POST["k4vk6"] == "4") {
  $k46 = 5;
  $k64 = 0.2;
}elseif ($_POST["k4vk6"] == "5") {
  $k46 = 0.2;
  $k64 = 5;
}
//k4 vs k7
if ($_POST["k4vk7"] == "1") {
  $k47 = 1;
  $k74 = 1;
}elseif ($_POST["k4vk7"] == "2") {
  $k47 = 3;
  $k74 = 0.33;
}elseif ($_POST["k4vk7"] == "3") {
  $k47 = 0.33;
  $k74 = 3;
}elseif ($_POST["k4vk7"] == "4") {
  $k47 = 5;
  $k74 = 0.2;
}elseif ($_POST["k4vk7"] == "5") {
  $k47 = 0.2;
  $k74 = 5;
}
//k5 vs k6
if ($_POST["k5vk6"] == "1") {
  $k56 = 1;
  $k65 = 1;
}elseif ($_POST["k5vk6"] == "2") {
  $k56 = 3;
  $k65 = 0.33;
}elseif ($_POST["k5vk6"] == "3") {
  $k56 = 0.33;
  $k65 = 3;
}elseif ($_POST["k5vk6"] == "4") {
  $k56 = 5;
  $k65 = 0.2;
}elseif ($_POST["k5vk6"] == "5") {
  $k56 = 0.2;
  $k65 = 5;
}
//k5 vs k7
if ($_POST["k5vk7"] == "1") {
  $k57 = 1;
  $k75 = 1;
}elseif ($_POST["k5vk7"] == "2") {
  $k57 = 3;
  $k75 = 0.33;
}elseif ($_POST["k5vk7"] == "3") {
  $k57 = 0.33;
  $k75 = 3;
}elseif ($_POST["k5vk7"] == "4") {
  $k57 = 5;
  $k75 = 0.2;
}elseif ($_POST["k5vk7"] == "5") {
  $k57 = 0.2;
  $k75 = 5;
}
//k6 vs k7
if ($_POST["k6vk7"] == "1") {
  $k67 = 1;
  $k76 = 1;
}elseif ($_POST["k6vk7"] == "2") {
  $k67 = 3;
  $k76 = 0.33;
}elseif ($_POST["k6vk7"] == "3") {
  $k67 = 0.33;
  $k76 = 3;
}elseif ($_POST["k6vk7"] == "4") {
  $k67 = 5;
  $k76 = 0.2;
}elseif ($_POST["k6vk7"] == "5") {
  $k67 = 0.2;
  $k76 = 5;
}

$matrixPerbandingan = [
  [1,$k12,$k13,$k14,$k15,$k16,$k17],
  [$k21,1,$k23,$k24,$k25,$k26,$k27],
  [$k31,$k32,1,$k34,$k35,$k36,$k37],
  [$k41,$k42,$k43,1,$k45,$k46,$k47],
  [$k51,$k52,$k53,$k54,1,$k56,$k57],
  [$k61,$k62,$k63,$k64,$k65,1,$k67],
  [$k71,$k72,$k73,$k74,$k75,$k76,1]
];

$objAHP = new AHP();
$objTOPSIS = new TOPSIS();
$jum = 0;
$Laptop = $objTOPSIS->query("SELECT id, alternatif, layar, processor, ram, harddisk,
                            gpuvram, berat, harga FROM laptops");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Hasil</title>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
    <div class="top">
      <div class="header">
        <h1 class="judul">Hasil Ranking Laptops</h1>
      </div>

      <div class="navigasi">
        <a href="indexAdmin.php">Halaman Utama</a>
        <a href="table.php">Daftar Table</a>
        <a href="logout.php" class="log">LOGOUT</a>
      </div>
    </div>

    <div class="main">
      <h2 align="center"> TAHAP Metode AHP </h2>
      <h4 align="center">1. Tabel Matrix perbandingan berpasangan kriteria</h4>
      <?php
            $objAHP->tampilMatrix($matrixPerbandingan);

            $jumKol1 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 0);
            $jumKol2 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 1);
            $jumKol3 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 2);
            $jumKol4 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 3);
            $jumKol5 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 4);
            $jumKol6 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 5);
            $jumKol7 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 6);

            // echo "jumlah tiap kolom <br>";
            // echo $jumKol1 . " " . $jumKol2 . " " . $jumKol3 . " " . $jumKol4 . " " . $jumKol5 . " " . $jumKol6 . " " . $jumKol7 . "<br>";
       ?>
       <h5 align="center">Jumlah tiap kolom</h5>
      <table border="1" cellspadding ="10" cellspacing="0" align="center">
        <tr>
          <th>Kolom 1</th>
          <th>Kolom 2</th>
          <th>Kolom 3</th>
          <th>Kolom 4</th>
          <th>Kolom 5</th>
          <th>Kolom 6</th>
          <th>Kolom 7</th>
        </tr>
        <tr>
          <td><?=$jumKol1?></td>
          <td><?=$jumKol2?></td>
          <td><?=$jumKol3?></td>
          <td><?=$jumKol4?></td>
          <td><?=$jumKol5?></td>
          <td><?=$jumKol6?></td>
          <td><?=$jumKol7?></td>
        </tr>
      </table>

      <h4 align="center"> 2. Normalisasi nilai matrix perbandingan berpasangan kriteria </h4>
      <?php
            $matrixNormaliasi = $objAHP->normalisasi($matrixPerbandingan, $jumKol1, $jumKol2, $jumKol3, $jumKol4, $jumKol5, $jumKol6, $jumKol7);
            $objAHP->tampilMatrix($matrixNormaliasi);
            //jumlah tiap kolom normalisasi
            $jumKolN1 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 0);
            $jumKolN2 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 1);
            $jumKolN3 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 2);
            $jumKolN4 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 3);
            $jumKolN5 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 4);
            $jumKolN6 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 5);
            $jumKolN7 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 6);
            //jumlah tiap baris normalisasi
            $jumBarN1 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 0);
            $jumBarN2 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 1);
            $jumBarN3 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 2);
            $jumBarN4 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 3);
            $jumBarN5 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 4);
            $jumBarN6 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 5);
            $jumBarN7 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 6);
      ?>
      <br>
      <table border="1" cellspadding ="10" cellspacing="0" align="center">
        <tr>
          <th>Jumlah Baris</th>
          <th>Jumlah Kolom</th>
        </tr>
        <tr>
          <td><?=$jumBarN1?></td>
          <td><?=$jumKolN1?></td>
        </tr>
        <tr>
          <td><?=$jumBarN2?></td>
          <td><?=$jumKolN2?></td>
        </tr>
        <tr>
          <td><?=$jumBarN3?></td>
          <td><?=$jumKolN3?></td>
        </tr>
        <tr>
          <td><?=$jumBarN4?></td>
          <td><?=$jumKolN4?></td>
        </tr>
        <tr>
          <td><?=$jumBarN5?></td>
          <td><?=$jumKolN5?></td>
        </tr>
        <tr>
          <td><?=$jumBarN6?></td>
          <td><?=$jumKolN6?></td>
        </tr>
        <tr>
          <td><?=$jumBarN7?></td>
          <td><?=$jumKolN7?></td>
        </tr>
      </table>


      <h4 align="center"> 3. Tabel nilai W / Bobot tiap kriteria (Hasil AHP) </h4>
      <?php
            $w1 = $objAHP->bobotKriteria($jumBarN1); $w2 = $objAHP->bobotKriteria($jumBarN2); $w3 = $objAHP->bobotKriteria($jumBarN3); $w4 = $objAHP->bobotKriteria($jumBarN4);
            $w5 = $objAHP->bobotKriteria($jumBarN5); $w6 = $objAHP->bobotKriteria($jumBarN6); $w7 = $objAHP->bobotKriteria($jumBarN7);
            echo '<table border="1" cellspadding ="10" cellspacing="0" align="center" width="300px">';
              echo "<tr>";
                echo "<th>" . "W1" . "</th>";
                echo "<th>" . $w1 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W2" . "</th>";
                echo "<th>" . $w2 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W3" . "</th>";
                echo "<th>" . $w3 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W4" . "</th>";
                echo "<th>" . $w4 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W5" . "</th>";
                echo "<th>" . $w5 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W6" . "</th>";
                echo "<th>" . $w6 . "</th>";
              echo "</tr>";
              echo "<tr>";
                echo "<th>" . "W7" . "</th>";
                echo "<th>" . $w7 . "</th>";
              echo "</tr>";
            echo "</table>";
       ?>

       <h4 align="center"> 4. Perhitungan konsistensi </h4>
       <?php
             $CR = $objAHP->Konsistensi($jumKol1, $jumKol2, $jumKol3, $jumKol4, $jumKol5, $jumKol6, $jumKol7, $w1, $w2, $w3, $w4, $w5, $w6, $w7);
             if ($CR < 0.1) {
               echo "<h4 align='center'>Nilai CR =" . $CR . "</h4>";
               echo "<h4 align='center'>Konsisten</h4>";
               echo "<br>";
             }else {
               header("Location: indexAdmin.php?tidakKonsisten=true");
             }
        ?>

        <h2 align="center"> Tahap Metode TOPSIS </h2>
        <h4 align="center"> 1. Matrix keputusan yang ternormalisasi </h4>
        <?php
            //1. membuat matrix keputusan yang ternormalisasi
              $x1 = $objTOPSIS->getX($Laptop, 2);
              $x2 = $objTOPSIS->getX($Laptop, 3);
              $x3 = $objTOPSIS->getX($Laptop, 4);
              $x4 = $objTOPSIS->getX($Laptop, 5);
              $x5 = $objTOPSIS->getX($Laptop, 6);
              $x6 = $objTOPSIS->getX($Laptop, 7);
              $x7 = $objTOPSIS->getX($Laptop, 8);
          ?>
        <table align="center" border="1" cellspadding ="10" cellspacing="0">
          <tr>
            <th>x1</th>
            <th>x2</th>
            <th>x3</th>
            <th>x4</th>
            <th>x5</th>
            <th>x6</th>
            <th>x7</th>
          </tr>
          <tr>
            <td><?=$x1?></td>
            <td><?=$x2?></td>
            <td><?=$x3?></td>
            <td><?=$x4?></td>
            <td><?=$x5?></td>
            <td><?=$x6?></td>
            <td><?=$x7?></td>
          </tr>
        </table>
        <?php
              $matrixAltNorm = $objTOPSIS->normalisasi($Laptop, $x1, $x2, $x3, $x4, $x5, $x6, $x7);
              echo "<h4 align='center'>Matrix normalisasi alternatif (Tabel R) </h4>";
              $objAHP->tampilMatrix($matrixAltNorm);
         ?>

         <h4 align="center"> 2. Matrix Normalisasi keputusan ternormalisasi terbobot </h4>
         <?php
             //2. membuat matrix keputusan ternormalisasi terbobot
             $matrixNormTerbobot = $objTOPSIS->normalisasiTerbobot($matrixAltNorm, $w1, $w2, $w3, $w4, $w5, $w6, $w7);
             $objAHP->tampilMatrix($matrixNormTerbobot);
           ?>

        <h4 align="center"> 3. Matrix solusi ideal positif dan negatif </h4>
        <?php
              //3. Menentukan matrix solusi ideal positif dan negatif
              $matrixSolusiIdeal = $objTOPSIS->solusiIdeal($matrixNormTerbobot);
              $objAHP->tampilMatrix($matrixSolusiIdeal);
         ?>

         <h4 align="center"> 4. Jarak antara nilai setiap alternatif dengan matrix solusi ideal positif dan negatif </h4>
         <?php
               $index = count($matrixNormTerbobot);
               for ($i=0; $i < $index; $i++) {
                 $dPlus[] = $objTOPSIS->jarakSolusiIdealPos($matrixNormTerbobot, $matrixSolusiIdeal, $i);
                 $dNeg[] = $objTOPSIS->jarakSolusiIdealNeg($matrixNormTerbobot, $matrixSolusiIdeal, $i);
               }
               echo '<div class="main-tableD">';
               echo '<table class="tableD" border="1" align="center" cellspadding ="10" cellspacing="0">';
                   echo "<tr>";
                     echo "<td> Table D+ </td>";
                   echo "</tr>";
                 foreach ($dPlus as $a) {
                   echo "<tr>";
                     echo "<td>". $a . "</td>";
                   echo "</tr>";
                 }
               echo "</table>";

               echo '<table class="tableD" border="1" cellspadding ="10" cellspacing="0" align="center">';
                   echo "<tr>";
                     echo "<td> Table D- </td>";
                   echo "</tr>";
                 foreach ($dNeg as $a) {
                   echo "<tr>";
                     echo "<td>". $a . "</td>";
                   echo "</tr>";
                 }
               echo "</table>";
              echo "</div>";
          ?>

          <h4 align="center"> 5. Nilai preferensi untuk setiap alternatif (Hasil) </h4>
          <?php
                $V = $objTOPSIS->nilaiPref($dPlus, $dNeg);
                //meyimpan hasil ke dalam database
                $objCrud = new dataCrud ();
                $g=0;
                $h=1;
                foreach ($Laptop as $laptops) {
                  $simpan = mysqli_query($objCrud->getKoneksi(), "UPDATE laptops SET V = '$V[$g]' WHERE id  = '$h'");
                  $g++;
                  $h++;
                }
                $hasil = $objTOPSIS->query("SELECT alternatif, layar, processorname, processor, ram, harddisk, gpuname, gpuvram, berat, harga FROM laptops ORDER BY V DESC");
                //menampilkan hasil
                $objTOPSIS->TampilMatrixAkhir($hasil);
           ?>
    </div>
  </body>
</html>
