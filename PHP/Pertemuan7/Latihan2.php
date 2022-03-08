
<?php 
//cek apakah tidak ada data di $_GET

  if ( 
    !isset($_GET["merk"]) ||
    !isset($_GET["noangka"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["transmisi"]) ||
    !isset($_GET["gambar"])
    ) {
    //redirect
    header("location:Latihan1.php"); //Alamat tujuannya kemana
    exit;//agar sript dibawahnya tidak dieksekusi   
    }
  //ini maksudnya adalah ketika $_GET["merk"] belum di set paksa Usernya buat pindah ke lokasi/file latihan1.php
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Data <?= $_GET ["merk"] ?></h1>
    <ul>
      <li> 
        <img src="img/<?= $_GET ["gambar"]; ?>" alt="Gambar Mobil" width="200" height="100"> 
      </li>
      <li> Merk : <?= $_GET ["merk"];  ?> </li>
      <li> No. Angka : <?= $_GET ["noangka"]; ?> </li>
      <li> Warna : <?= $_GET ["warna"]; ?> </li>
      <li> Transmisi : <?= $_GET ["transmisi"]; ?> </li>
    </ul>
    <a href="Latihan1.php">Kembali</a>
</body>
</html>