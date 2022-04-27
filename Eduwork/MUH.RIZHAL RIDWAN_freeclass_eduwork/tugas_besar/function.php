<?php 
  $conn = mysqli_connect("localhost","root","","tokojam");


  function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  function cari($keyword){
    $query = "SELECT * FROM produk
              WHERE
              id_brand LIKE '%$keyword%' OR
              -- nama_brand LIKE '%$keyword% OR
              nama_produk LIKE '%$keyword%' OR
              gender LIKE '%$keyword%' OR
              model LIKE '%$keyword%' OR
              series LIKE '%$keyword%' OR
              movement LIKE '%$keyword%' OR
              case_diameter LIKE '%$keyword%' OR
              case_thickness LIKE '%$keyword%' OR
              glass_material LIKE '%$keyword%' OR
              case_material LIKE '%$keyword%' OR
              water_resistant LIKE '%$keyword%' OR
              case_back LIKE '%$keyword%' OR
              strap_material LIKE '%$keyword%' OR
              clasp LIKE '%$keyword%' OR
              calender LIKE '%$keyword%' OR
              dial_color LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";
  return query($query);
  }
?>