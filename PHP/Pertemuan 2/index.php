<?php
// STANDART OUTPUT
// ECHO, PRINT
// PRINT_R
// var_dump


// operator penggabung string/concatenation/concat ( . )

$nama1 = "Rizhal" ;
$nama2 = "Ridwan";

echo "Halo Nama Saya $nama1 " . " " . " $nama2 ";
echo "<br>";
echo $nama1. " " . $nama2;
echo "<br>";
// operator aritmatika
//  + - * / %

$x=10;
$y=20;
echo $x * $y;
echo '<br>';


echo "-----Operator Assignment (penugasan)----- <br>";
// =, +=, -=, *=, /=, %=, .=

$z = 5;
$z += 2;
echo $z;
echo '<br>';

$namaku = "Rizhal";
$namaku .= " ";
$namaku .= "Ridwan";
echo $namaku;
echo '<br>';


echo "-----Operator Perbandingan----- <br>"; 
// <,>, <=, >=, ==

var_dump(1 < 5);
echo '<br>';

var_dump(1 > 5);
echo '<br>';

var_dump(1 <= 5);
echo '<br>';

var_dump(1 <= 5);
echo '<br>';

var_dump(5 == "5");
echo '<br>';

var_dump(5 == 5);
echo '<br>';

echo "-----Identitas----- <br>";
// mengecek identitas sebuah nilai termasu type data
// ===, !==

var_dump(5 == "5");
echo '<br>';

var_dump(5 !== 5);
echo '<br>';

echo "-----Logika----- <br>";
// && (And), || (Or), ! (Not)
$a = 10;

var_dump($a < 20 && $a % 2 == 0); //jika kedua kondisinya benar maka true
echo '<br>';
var_dump($a < 5 || $a % 2 == 0); //jika salah satu kondisinya benar maka true



?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP</title>
</head>
<body>
  <h1>Ini HTML</h1> 
</body>
</html>