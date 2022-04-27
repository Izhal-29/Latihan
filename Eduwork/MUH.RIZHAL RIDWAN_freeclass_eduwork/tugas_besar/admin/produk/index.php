<?php 

session_start();

if(!isset($_SESSION["login"])){
  header("location:../../login.php");
  exit;
}

  require "function.php";
  
  $produk = query("SELECT produk.*, brand.nama_brand 
                    FROM produk
                    JOIN brand ON brand.id = produk.id_brand;
                  ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

   <!-- font google -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  

  <title>Produk</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo-content">
      <div class="logo">
        <i class="bi-smartwatch"></i>
        <div class="logo-name"><a href="../../index.php"> WATCH <span class="text-warning"> Katalog </span> </a></div>
      </div>
      <i class="bi-menu-button-wide-fill" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="../user/index.php" id="user">
          <i class="bi-person-circle"></i>
          <span class="links-name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#" id="produk">
          <i class="bi-shop"></i>
          <span class="links-name">Produk</span>
        </a>
        <span class="tooltip">Produk</span>
      </li>
      <li>
        <a href="../brand/index.php" id="brand">
          <i class="bi-postcard-fill"></i>
          <span class="links-name">Brand</span>
        </a>
        <span class="tooltip">Brand</span>
      </li>
      <li>
        <a href="../supplier/index.php" id="supplier">
          <i class="bi-shop-window"></i>
          <span class="links-name">Supplier</span>
        </a>
        <span class="tooltip">Supplier</span>
      </li>
    </ul>
    <div class="profile-content">
      <div class="profile">
        <div class="profile-details">
          <img src="../../img/user/admin.png" alt="">
          <div class="name-job">
            <div class="name">Admin</div>
            <div class="job">Administrator</div>
          </div>
        </div>
        <a href="../../Logout.php"><i class="bi-door-open-fill" id="log-out"></a></i>
      </div>
    </div>
  </div>


  <div class="home-content">
    <div class="container-fluid">

      <div class="row bg-warning">
        <div class="col text-center">
          <h1>Data Produk</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary tambah" href="tambah.php"> <i class="bi-plus-circle-fill"> Tambah Produk </i> </a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <table id="table" class="display table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Brand</th>
                <th>Nama Produk</th>
                <th>Spesifikasi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=1;
                foreach($produk as $p) {
              ?>  
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $p["nama_brand"]; ?></td>
                <td><?php echo $p["nama_produk"]; ?></td>
                <td>
                  <?php 
                    echo "<b> Gender </b> : ".$p["gender"].",
                          <b> Model </b> : ".$p["model"].", 
                          <b> Series </b> : ".$p["series"].", 
                          <b> Movement </b> : ".$p["movement"].",
                          <b> Case Diameter </b> : ".$p["case_diameter"].",
                          <b> Case Thickness </b> : ".$p["case_thickness"].",
                          <b> Lug Width </b> : ".$p["lug_width"].",
                          <b> Glass Material </b> : ".$p["glass_material"].",
                          <b> Case Thickness </b> : ".$p["case_thickness"].",
                          <b> Case Material </b> : ".$p["case_material"].",
                          <b> Water Resistant </b> : ".$p["water_resistant"].",
                          <b> Case Back </b> : ".$p["case_back"].",
                          <b> Strap Material </b> : ".$p["strap_material"].",
                          <b> Clasp </b> : ".$p["clasp"].",
                          <b> Calender </b> : ".$p["calender"].",
                          <b> Luminious Lumibrite </b> : ".$p["luminious_lumibrite"].",
                          <b> Dial Color </b> : ".$p["dial_color"].",
                          "; 
                  ?>
                </td>
                <td><?php echo "Rp. ". number_format($p["harga"], 0, "," , "."); ?></td>
                <td><?php echo $p["stok"]; ?></td>
                <td align="center" valign="middle"><img src="../../img/<?php echo $p["gambar"]; ?>" alt=""></td>
                <td class="text-center aksi"> 
                  <a href="edit.php?id=<?= $p['id']; ?>" class="btn btn-warning"> <i class="bi-pencil-square"> Edit </i> </a> 
                  <a href="hapus.php?id=<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?');"> <i class="bi-trash3"> Hapus </i> </a>
                </td>
              </tr>
              <?php 
                $no++;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchbtn = document.querySelector(".bi-search"); 

    btn.onclick = function(){
      sidebar.classList.toggle("active");
    };

    searchbtn.onclick = function(){
      sidebar.classList.toggle("active");
    };

    $(document).ready( function () {
      $('#table').DataTable();
    } );
  </script>
</body>
</html>