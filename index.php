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
  <!-- Script PHP -->
  <?php if (isset($_GET["logout"])) {
    echo "<script>
          alert('Logout Berhasil');
        </script>";
  } elseif (isset($_GET["tidakKonsisten"])) {
    echo "<script>
        alert('Terdapat input yang tidak konsisten, mohon coba diubah beberapa inputannya');
        </script>";
  }
  ?>
  <!-- Akhir Script PHP -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-light pt-2 pb-2 fixed-top bg-white">
    <div class="container">
      <a href="index.php"><img src="assets/Logo/LaptopRanks.png" alt="LaptopRanksLogo" draggable="false" width="150" /></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item ms-3">
            <a class="btn btn-black btn-rounded" href="login.php">Login</a>
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
      <p class="lead fw-semibold">Ranking Laptop berdasarkan preferensi</p>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Main -->
  <div class="main pt-5">
    <h3 align="center" class="pb-5">Tentukanlah perbandingan prioritas dari hardware laptop menurut anda</h3>

    <form class="" action="hasil.php" method="post">
      <table class="TInput" border="0" cellspadding="10" cellspacing="0" align="center">
        <tr>
          <th class="text-center pb-3" colspan="2">Pilih Mana Yang Lebih Penting</th>
        </tr>
        <tr>
          <td><label for="">1. LAYAR dan PROCESSOR</label></td>
          <td><select class="" name="k1vk2">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari PROCESSOR</option>
              <option value="3">PROCESSOR cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari PROCESSOR</option>
              <option value="5">PROCESSOR lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="7">PROCESSOR Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="9">PROCESSOR Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">2. LAYAR dan RAM</label></td>
          <td><select class="" name="k1vk3">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari RAM</option>
              <option value="3">RAM cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari RAM</option>
              <option value="5">RAM lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="7">RAM Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari RAM</option>
              <option value="9">RAM Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">3. LAYAR dan HARDDISK</label></td>
          <td><select class="" name="k1vk4">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari HARDDISK</option>
              <option value="3">HARDDISK cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari HARDDISK</option>
              <option value="5">HARDDISK lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="7">HARDDISK Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari HARDDISK</option>
              <option value="9">HARDDISK Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">4. LAYAR dan GPU VRAM</label></td>
          <td><select class="" name="k1vk5">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari GPU VRAM</option>
              <option value="3">GPU VRAM cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari GPU VRAM</option>
              <option value="5">GPU VRAM lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="7">GPU VRAM Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="9">GPU VRAM Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">5. LAYAR dan BERAT</label></td>
          <td><select class="" name="k1vk6">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari BERAT</option>
              <option value="3">BERAT cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari BERAT</option>
              <option value="5">BERAT lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="7">BERAT Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari BERAT</option>
              <option value="9">BERAT Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">6. LAYAR dan HARGA</label></td>
          <td><select class="" name="k1vk7">
              <option value="1">Sama Penting</option>
              <option value="2">LAYAR cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari LAYAR</option>
              <option value="4">LAYAR lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari LAYAR</option>
              <option value="6">LAYAR Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari LAYAR</option>
              <option value="8">LAYAR Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari LAYAR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">7. PROCESSOR dan RAM</label></td>
          <td><select class="" name="k2vk3">
              <option value="1">Sama Penting</option>
              <option value="2">PROCESSOR cukup penting dari RAM</option>
              <option value="3">RAM cukup penting dari PROCESSOR</option>
              <option value="4">PROCESSOR lebih penting dari RAM</option>
              <option value="5">RAM lebih penting dari PROCESSOR</option>
              <option value="6">PROCESSOR Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="7">RAM Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="8">PROCESSOR Lebih Mutlak Penting dari RAM</option>
              <option value="9">RAM Lebih Mutlak Penting dari PROCESSOR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">8. PROCESSOR dan HARDDISK</label></td>
          <td><select class="" name="k2vk4">
              <option value="1">Sama Penting</option>
              <option value="2">PROCESSOR cukup penting dari HARDDISK</option>
              <option value="3">HARDDISK cukup penting dari PROCESSOR</option>
              <option value="4">PROCESSOR lebih penting dari HARDDISK</option>
              <option value="5">HARDDISK lebih penting dari PROCESSOR</option>
              <option value="6">PROCESSOR Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="7">HARDDISK Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="8">PROCESSOR Lebih Mutlak Penting dari HARDDISK</option>
              <option value="9">HARDDISK Lebih Mutlak Penting dari PROCESSOR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">9. PROCESSOR dan GPU VRAM</label></td>
          <td><select class="" name="k2vk5">
              <option value="1">Sama Penting</option>
              <option value="2">PROCESSOR cukup penting dari GPU VRAM</option>
              <option value="3">GPU VRAM cukup penting dari PROCESSOR</option>
              <option value="4">PROCESSOR lebih penting dari GPU VRAM</option>
              <option value="5">GPU VRAM lebih penting dari PROCESSOR</option>
              <option value="6">PROCESSOR Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="7">GPU VRAM Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="8">PROCESSOR Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="9">GPU VRAM Lebih Mutlak Penting dari PROCESSOR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">10. PROCESSOR dan BERAT</label></td>
          <td><select class="" name="k2vk6">
              <option value="1">Sama Penting</option>
              <option value="2">PROCESSOR cukup penting dari BERAT</option>
              <option value="3">BERAT cukup penting dari PROCESSOR</option>
              <option value="4">PROCESSOR lebih penting dari BERAT</option>
              <option value="5">BERAT lebih penting dari PROCESSOR</option>
              <option value="6">PROCESSOR Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="7">BERAT Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="8">PROCESSOR Lebih Mutlak Penting dari BERAT</option>
              <option value="9">BERAT Lebih Mutlak Penting dari PROCESSOR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">11. PROCESSOR dan HARGA</label></td>
          <td><select class="" name="k2vk7">
              <option value="1">Sama Penting</option>
              <option value="2">PROCESSOR cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari PROCESSOR</option>
              <option value="4">PROCESSOR lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari PROCESSOR</option>
              <option value="6">PROCESSOR Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari PROCESSOR</option>
              <option value="8">PROCESSOR Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari PROCESSOR</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">12. RAM dan HARDDISK</label></td>
          <td><select class="" name="k3vk4">
              <option value="1">Sama Penting</option>
              <option value="2">RAM cukup penting dari HARDDISK</option>
              <option value="3">HARDDISK cukup penting dari RAM</option>
              <option value="4">RAM lebih penting dari HARDDISK</option>
              <option value="5">HARDDISK lebih penting dari RAM</option>
              <option value="6">RAM Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="7">HARDDISK Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="8">RAM Lebih Mutlak Penting dari HARDDISK</option>
              <option value="9">HARDDISK Lebih Mutlak Penting dari RAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">13. RAM dan GPU VRAM</label></td>
          <td><select class="" name="k3vk5">
              <option value="1">Sama Penting</option>
              <option value="2">RAM cukup penting dari GPU VRAM</option>
              <option value="3">GPU VRAM cukup penting dari RAM</option>
              <option value="4">RAM lebih penting dari GPU VRAM</option>
              <option value="5">GPU VRAM lebih penting dari RAM</option>
              <option value="6">RAM Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="7">GPU VRAM Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="8">RAM Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="9">GPU VRAM Lebih Mutlak Penting dari RAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">14. RAM dan BERAT</label></td>
          <td><select class="" name="k3vk6">
              <option value="1">Sama Penting</option>
              <option value="2">RAM cukup penting dari BERAT</option>
              <option value="3">BERAT cukup penting dari RAM</option>
              <option value="4">RAM lebih penting dari BERAT</option>
              <option value="5">BERAT lebih penting dari RAM</option>
              <option value="6">RAM Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="7">BERAT Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="8">RAM Lebih Mutlak Penting dari BERAT</option>
              <option value="9">BERAT Lebih Mutlak Penting dari RAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">15. RAM dan HARGA</label></td>
          <td><select class="" name="k3vk7">
              <option value="1">Sama Penting</option>
              <option value="2">RAM cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari RAM</option>
              <option value="4">RAM lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari RAM</option>
              <option value="6">RAM Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari RAM</option>
              <option value="8">RAM Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari RAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">16. HARDDISK dan GPU VRAM</label></td>
          <td><select class="" name="k4vk5">
              <option value="1">Sama Penting</option>
              <option value="2">HARDDISK cukup penting dari GPU VRAM</option>
              <option value="3">GPU VRAM cukup penting dari HARDDISK</option>
              <option value="4">HARDDISK lebih penting dari GPU VRAM</option>
              <option value="5">GPU VRAM lebih penting dari HARDDISK</option>
              <option value="6">HARDDISK Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="7">GPU VRAM Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="8">HARDDISK Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="9">GPU VRAM Lebih Mutlak Penting dari HARDDISK</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">17. HARDDISK dan BERAT</label></td>
          <td><select class="" name="k4vk6">
              <option value="1">Sama Penting</option>
              <option value="2">HARDDISK cukup penting dari BERAT</option>
              <option value="3">BERAT cukup penting dari HARDDISK</option>
              <option value="4">HARDDISK lebih penting dari BERAT</option>
              <option value="5">BERAT lebih penting dari HARDDISK</option>
              <option value="6">HARDDISK Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="7">BERAT Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="8">HARDDISK Lebih Mutlak Penting dari BERAT</option>
              <option value="9">BERAT Lebih Mutlak Penting dari HARDDISK</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">18. HARDDISK dan HARGA</label></td>
          <td><select class="" name="k4vk7">
              <option value="1">Sama Penting</option>
              <option value="2">HARDDISK cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari HARDDISK</option>
              <option value="4">HARDDISK lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari HARDDISK</option>
              <option value="6">HARDDISK Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari HARDDISK</option>
              <option value="8">HARDDISK Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari HARDDISK</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">19. GPU VRAM dan BERAT</label></td>
          <td><select class="" name="k5vk6">
              <option value="1">Sama Penting</option>
              <option value="2">GPU VRAM cukup penting dari BERAT</option>
              <option value="3">BERAT cukup penting dari GPU VRAM</option>
              <option value="4">GPU VRAM lebih penting dari BERAT</option>
              <option value="5">BERAT lebih penting dari GPU VRAM</option>
              <option value="6">GPU VRAM Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="7">BERAT Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="8">GPU VRAM Lebih Mutlak Penting dari BERAT</option>
              <option value="9">BERAT Lebih Mutlak Penting dari GPU VRAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">20. GPU VRAM dan HARGA</label></td>
          <td><select class="" name="k5vk7">
              <option value="1">Sama Penting</option>
              <option value="2">GPU VRAM cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari GPU VRAM</option>
              <option value="4">GPU VRAM lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari GPU VRAM</option>
              <option value="6">GPU VRAM Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari GPU VRAM</option>
              <option value="8">GPU VRAM Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari GPU VRAM</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="">21. BERAT dan HARGA</label></td>
          <td><select class="" name="k6vk7">
              <option value="1">Sama Penting</option>
              <option value="2">BERAT cukup penting dari HARGA</option>
              <option value="3">HARGA cukup penting dari BERAT</option>
              <option value="4">BERAT lebih penting dari HARGA</option>
              <option value="5">HARGA lebih penting dari BERAT</option>
              <option value="6">BERAT Jelas Lebih Mutlak Penting dari HARGA</option>
              <option value="7">HARGA Jelas Lebih Mutlak Penting dari BERAT</option>
              <option value="8">BERAT Lebih Mutlak Penting dari HARGA</option>
              <option value="9">HARGA Lebih Mutlak Penting dari BERAT</option>
            </select></td>
        </tr>
      </table>
      <div class="main-button text-center pt-3 pb-3">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Enter</button>
      </div>
    </form>
  </div>
  <!-- Akhir Main -->

  <!-- Footer -->
  <footer class="text-center bg-danger text-light fw-bold pt-2 pb-5">
    <p>Created by <a href="https://github.com/tantrahara" class="text-white">Hara Tantra</a></p>
  </footer>
  <!-- Akhir Footer -->

</body>

</html>
