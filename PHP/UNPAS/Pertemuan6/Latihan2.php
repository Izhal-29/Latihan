<?php 
 $mahasiswa = [
  ["Rizhal", "7373092912912", "Sistem Informasi", "isal.informatika@gmail.com"],
  ["Ridwan", "7373098907002", "Sistem Informasi", "informatika749@gmail.com"],
  ["Raya", "737309998076", "Sistem Informasi", "rayaindos@gmail.com"]
 ];
 // echo $mahasiswa [0][0];

 // array Associative
//  defenisinya sama seperti array numerik, kecuali
//  key-nya adalah string yang kita buat sendiri

$mahasiswa0 = [
  [
    "nama" => "Rizhal",
    "nrp" => "7373092912912",
    "jurusan" => "Sistem Informasi",
    "email" => "isal.informatika@gmail.com",
    "gambar" => "Aisyah.jpeg"
  ],

  [
    "nama" => "Ridwan",
    "nrp" => "7373098907002",
    "jurusan" => "Sistem Informasi",
    "email" => "informatika749@gmail.com",
    "gambar" => "Anya.jpg"
  ],

  [
    "nama" => "Raya",
    "nrp" => "737309998076",
    "jurusan" => "Sistem Informasi",
    "email" => "rayaindos@gmail.com",
    "gambar" => "fenni.jpg"
  ]
];

// echo $mahasiswa0 [0]["nama"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa menggunakan Array Numerik</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs [0]; ?></li>
      <li>NRP : <?= $mhs [1]; ?></li>
      <li>Jurusan : <?= $mhs [2]; ?></li>
      <li>Email : <?= $mhs [3]; ?></li>
    </ul>
  <?php endforeach; ?>

  <h1>Daftar Mahasiswa menggunakan array Associative</h1>
  <?php foreach ($mahasiswa0 as $mhs0) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs0 ["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs0 ["nama"]; ?></li>
      <li>NRP : <?= $mhs0 ["nrp"]; ?></li>
      <li>Jurusan : <?= $mhs0 ["jurusan"]; ?></li>
      <li>Email : <?= $mhs0 ["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>s
</html>