<?php 
  session_start();

  if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
  }

  require "function.php"; // mengambil data dari function.php
  $mahasiswa = query("SELECT * FROM mahasiswa");
  // ORDER BY id DESC/ASC untuk mengurutkan data yang tampilkan ASC (dari kecil kebesar) DESC (Dari besar ke kecil)

  //tombol cari di tekan
  if (isset ($_POST["cari"])){ 
    $mahasiswa = cari($_POST["keyword"]);
    // kita akan mencari data sesuai dengan keyword yang dimasukkan
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <a href="logout.php">Logout</a>
  <h1>Daftar Mahasiswa</h1>
  <a href="Tambah.php">Tambah Mahasiswa</a>
  <br><br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword Pencarian.." autocomplete="off" autofocus>
    <!-- 
      autocomplete ==> untuk mengatur history
      autofocus ==> untuk mengaktifkan langsung ketika URL dibuka
     -->
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>
  <table border="1" cellpaddding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $i=1;
      foreach ($mahasiswa as $row ) :
    ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="Update.php?id=<?= $row["id"]; ?>">Ubah</a> | <!-- ID dirikirmkan lewat URL -->
        <a href="Hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus Data');">Hapus</a> <!-- ID dirikirmkan lewat URL -->
        
      </td>
      <td>
        <img src="img/<?= $row["gambar"]; ?>" alt="">
      </td>
      <td><?= $row ["nrp"]; ?></td>
      <td><?= $row ["nama"]; ?></td>
      <td><?= $row ["email"]; ?></td>
      <td><?= $row ["jurusan"]; ?></td>
    </tr>
    <?php 
      $i++;
      endforeach; 
    ?>
  </table>
</body>
</html>