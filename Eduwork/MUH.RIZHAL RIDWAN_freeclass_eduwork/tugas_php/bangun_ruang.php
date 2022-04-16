<?php 
echo "<h1>Menghitung Bangun Ruang</h1>";

echo "----- Menghitung Kubus ----- <br><br>";
$rk = 12;
$sk = 6;
$tsk= 8;
$lk = $sk * $rk**2;
$vk = $rk**3;

echo "Rusuk = ".$rk." <br> Sisi = ".$sk." <br> Titik sudut = ".$tsk." <br><br>";
echo "Luas Permukaan Kubus : ". $sk. " * " . $rk . "<sup>2</sup> = " . $lk ." cm&sup2; <br><br>";
echo "Volume Kubus : " . $rk . "<sup>3</sup> = " . $vk ." cm&sup3 <br><br><br>";



echo "----- Menghitung Bola ----- <br><br>";
$rb = 6;
$lb = 4 * 3.14 * $rb**2;
$vb = 4/3 * 3.14 * $rb**3;

echo "Rusuk = ".$rb." <br><br>";
echo "Luas Permukaan Bola : 4 * 3.14 * ". $rb. " <sup>2</sup> = " . $lb ." cm&sup2; <br><br>";
echo "Volume Bola : 4/3 * 3.14 *" . $rb . "<sup>3</sup> = " . $vb ." cm&sup3 <br><br><br>";


echo "----- Menghitung Kerucut ----- <br><br>";
$skc = 6;
$rkc = 5;
$tkc = 10;
$lsk = 4 * $rkc * $skc;
$lpk = 3.14 * $rkc * $skc + 3.14 * $rkc**2;
$vkc = 1/3 * 3.14 * $rkc**2 * $tkc;

echo "Rusuk = ".$rkc."<br> Sisi = ".$skc." <br> Tinggi = ".$tkc." <br><br>";
echo "Luas Selimut Kerucut : 4 * ". $rkc. " * ".$skc." = " . $lsk ." cm <br><br>";
echo "Luas Permukaan Kerucut : 3.14 * ". $rkc. " * ".$skc." + 3.14 * ".$rkc."<sup>2</sup> = " .$lpk." cm&sup2; <br><br>";
echo "Volume Kerucut : 1/3 * 3.14 * " . $rkc . "<sup>2</sup> * ".$tkc." = " . $vkc." cm&sup3 <br><br><br>";
?>