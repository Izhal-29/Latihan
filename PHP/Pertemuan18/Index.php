<?php 
  session_start();

  if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
  }

  require "function.php"; // mengambil data dari function.php

  // pagination
  // konfigurasi 
  $jumlahDataPerhalaman = 3;
  $jumlahData = count(query("SELECT * FROM mahasiswa")); // menghitung Jumlah Data dalam tabel Mahasisswa yang array associative
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
  // floor --> membulatkan ke pecahan desimal ke bawah jika 1,5 jadi 1
  // round --> membulatkan ke pecahan desimal terdekat jika 1,5 jadi 1, 1,6 jadi 2
  // ceil --> membulatkan ke pecahan desimal ke atas jika 1,5 jadi 2
  
  // if (isset($_GET["halaman"])){
  //   $halamanAktif = $_GET["halaman"];
  // } else {
  //   $halamanAktif = 1;
  // }

  $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; // Ternary

  $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman; // formula untuk mengganti data perhalaman

  $mahasiswa = query("SELECT * FROM mahasiswa LIMIT  $awalData,$jumlahDataPerhalaman");
  // tampilkan 5 data dimulai dengan index ke-0
  // LIMIT nilainya ada dua yaitu datanya mau dimulai dari data keberapa menggunakan index, mau berapa data yang mau ditampilkan
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
  <link rel="stylesheet" href="style.css">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Tugas anda untuk menyesuaikan pagination dengan searching</h1>
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

  <!-- Navigasi -->
  <?php if($halamanAktif > 1) : ?>
    <a href="?halaman= <?= $halamanAktif - 1; ?> ">&laquo;</a>
  <?php endif; ?>

  <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif) : ?>
      <a class=navigasi href="?halaman= <?= $i ?>"> <?= $i ?> </a>
    <?php else : ?>
      <a href="?halaman= <?= $i ?> "> <?= $i ?> </a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if($halamanAktif  < $jumlahHalaman) : ?>
    <a href="?halaman= <?= $halamanAktif + 1; ?> ">&raquo;</a>
  <?php endif; ?>

  <br><br>
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