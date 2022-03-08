<?php 
//array
// variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tie data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array cara lama php dibawah 5.4
$hari = array ("Senin","Selasa","Rabu","Kamis", "Jum'at", "Sabtu");

// membuat array cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

$arr1 = [123, "Tulisan", False];

// menampilkan array 
// var_dump() / print_r()
// var_dump() ===> menampilkan key, type data, jumlah karakter dan valuenya
// print_r() ===> menampilkan key dan valuenya

var_dump($hari);
echo "<br><br>";
print_r($bulan);
echo "<br><br>";
var_dump($arr1);
echo "<br><br>";

// menampilknan 1 elemant/value pada array
echo $hari[0];
echo "<br><br>";

echo $bulan[1];
echo "<br><br>";

//menambahkan elemen baru pada array
$hari[] = "Minggu";
echo "<br>";
var_dump($hari);
?>
