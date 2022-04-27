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

    $id_brand = ($data["id_brand"]);
    $nama_produk = ($data["nama_produk"]);
    $gender = ($data["gender"]);
    $model = ($data["model"]);
    $series = ($data["series"]);
    $movement = ($data["movement"]);
    $case_diameter = ($data["case_diameter"]);
    $case_thickness = ($data["case_thickness"]);
    $lug_width = ($data["lug_width"]);
    $glass_material = ($data["glass_material"]);
    $case_material = ($data["case_material"]);
    $water_resistant = ($data["water_resistant"]);
    $case_back = ($data["case_back"]);
    $strap_material = ($data["strap_material"]);
    $clasp = ($data["clasp"]);
    $calender = ($data["calender"]);
    $luminious_lumibrite = ($data["luminious_lumibrite"]);
    $dial_color = ($data["dial_color"]);
    $deskripsi = ($data["deskripsi"]);
    $harga = ($data["harga"]);
    $stok = ($data["stok"]);

    $gambar = uploud();
      if (!$gambar){
        return false;
      }

    $query = "INSERT INTO produk VALUES('','$id_brand','$nama_produk','$gender','$model','$series','$movement','$case_diameter','$case_thickness','$lug_width','$glass_material','$case_material','$water_resistant','$case_back','$strap_material','$clasp','$calender','$luminious_lumibrite','$dial_color','$deskripsi','$harga','$stok','$gambar')";

    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
  }




  function uploud(){
    
    $namaFile = $_FILES["gambar"]['name'];
    $ukuranFile = $_FILES["gambar"]['size'];
    $error = $_FILES["gambar"]['error'];
    $tmpName = $_FILES["gambar"]['tmp_name'];

    if ($error === 4){ 
      echo "<script>
              alert ('Pilih gambar terlebih dahulu!');
            </script>";
      return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png','bmp'];
    $ekstensiGambar = explode ('.',$namaFile); 
    $ekstensiGambar = strtolower(end($ekstensiGambar));
   
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){ 
      
      echo "<script>
              alert ('Yang anda uploud bukan gambar!');
            </script>";
      return false;
    }

    if($ukuranFile > 1000000){
      echo "<script>
              alert ('Ukuran Gambar Terlalu Besar!');
            </script>";
      return false;
    }

     $namaFileBaru = uniqid(); 
     $namaFileBaru .= '.'; 
     $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../img/'.$namaFileBaru);

    return $namaFileBaru;
  }




  function update($data){
    global $conn;
    // mengambil data dari tiap elemen dalam form dan dibuatin variabel :
    $id = ($data["id"]);
    $id_brand = ($data["id_brand"]);
    $nama_produk = ($data["nama_produk"]);
    $gender = ($data["gender"]);
    $model = ($data["model"]);
    $series = ($data["series"]);
    $movement = ($data["movement"]);
    $case_diameter = ($data["case_diameter"]);
    $case_thickness = ($data["case_thickness"]);
    $lug_width = ($data["lug_width"]);
    $glass_material = ($data["glass_material"]);
    $case_material = ($data["case_material"]);
    $water_resistant = ($data["water_resistant"]);
    $case_back = ($data["case_back"]);
    $strap_material = ($data["strap_material"]);
    $clasp = ($data["clasp"]);
    $calender = ($data["calender"]);
    $luminious_lumibrite = ($data["luminious_lumibrite"]);
    $dial_color = ($data["dial_color"]);
    $deskripsi = ($data["deskripsi"]);
    $harga = ($data["harga"]);
    $stok = ($data["stok"]);
    $gambarLama = ($data["gambarLama"]);

    
    if ($_FILES['gambar']['error'] === 4){
      $gambar = $gambarLama; 
    } else { 
      $gambar = uploud();
    }

    $query = "UPDATE produk SET 
                id_brand = '$id_brand',
                nama_produk = '$nama_produk',
                gender = '$gender',
                model = '$model',
                series = '$series',
                movement = '$movement',
                case_diameter = '$case_diameter',
                case_thickness = '$case_thickness',
                lug_width = '$lug_width',
                glass_material = '$glass_material',
                case_material = '$case_material',
                water_resistant = '$water_resistant',
                case_back = '$case_back',
                strap_material = '$strap_material',
                clasp = '$clasp',
                calender = '$calender',
                luminious_lumibrite = '$luminious_lumibrite',
                dial_color = '$dial_color',
                deskripsi = '$deskripsi',
                harga = '$harga',
                stok = '$stok',
                gambar = '$gambar'
              WHERE id = $id
              ";
  
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
  }


  
  function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);
  }
?>