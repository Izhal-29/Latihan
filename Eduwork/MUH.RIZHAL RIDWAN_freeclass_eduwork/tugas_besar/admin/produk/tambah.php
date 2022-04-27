<?php 
  session_start();

  if(!isset($_SESSION["login"])){
    header("location:../../login.php");
    exit;
  }

  require "function.php";
  if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
      echo "
            <script>
              alert ('Data Berhasil ditambahkan!');
              document.location.href='Index.php'
            </script>
            ";
    } else {
      echo "
            <script>
              alert ('Data Gagal ditambahkan!');
              document.location.href='Index.php'
            </script>
            ";
    }
    // var_dump($_POST);
    // var_dump($_FILES);
  }

  $a_brand = mysqli_query($conn, "SELECT * FROM brand");
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
        <a href="index.php" id="produk">
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


  <div  class="home-content">
    <div class="container-fluid">

      <div class="row bg-warning">
        <div class="col text-center">
          <h1>Form Tambah Data Produk</h1>
        </div>
      </div>

      <div class="row formt">
        <form action="" method="POST" enctype="multipart/form-data">
          <!-- <input type="hidden" name="id" value=""> -->
          <div class="col-lg-12">

            <div class="row">
              <div class="col-lg-2">
                <label for="brand">Nama Brand :</label>
              </div>
              <div class="col-lg-3">
                <select name="id_brand" id="brand" class="form-select">
                  <option value="">-- Pilih Brand --</option>
                  <?php 
                    while($brand = mysqli_fetch_array($a_brand)) { ?>
                      
                    <option value="<?= $brand["id"]; ?>"> <?= $brand["nama_brand"]; ?> </option>
                        
                  <?php } ?>
                </select>
              </div>
              <div class="col-lg-2">
                <label for="nama_produk">Nama Produk :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="nama_produk" type="text" id="nama_produk">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-2">
                <label for="gender">Gender :</label>
              </div>
              <div class="col-lg-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="gender" type="radio" id="pria" value="pria"> 
                  <label class="form-check-label" for="pria">Pria</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="gender" type="radio" id="wanita" value="wanita"> 
                  <label class="form-check-label" for="wanita">Wanita</label>
                </div>
              </div>
              <div class="col-lg-2">
                <label for="model">Model :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="model" type="text" id="model">       
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="series">Series :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="series" type="text" id="series">
              </div>
              <div class="col-lg-2">
                <label for="movement">Movement :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="movement" type="text" id="movement">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="case_diameter">Case Diameter :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="case_diameter" type="text" id="case_diameter">
              </div>
              <div class="col-lg-2">
                <label for="case_thickness">Case Thickness :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="case_thickness" type="text" id="case_thickness">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="lug_width">Lug Width :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="lug_width" type="text" id="lug_width">
              </div>
              <div class="col-lg-2">
                <label for="glass_material">Glass Material :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="glass_material" type="text" id="glass_material">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="case_material">Case Material :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="case_material" type="text" id="case_material">
              </div>
              <div class="col-lg-2">
                <label for="water_resistant">Water Resistant :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="water_resistant" type="text" id="water_resistant">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="case_back">Case Back :</label>  
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="case_back" type="text" id="case_back">
              </div>
              <div class="col-lg-2">
                <label for="strap_material">Strap Material :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="strap_material" type="text" id="strap_material">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="clasp">Clasp :</label>   
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="clasp" type="text" id="clasp">
              </div>
              <div class="col-lg-2">
                <label for="calender">Calender :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="calender" type="text" id="calender">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="luminious_lumibrite">Luminious Lumibrite :</label>  
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="luminious_lumibrite" type="text" id="luminious_lumibrite">
              </div>
              <div class="col-lg-2">
                <label for="dial_color">Dial Color :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="dial_color" type="text" id="dial_color">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="harga">Harga :</label>  
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="harga" type="text" id="harga">
              </div>
              <div class="col-lg-2">
                <label for="stok">Stok :</label>
              </div>
              <div class="col-lg-3">
                <input class="form-control" name="stok" type="text" id="stok">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <label for="deskripsi">Deskripsi :</label>  
              </div>
              <div class="col-lg-3">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
              </div>
              <div class="col-lg-2">
                <label for="gambar">Gambar :</label>
              </div>
              <div class="col-lg-3">
                <input type="file" name="gambar" id="gambar" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <button type="submit" class="form-control btn btn-primary btn-lg" name="submit"> Tambah </button>
              </div>
            </div>
          </div>
        </form>
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
    // function confirmation(id){
    //   if (confirm("Apakah anda yakin ingin mneghapus data ini ?")){
    //     window.location.href='hapus.php?id='+id;
    //   }
    // }
  </script>
</body>
</html>