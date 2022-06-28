<?php 
  $array = file_get_contents('data.json');
  $data = json_decode($array, true);

  foreach ($data as $d):
    echo 
    "nama : ".$d['nama'].",
    Kelas : ".$d['kelas'].",
    Umur : ".$d['umur']."<br>";
  endforeach;
?>