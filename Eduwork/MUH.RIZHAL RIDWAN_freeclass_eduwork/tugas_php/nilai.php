<?php 
$nilai =91;

switch ($nilai){
  case ($nilai < 70) :
    echo " Nilai D";
  break;
  case ($nilai <= 80) :
    echo " Nilai C";
  break;
  case ($nilai <= 90) :
    echo " Nilai B";
  break;
  case ($nilai <=100) :
    echo " Nilai A";
  break;
  default :
    echo " Nilai tidak ada";
  break;
}
?>