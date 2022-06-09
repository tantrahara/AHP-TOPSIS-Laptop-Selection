<?php

class dataCrud
{
  protected $koneksi;

  public function __construct()
  {
    $this->koneksi = mysqli_connect("localhost", "root", "", "database");
  }

  public function query ($query1)//untuk memanggil data pada database
  {

    $result = mysqli_query($this->koneksi, $query1);
    $rows = [];

    while ($row = mysqli_fetch_row($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function getKoneksi()
  {
    return $this->koneksi;
  }

  public function hapus($id)
  {
      mysqli_query($this->koneksi, "DELETE FROM laptops WHERE id = $id");

      return mysqli_affected_rows($this->koneksi);
  }
  public function edit($data)
  {
    $id = $data["id"];
    $alt = htmlspecialchars($data["alternatif"]);
    $layar = htmlspecialchars($data["layar"]);
    $proc = htmlspecialchars($data["processor"]);
    $ram = htmlspecialchars($data["ram"]);
    $hd = htmlspecialchars($data["harddisk"]);
    $gpuvram = htmlspecialchars($data["gpuvram"]);
    $berat = htmlspecialchars($data["berat"]);
    $harga = htmlspecialchars($data["harga"]);
    $procName = htmlspecialchars($data["processorname"]);
    $gpu = htmlspecialchars($data["gpu"]);

    // query insert data
    $query = "UPDATE laptops SET
                alternatif = '$alt',
                layar = '$layar',
                processor = '$proc',
                ram = '$ram',
                harddisk = '$hd',
                gpuvram = '$gpuvram',
                berat = '$berat',
                harga = '$harga',
                processorname = '$procName',
                gpuname = '$gpu'
              WHERE id = $id
                ";
    mysqli_query ($this->koneksi, "$query");

    return mysqli_affected_rows($this->koneksi);
  }
}
/**
 *
 */
class AHP
{
  private $hasilNormalisasi = [];
  private $w; //variabel bobot AHP

  public function tampilMatrix($arr) //untuk array 2 dimensi
  {
    echo '<table border="1" cellspadding ="10" cellspacing="0" align="center">';

      foreach ($arr as $a) {
        echo "<tr>";
        foreach ($a as $b){
          echo "<td>". $b . "</td>";
        }
        echo "</tr>";
      }

    echo "</table>";
  }
  public function tampilArr($arr) //untuk array 1 dimensi
  {
    echo '<table border="1" cellspadding ="10" cellspacing="0">';

      foreach ($arr as $a) {
        echo "<tr>";
          echo "<td>". $a . "</td>";
        echo "</tr>";
      }

    echo "</table>";
  }
  public function jumlahKolomKriteria($arr, $index) //index => index kolom
  {
    $sum = 0;
    for ($i=0; $i < 7; $i++) {
      $sum += $arr[$i][$index];
    }
    return $sum;
  }
  public function jumlahBarisKriteria($arr, $index) //index => index baris
  {
    $sum = 0;
    for ($i=0; $i < 7 ; $i++) {
      $sum += $arr[$index][$i];
    }
    return $sum;
  }
  public function normalisasi($arr, $hjk1, $hjk2, $hjk3, $hjk4, $hjk5, $hjk6, $hjk7)//normalisasi matrix perbandingan pada tahap 2
  {

    $i = 0;
    foreach ($arr as $a) {
      $this->hasilNormalisasi[$i][0] = $a[0]/$hjk1;
      $this->hasilNormalisasi[$i][1] = $a[1]/$hjk2;
      $this->hasilNormalisasi[$i][2] = $a[2]/$hjk3;
      $this->hasilNormalisasi[$i][3] = $a[3]/$hjk4;
      $this->hasilNormalisasi[$i][4] = $a[4]/$hjk5;
      $this->hasilNormalisasi[$i][5] = $a[5]/$hjk6;
      $this->hasilNormalisasi[$i][6] = $a[6]/$hjk7;

      $i++;
    }
    return $this->hasilNormalisasi;
  }
  public function bobotKriteria($hasilJumlahBaris)//mendapatkan hasil bobot AHP pada tahap 3
  {
    return $this->w = $hasilJumlahBaris/7; // 7 merupakan jumlah kriteria
  }
  public function Konsistensi($hjk1, $hjk2, $hjk3, $hjk4, $hjk5, $hjk6, $hjk7, $w1, $w2, $w3, $w4, $w5, $w6, $w7) //menghitung konsistensi pada tahap 4
  {
    $RI = 1.32;

    $lamdaMax = ($hjk1*$w1)+($hjk2*$w2)+($hjk3*$w3)+($hjk4*$w4)+($hjk5*$w5)+($hjk6*$w6)+($hjk7*$w7);
    $CI = ($lamdaMax-7)/(7-1);

    $hasil = $CI/$RI;
    return $hasil;
  }
}

/**
 *
 */
class TOPSIS extends dataCrud
{
  private $normalisasi = [];
  private $normalisasiTerbobot = [];
  private $solusiIdeal = [];
  private $V = [];


  public function getX($arr, $index) //index => index kolom , untuk mendapatkan nilai x pada tahap 1
  {
    $sum = 0;
    foreach ($arr as $a) {
        $sum += pow($a[$index], 2);
    }
    return $x = sqrt($sum);
  }
  public function normalisasi($arr, $x1, $x2, $x3, $x4, $x5, $x6, $x7) //normalisasi tabel alternatif pada tahap 1
  {
    $i=0;
    foreach ($arr as $a) {
      $this->normalisasi[$i][0] = $a[2] / $x1;
      $this->normalisasi[$i][1] = $a[3] / $x2;
      $this->normalisasi[$i][2] = $a[4] / $x3;
      $this->normalisasi[$i][3] = $a[5] / $x4;
      $this->normalisasi[$i][4] = $a[6] / $x5;
      $this->normalisasi[$i][5] = $a[7] / $x6;
      $this->normalisasi[$i][6] = $a[8] / $x7;

      $i++;
    }
    return $this->normalisasi;
  }
  public function normalisasiTerbobot($arr, $w1, $w2, $w3, $w4, $w5, $w6, $w7)//normalisasi matrix terbobot pada tahap 2
  {

    $i=0;
    foreach ($arr as $a) {
      $this->normalisasiTerbobot[$i][0] = $w1*$a[0];
      $this->normalisasiTerbobot[$i][1] = $w2*$a[1];
      $this->normalisasiTerbobot[$i][2] = $w3*$a[2];
      $this->normalisasiTerbobot[$i][3] = $w4*$a[3];
      $this->normalisasiTerbobot[$i][4] = $w5*$a[4];
      $this->normalisasiTerbobot[$i][5] = $w6*$a[5];
      $this->normalisasiTerbobot[$i][6] = $w7*$a[6];
      $i++;
    }
    return $this->normalisasiTerbobot;
  }
  public function getMax($arr) //untuk mendapatkan nilai max vertikal (tahap 3)
  {
    $max = [];
    foreach ($arr as $vert) {
      foreach ($vert as $key => $val) {
        if (!isset($max[$key]) || $val > $max[$key] ) {
          $max[$key] = $val;
        }
      }
    }
    return $max;
  }
  public function getMin($arr) // untuk mendapatkan nilai min vertikal (tahap 3)
  {
    $min = [];
    foreach ($arr as $vert) {
      foreach ($vert as $key => $val) {
        if (!isset($min[$key]) || $val < $min[$key] ) {
          $min[$key] = $val;
        }
      }
    }
    return $min;
  }
  public function solusiIdeal($arr) //mendapatkan matrix solusi ideal pos neg pada tahap 3
  {
    $yPlus = [];
    $yNeg = [];

    $yPlus = $this->getMax($arr);
    $yNeg = $this->getMin($arr);

    $this->solusiIdeal[0][0] = $yPlus[0];
    $this->solusiIdeal[1][0] = $yPlus[1];
    $this->solusiIdeal[2][0] = $yPlus[2];
    $this->solusiIdeal[3][0] = $yPlus[3];
    $this->solusiIdeal[4][0] = $yPlus[4];
    $this->solusiIdeal[5][0] = $yNeg[5];
    $this->solusiIdeal[6][0] = $yNeg[6];
    $this->solusiIdeal[0][1] = $yNeg[0];
    $this->solusiIdeal[1][1] = $yNeg[1];
    $this->solusiIdeal[2][1] = $yNeg[2];
    $this->solusiIdeal[3][1] = $yNeg[3];
    $this->solusiIdeal[4][1] = $yNeg[4];
    $this->solusiIdeal[5][1] = $yPlus[5];
    $this->solusiIdeal[6][1] = $yPlus[6];

    return $this->solusiIdeal;
  }
  public function jarakSolusiIdealPos($arr, $arr2, $index)//tahap 4
  {
      $temp = count($arr2);
      $z=0;
      for ($i=0; $i < $temp; $i++) {
        $z += pow($arr[$index][$i]-$arr2[$i][0], 2);
      }
      return sqrt($z);
  }
  public function jarakSolusiIdealNeg($arr, $arr2, $index)//tahap 4
  {
      $temp = count($arr2);
      $z=0;
      for ($i=0; $i < $temp; $i++) {
        $z += pow($arr[$index][$i]-$arr2[$i][1], 2);
      }
      return sqrt($z);
  }
  public function nilaiPref($dP, $dM) //hasil rangking TOPSIS tahap 5
  {

    $temp = count($dP);
    for ($i=0; $i < $temp; $i++) {
      $this->V[] += $dM[$i]/($dM[$i]+$dP[$i]);
    }
    return  $this->V;
  }
  public function TampilMatrixAkhir($arr) //untuk menampilkan hasil akhir
  {
    $i=1;
    echo '<table border="1" cellspadding ="10" cellspacing="0" align="center">';
    echo "<tr>";
      echo "<th> RANKS </th>";
      echo "<th> Alternatif </th>";
      echo "<th> Layar (Inch) </th>";
      echo "<th> Processor </th>";
      echo "<th> Processor Speed (GHz) </th>";
      echo "<th> RAM (GB) </th>";
      echo "<th> Harddisk (GB) </th>";
      echo "<th> GPU </th>";
      echo "<th> GPU VRAM (gb) </th>";
      echo "<th> Berat (KG) </th>";
      echo "<th> Harga (Rp) </th>";
    echo "</tr>";
      foreach ($arr as $a) {
        echo "<tr>";
          echo "<th>". $i ."</th>";
          foreach ($a as $b){
            echo "<th>". $b . "</th>";
          }
        echo "</tr>";
        $i++;
      }

    echo "</table>";
  }
}
/**
 *
 */

 ?>
