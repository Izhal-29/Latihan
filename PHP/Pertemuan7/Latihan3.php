<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if(isset($_POST["submit"])) : ?>
    <h1>Halo, Selamat datang <?= $_POST["nama"]; ?></h1>
  <?php endif; ?>
    <!-- !isset bacanya belum 
          isset bacanya sudah -->
    <!-- apakah tombol submit sudah dipencet atau belum kalau udah maka tampilkan jika tidak maka tidak ditampilkan -->

  <form action="" method="post"> <!-- nilai default methodnya itu get -->
    Masukkan Merk : <input type="text" name="nama">
    <br>
    <button type="submit" name="submit"> Kirim </button>
    <!-- saya membuat sebuah form dengan menggunakan metode POST dan semua data di dalam formnya akan dirikimkan ke Latihan4.php jika actionnya kosong maka datanay akan dikirimkan ke halaman ini sendiri -->
  </form>
</body>
</html>