<?php 
// Variabel superglobals yang sudah dimiliki PHP (typenya ARRAY ASSOCIATIVE) :
// => $_GET -----> datanya dikirim lewat URL dan juga bisa lewat form tetapi datanay muncul pada URL
// => $_POST -----> datanya dikirim lewat form jdi hrus buat form dulu baru dapat menggunakan metode ini, kelebihannya datanya tidak tampil pada URL
// => $_REQUEST
// => $_SESSION
// => $_COOKIE
// => $_SERVER
// => $_ENV

  // $x = 10;
  // function tampilx(){
  //   global $x;// memanggil variabel diluar dari function
  //   echo $x;
  // }

  // tampilx();
  // echo "<br>";

  // // $_GET["nama"] = "Rizhal";
  // // $_GET["nrp"] = "7373092912912";

  // var_dump($_GET);


  $mobil = [
    [
      "merk" => "Honda City",
      "noangka" => "7373092912912",
      "warna" => "Blue Pearl",
      "transmisi" => "Manual",
      "gambar" => "City.jpg"
    ],
  
    [
      "merk" => "Honda Brio",
      "noangka" => "7373098907002",
      "warna" => "Tafetta White",
      "transmisi" => "Automatic",
      "gambar" => "Brio.jpg"
    ],
  
    [
      "merk" => "Honda BR-V",
      "noangka" => "737309998076",
      "warna" => "Red Pearl",
      "transmisi" => "Automatic",
      "gambar" => "BRV.jpg"
    ]
  ];
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
  <h1>Daftar Mobil</h1>
  <?php foreach($mobil as $mbl) : ?>
    <ul>
      <li>
          <a href="latihan2.php?
            gambar=<?= $mbl ["gambar"]; ?>&
            merk= <?= $mbl ["merk"]; ?>&
            noangka= <?= $mbl ["noangka"]; ?>&
            warna= <?= $mbl ["warna"]; ?>&
            transmisi= <?= $mbl ["transmisi"]; ?>">
            <!-- fungsinya untuk mengirim data ke file Latihan2.php  -->
            <?= $mbl ["merk"]; ?> 
          </a> 
      </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>