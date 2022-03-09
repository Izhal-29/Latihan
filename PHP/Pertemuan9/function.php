<?php 

  $conn = mysqli_connect("localhost", "root", "","phpdasar");

  function query($query){// menerima parameter dari index.php
    global $conn; //mengambil variabel diluar dari function agar dapat digunakan di dalam function
    $result = mysqli_query($conn, $query); // panggil query-nya
    $rows = []; // wadahnya
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row; // menambahkan elemen baru di akhir tiap array
    }
    return $rows; // mengembalikan wadahnya
  }

?>