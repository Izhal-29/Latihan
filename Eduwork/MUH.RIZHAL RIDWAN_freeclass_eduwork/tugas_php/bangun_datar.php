<?php 
echo "<h1>Menghitung Bangun Datar</h1>";

echo "----- Menghitung Persegi ----- <br><br>";
$sp = 5;
$lp = $sp * $sp;
$kp = 4 * $sp;

echo "Luas Persegi : ". $sp . " * " . $sp . " = " . $lp ." cm&sup2; <br><br>";
echo "Keliling Persegi : 4 * " . $sp . " = " . $kp ." cm <br><br><br>";



echo "----- Menghitung Segitiga ----- <br><br>";
$as = 5;
$ts = 3;
$ss = 4;
$ls = 0.5 * $as * $ts;
$ks = $ss + $ss + $ss;

echo "Luas Segitiga : 0.5 * " . $as . " * " . $ts . " = " . $ls ." cm&sup2; <br><br>";
echo "Keliling Segitiga : " . $ss . " + " . $ss . " + " . $ss . " = " . $kp ." cm <br><br><br>";



echo "----- Menghitung Lingkaran ----- <br><br>";
$dl = 14;
$rl = $dl / 2;
$ll = 3.14 * $rl**2;
$kl = 3.14 * $dl;
$ks = $ss + $ss + $ss;


echo "Luas Lingkaran dengan diameter 14 cm : <br>
 r => " . $dl . " /  2 = " . $rl ." cm <br><br>";
echo "Luas Lingkaran : 3.14 * " . $rl ."&sup2 = " . $ll ." cm&sup2; <br><br>" ;
echo "Keliling Lingkaran : 2 * 3.14 * " . $rl . " = " . $kl ." cm <br><br><br>";



echo "----- Menghitung Belah Ketupat ----- <br><br>";
$sbk =  10;
$d1 = 12;
$d2 = 16;
$kbk = $sbk * 4;
$lbk = 0.5*$d1*$d2;


echo "Luas belah ketupat dengan diagonal 1 = 12 dan diagonal 2 = 16 : <br>
 L => 0.5 * " . $d1 . " * ". $d2 ." = " . $lbk ." cm&sup2 <br><br>";
echo "Keliling belah ketupat : ". $sbk . " * 4 = ".$kbk." cm <br><br><br>";



echo "----- Menghitung Trapesium ----- <br><br>";
$st1 = 14;
$st2 = 12;
$st3 = 16;
$st4 = 16;
$tt = 5;
$kt = $st1 + $st2 + $st3 + $st4;
$lt = ($st1 + $st2) * $tt / 2;


echo "Luas Trapesium : <br>
L => (".$st1. " + ".$st2.") * ".$tt." / 2 = ".$lt." cm&sup2 <br><br>";
echo "Keliling Trapesium : <br>
K => ".$st1. " + ".$st2." + ".$st3." + ".$st4." = " . $kt ." cm <br><br><br>";



echo "----- Menghitung Layang-layang ----- <br><br>";
$sl1 = 10;
$sl2 = 15;
$sl3 = 10;
$sl4 = 15;
$d1l = 25;
$d2l = 12;
$kll = $sl1 + $sl2 + $sl3 + $sl4;
$lll = 0.5 * $d1l * $d2l;


echo "Luas Layang-layang : <br>
L => 0.5 * ".$d1l. " * ".$d2l." = ".$lll." cm&sup2 <br><br>";
echo "Keliling Layang-layang : <br>
K => ".$sl1. " + ".$sl2." + ".$sl3." + ".$sl4." = " . $kll ." cm <br><br><br>";
?>