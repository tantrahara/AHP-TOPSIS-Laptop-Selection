<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: index.php");
} //cek sudah login

require 'functions.php';
$obj = new dataCrud();
$id = $_GET["id"];

if ($obj->hapus($id) > 0) {
  echo "
    <script>
      alert('data berhasil dihapus');
      document.location.href = 'table.php';
    </script>
    "; //menggunakan javascript
}else {
  echo "
    <script>
      alert('data gagal dihapus');
      document.location.href = 'table.php';
    </script>
  ";
}

?>
