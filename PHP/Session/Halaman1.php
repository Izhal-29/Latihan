<?php

session_start(); // harus ada ketika menggunakan $_SESSION

$_SESSION["nama"] = "Rizhal Ridwan";


?>
<!-- 
  mekanisme penyimpanan informasi ke dalam variabel agar bisa digunakan di lebih dari satu halaman dan disimpan di server (SESSION) 

  Variabel Superglobals $_SESSION
  syaratnya kita harus jalankan lebih dahulu menggunakan session_start();

  datanya akan hilang ketika 1 sesi / browsernya di close / komputernya direstart, jadi ketika ingin menggunakan session lagi maka harus di set lagi atau ke halaman dimana terdapat variabel Sessionnya dibuat
-->
//test