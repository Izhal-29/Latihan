<?php 

  require "function.php"; // mengambil data dari function.php
  $mahasiswa = query("SELECT * FROM mahasiswa");

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
  <h1>Daftar Mahasiswa</h1>
  <a href="Tambah.php">Tambah Mahasiswa</a>
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
        <a href="">Ubah</a> |
        <a href="Hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus Data');">Hapus</a>   <!-- ID dirikirmkan lewat URL -->
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