<?php 
  $mahasiswi = ["Sinta", "737309788909", "Teknik Informatika", "sintajojo@gmail.com"];
  $mahasiswa = [
    ["Rizhal", "7373092912912", "Sistem Informasi", "isal.informatika@gmail.com"],
    ["Ridwan", "7373098907002", "Sistem Informasi", "informatika749@gmail.com"],
    ["Raya", "737309998076", "Sistem Informasi", "rayaindos@gmail.com"]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasisswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <h3>Menampilkan isi Array</h3>
  <ul>
    <li> <?php echo $mahasiswi [0] ?></li>
    <li> <?php echo $mahasiswi [1] ?></li>
    <li> <?php echo $mahasiswi [2] ?></li>
    <li> <?php echo $mahasiswi [3] ?></li>
  </ul>

  <h3>Menampilkan isi Array menggunakan templating</h3>
  <ul>
   <?php foreach($mahasiswi as $mhs) :?>
    <li> <?= $mhs; ?> </li>
   <?php endforeach;?>
  </ul>

  <h3>Menampilkan isi Array dalam array menggunakan templating</h3>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
    <li> Nama : <?= $mhs [0]; ?> </li>
    <li> NRP : <?= $mhs [1]; ?> </li>
    <li> Jurusan : <?= $mhs [2]; ?> </li>
    <li> E-Mail : <?= $mhs [3]; ?> </li>
  </ul>
  <?php endforeach; ?>
</body>
</html>