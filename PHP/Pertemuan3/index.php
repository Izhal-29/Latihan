<?php
// kontrol flow (struktur kendali) :  mengatur alur pembacaan program

// *****pengulangaan***** 
// ketika kita ingin megerjakan sebuah blok program tanpa harus menulis sulang scriptnya:
// for, while, do... while, foreach (pengulangan khusus array)

echo "-----Pengulangan for-----<br>";
  // for (inisialisasi; Terminasi; Increment/decrement){
  //   apa yang akan dilakukan
  // }

  for ($i = 0; $i < 5; $i++){
    echo "Hello World! <br>";
  }

echo "-----Pengulangan While-----<br>";
// ketika kondisinya true lakukan hal ini (Cek kondisinya lalu jalankan)
// tidak akan dikerjakan jika false
  $j = 0; // inisialisasi (Variabel awal yang digunakan)
  while ($j < 5){ //kondisi terminasi (untuk memberhentikan pengulangannya)
    echo "Hello World! <br>";
    $j++; //kondisi increment/decrement (agar pengulangannya bisa maju atau mundur)
  }
 

  echo "-----Pengulangan do... While-----<br>";
  // lakukan hal ini selama kondisi bernilai true (jalankan dulu lalu cek kondisinya)
  // dikerjakan minimal sekali ketika false
  $k = 6; // inisialisasi (Variabel awal yang digunakan)
  do{
    echo "Hello World! <br>";
    $k++; //kondisi increment/decrement (agar pengulangannya bisa maju atau mundur)
  }while($k < 5);//kondisi terminasi (untuk memberhentikan pengulangannya)
  

// *****Pengkondisian***** 
// if.. else, if .. else if.. else, ternary, switch


?>