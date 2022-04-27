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
  


  function tambah($data){
    global $conn;

    $id = ($data["id"]);
    $nama_brand = ($data["nama_brand"]);
    $id_supplier = ($data["id_supplier"]);

    $logo = uploud();
      if (!$logo){
        return false;
      }

    $query = "INSERT INTO brand VALUES('$id','$nama_brand','$logo','$id_supplier')";

    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
  }


  function uploud(){
    
    $namaFile = $_FILES["logo"]['name'];
    $ukuranFile = $_FILES["logo"]['size'];
    $error = $_FILES["logo"]['error'];
    $tmpName = $_FILES["logo"]['tmp_name'];

    if ($error === 4){ 
      echo "<script>
              alert ('Pilih logo terlebih dahulu!');
            </script>";
      return false;
    }

    $ekstensiLogoValid = ['jpg','jpeg','png','bmp'];
    $ekstensiLogo = explode ('.',$namaFile); 
    $ekstensiLogo = strtolower(end($ekstensiLogo));
   
    if(!in_array($ekstensiLogo,$ekstensiLogoValid)){ 
      
      echo "<script>
              alert ('Yang anda uploud bukan logo!');
            </script>";
      return false;
    }

    if($ukuranFile > 1000000){
      echo "<script>
              alert ('Ukuran logo Terlalu Besar!');
            </script>";
      return false;
    }

     $namaFileBaru = uniqid(); 
     $namaFileBaru .= '.'; 
     $namaFileBaru .= $ekstensiLogo;

    move_uploaded_file($tmpName, '../../img/logo/'.$namaFileBaru);

    return $namaFileBaru;
  }




  function update($data){
    global $conn;
    // mengambil data dari tiap elemen dalam form dan dibuatin variabel :
    $id = ($data["id"]);
    $nama_brand = ($data["nama_brand"]);
    $id_supplier = ($data["id_supplier"]);
    $logoLama = ($data["logoLama"]);

    
    if ($_FILES['logo']['error'] === 4){
      $logo = $logoLama; 
    } else { 
      $logo = uploud();
    }

    $query = "UPDATE brand SET 
                nama_brand = '$nama_brand',
                id_supplier = '$id_supplier',
                logo = '$logo'
              WHERE id = $id
              ";
  
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
  }


  
  
  function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM brand WHERE id = $id");

    return mysqli_affected_rows($conn);
  }
?>