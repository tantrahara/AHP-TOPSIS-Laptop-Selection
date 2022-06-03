<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pemilihan Laptop</title>
    <link rel="stylesheet" href="assets/styling.css">
  </head>
  <body>
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
     <div class="top">
       <div class="header">
         <h1 class="judul">Pemilihan Laptop</h1>
       </div>

       <div class="navigasi">
         <a href="#"></a>
         <a href="login.php" class="log">LOGIN</a>
       </div>
     </div>

     <div class="deskripsi">
       <div class="deskripsi-paragraf">
         <h3>Pemilihan Laptop adalah situs yang merekomendasikan laptop berdasarkan kebutuhan anda</h3>
       </div>
     </div>

     <div class="main">
       <h3 align="center">Tentukanlah perbandingan hardware laptop menurut anda</h3>

       <form class="" action="hasil.php" method="post">
         <table class="TInput" border="0" cellspadding ="10" cellspacing="0" align="center">
           <tr>
             <th colspan="2">Pilih Mana Yang Lebih Penting</th>
           </tr>
           <tr>
             <td><label for="">1. LAYAR dan PROCESSOR</label></td>
             <td><select class="" name="k1vk2">
               <option value="1">Sama Penting</option>
               <option value="2">LAYAR cukup penting dari PROCESSOR</option>
               <option value="3">PROCESSOR cukup penting dari LAYAR</option>
               <option value="4">LAYAR lebih penting dari PROCESSOR</option>
               <option value="5">PROCESSOR lebih penting dari LAYAR</option>
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
             </select></td>
           </tr>
         </table>
         <div class="main-button">
           <button type="submit" name="submit">Enter</button>
         </div>
       </form>
     </div>
  </body>
</html>
