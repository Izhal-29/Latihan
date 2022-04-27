<?php 

session_start();

if(!isset($_SESSION["login"])){
  header("location:../../login.php");
  exit;
}

require "function.php";

if(isset($_POST["registrasi"])){

  if(registrasi($_POST) > 0){
    echo "
          <script>
            alert ('User baru berhasil ditambahkan!');
            document.location.href='Index.php'
          </script>
          ";
  } else {
    echo mysqli_error($conn);
  }
  // var_dump($_POST);
  // var_dump($_FILES);
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
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

   <!-- font google -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  

  <title>User</title>
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
        <a href="index.php" id="user">
          <i class="bi-person-circle"></i>
          <span class="links-name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="../produk/index.php" id="produk">
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
          <h1>Form Registrasi User</h1>
        </div>
      </div>

      <div class="row formt">
        <form action="" method="POST" enctype="multipart/form-data">
          <!-- <input type="hidden" name="id" value=""> -->
          <div class="col-lg-6 offset-3">


            <div class="row">
              <div class="col-lg-3">
                <label for="nama_user">Nama User :</label>
              </div>
              <div class="col-lg-4">
                <input class="form-control" name="nama_user" type="text" id="nama_user">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <label for="nama_brand">Hak Akses :</label>
              </div>
              <div class="col-lg-4">
                <select name="hak_akses" id="hak_akses" class="form-select">
                  <option value="">-- Pilih Hak Akses --</option>
                  <option value="administrator">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <label for="username">Username :</label>
              </div>
              <div class="col-lg-4">
                <input type="text" name="username" id="username" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <label for="pass">Password :</label>
              </div>
              <div class="col-lg-4">
                <input type="password" name="pass" id="pass" class="form-control">    
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <label for="pass2">Konfirmasi Password :</label>
              </div>
              <div class="col-lg-4">
                <input type="password" name="pass2" id="pass2" class="form-control">    
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <label for="foto">Foto :</label>
              </div>
              <div class="col-lg-4">
                <input type="file" name="foto" id="foto" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3">
                <button type="submit" class="form-control btn btn-primary btn-lg" name="registrasi"> Registrasi </button>
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