<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Posttest 4</title>
</head>

<body>
  <nav>
    <div class="nama">Hijub Shop</div>
    <div class="pemisah"></div>
    <div class="home">Home</div>
    <div class="login">Login</div>
    <div class="price">Register</div>
  </nav>

  <div class="jumbotron">
    <div class="kiri">
      <p class="welcome">Selamat datang<br />di Hijub Shop</p>
      <p class="sub-welcome">Hijab Store Terbaik di Samarinda</p>
    </div>
    <div class="kanan">
      <p class="judul-login">Daftar</p>
      <p class="sub-judul-login">Bergabunglah dengan kami Sekarang!</p>
      <br><br>


      <form action="hasil.php" method="POST">
        <div class="form-group"> 
          <input type="text" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Email" name="email" required/>
          <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="Password1" placeholder="Password" name="password" required />
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="Umur1" placeholder="Umur" name="umur" required/>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="Tanggal" placeholder="tanggal" name="tanggal" required/>
          <small id="emailHelp" class="form-text">Tanggal lahir anda</small>
        </div>

        <br>
        <h4>Pilihan</h4>
        <input type="radio" id="rr" name="seller" value="Reseller">
        <label for="rr">Reseller</label><br>
        <input type="radio" id="pt" name="seller" value="Pegawai Toko">
        <label for="pt">Pegawai Toko</label><br>

        <br>
        <input type="checkbox" id="langganan" name="langganan" value="true">
        <label for="langganan">Ingin berlangganan email?</label><br>

        <button type="submit" class="button-login" value="daftar">Daftar</button>
      </form>
    </div>
  </div>

</body>

</html>