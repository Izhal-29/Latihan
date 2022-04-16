<?php 
$nama = "Rizhal";
$tb = 170; // Tinggi Badan
$bb = 90; // Berat Badan
$bmi = ($bb / $tb**2)*10000;
$hasil;

if ($bmi <= 18.5){
  $hasil = "Kurus";
} else if ( $bmi <= 22.9 ){
  $hasil = "Sedang";
} else if ($bmi <= 24.9){
  $hasil = "Gemuk";
} else {
  $hasil = "Obesitas";
}

echo "Halo, ".$nama.". Nilai BMI anda adalah ".$bmi.", anda termasuk ".$hasil;

?>