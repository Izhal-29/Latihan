<?php 
  $array = [
    [
      'nama' => 'Pelita',
      'umur' => 20,
      'kelas' => 'Laravel'
    ],
    [
      'nama' => 'Nur',
      'umur' => 22,
      'kelas' => 'Node Js'
    ],
    [
      'nama' => 'Najmina',
      'umur' => 25,
      'kelas' => 'Javascript'
    ],
  ];

  foreach ($array as $a ){
    echo "nama : ".$a['nama'].",
    umur : ".$a['umur'].",
    Kelas :".$a['kelas']."<br>";
  }
?>