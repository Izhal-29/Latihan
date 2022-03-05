<?php
  // fungsi date() --> untuk menampilkna tanggal dengan format tertentu
  echo date("l, d-M-Y");
  echo "<br>";

  // UNIX Timestamp / EPOCH time
  // fungsi time() --> detik yang sudah berlalu sejak 1 Januari 1970
  echo time();
  echo "<br>";

  echo date("l, d-M-Y", time()+60*60*24*360);//menampilkan 100 tanggal kedepan dari hari sekarang
  echo "<br>";

  //mktime --> membuat detik sendiri menggunakan angka 
  //mktime(0,0,0,0,0,0)
  //urutannya jam, menit, detik, bulan, tanggal, tahun

  echo date("l", mktime(0,0,0,12,29,1992)); //menampilkan hari sesuai yang kita tentukan
  echo "<br>";

  //strtotime --> membuat waktu sendiri menggunakan string
  //strtotime (".. ... ....")
  //urutannya tanggal, bulan, tahun
  echo date("l", strtotime("29 Dec 1992")); //menampilkan hari sesuai yang kita tentukan
  echo "<br>";
?>