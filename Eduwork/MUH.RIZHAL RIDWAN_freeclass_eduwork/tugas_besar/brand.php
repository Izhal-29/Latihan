<?php 
  require "function.php";

  $id = $_GET['id_brand'];
  $brand = query("SELECT nama_brand,id FROM brand");
  $item = query("SELECT produk.*,brand.nama_brand, brand.logo 
                 FROM produk
                 JOIN brand ON brand.id = produk.id_brand 
                 WHERE id_brand = $id");  

  if(isset($_POST["cari"])){
    $produk = cari($_POST["keyword"]);
  }      

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
  <link rel="stylesheet" href="css/style.css">

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <!-- owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" />

  <title>Katalog</title>
</head>

<body style="background-color: #101010;">



  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
    <div class="container-fluid col-10">
      <a class="navbar-brand fw-bold display-2" href="index.php">WATCH <span class="text-warning"> Katalog <i class="bi-smartwatch"></i></span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-sm-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-card-list text-warning"></i>
            </a>
            <h6 class="text-warning">Brand</h6>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <?php foreach ($brand as $b) { ?>
                 <li><a class="dropdown-item" href="brand.php?id_brand=<?= $b['id']; ?>"><?= $b['nama_brand']; ?></a></li>
              <?php }  ?>
            </ul>
          </li>
        </ul>
        <form action="" method="POST" class="d-flex">
          <input class="form-control me-2"  size="40" type="search" name="keyword" id="keyword" autocomplete="off" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" name="cari" id="tombol-cari" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item"> 
            <a class="nav-link active text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Masuk Untuk CRUD" aria-current="page" href="login.php">
              <i class="bi-person-circle"> Masuk </i> 
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END Navbar -->   
  


  <!-- Slide -->
  <div class="container mt-5">

    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="img/promo.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/orient.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/ramadan.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <img src="img/banner.webp" alt="" class="img-fluid">
      </div>
    </div>

  </div>
  <!-- END Slide -->

  <!-- content -->
  <div class="container-fluid col-10 mt-5" id="isi">
    <div class="row">
      <h1 class="text-warning">Brand : <?= $item[0]['nama_brand'] ?> </h1>
      <?php 
       foreach($item AS $i){
      ?>
      <div class="col-lg-2 kartu">
        <a href="item.php?id=<?= $i["id"]?>">
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
  </div>
  <!-- END content -->
  
  <!-- footer -->
  <div class="container-fluid footer">
    <div class="row">
      <div class="col">
        <h5 class="text-center">Copyright &copy; 2022 izhal.com, All Right Reserved</h5>
      </div>
    </div>
  </div>
  <!-- END Footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Owl Carousel -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <!--Jquery -->
   <script src="js/main.js"></script>
</body>
</html>