<?php 
  // membuat cookie :
  setcookie('nama', 'rizhal', time()+60); 
  // setcookie(keynya/nama cookienya, valuenya/isinya mau apa, waktu expire)
  // time()+60) ==> expire semenit
  

?>

<!-- 
  informasi disimpan di browser / client
  berlaku 1 sesi tetapi dapat diatur berapa lama untuk expire
  penggunaan Cookie :
  * Mengenali User
  * Shopping Cart ==> Keranjang Belanja berpindah kehalaman lain untuk mencari barang yang lain
  * Personalisasi ==> Mengetahui prilaku User ini kesukaannya apa, jadi akan menampilkan yang serupa 
-->