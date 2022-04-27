<?php 

require '../function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM produk
          WHERE
          id_brand LIKE '%$keyword%' OR
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
          
$item = query($query);
?>

<div class="row">
  <h1 class="text-warning">Hasil Pencarian :</h1>
  <?php 
    foreach($item as $i){
  ?>
  <div class="col-lg-2 kartu">
    <a href="item.php?id=<?= $i['id']?>">
      <div class="card border-0 shadow">
        <img src="img/<?= $i["gambar"] ?>" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title text-light"><?= $i["nama_produk"]; ?></h5>
          <h5 class="card-text text-warning"><?= "Rp. ". number_format($i["harga"], 0, "," , "."); ?></h5>
        </div>
      </div>
    </a>
  </div>
  <?php
    } 
  ?>
</div>