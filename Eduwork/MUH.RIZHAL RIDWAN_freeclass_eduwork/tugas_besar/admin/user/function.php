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
  
  function registrasi($data){
    global $conn;

    $nama_user = $data["nama_user"];
    $hak_akses = $data["hak_akses"];
    $username = strtolower(stripslashes($data["username"]));
    $pass = mysqli_real_escape_string($conn,$data["pass"]);
    $pass2 = mysqli_real_escape_string($conn,$data["pass2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
      echo "<script>
              alert('username sudah terdaftar !')
            </script>";

      return false;
    }

    // cek konfirmasi password
    if($pass !== $pass2){
      echo "<script>
            alert('konfirmasi password tidak sesuai !')
           </script>";

      return false;
    }

    $foto = uploud();
      if (!$foto){
        return false;
      }

    // engkripsi password
    $pass = password_hash($pass, PASSWORD_DEFAULT);
  
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama_user','$hak_akses','$username', '$pass','$foto')");

    return mysqli_affected_rows($conn);

  }


  function uploud(){
    
    $namaFile = $_FILES["foto"]['name'];
    $ukuranFile = $_FILES["foto"]['size'];
    $error = $_FILES["foto"]['error'];
    $tmpName = $_FILES["foto"]['tmp_name'];

    if ($error === 4){ 
      echo "<script>
              alert ('Pilih foto terlebih dahulu!');
            </script>";
      return false;
    }

    $ekstensiFotoValid = ['jpg','jpeg','png','bmp'];
    $ekstensiFoto = explode ('.',$namaFile); 
    $ekstensiFoto = strtolower(end($ekstensiFoto));
   
    if(!in_array($ekstensiFoto,$ekstensiFotoValid)){ 
      
      echo "<script>
              alert ('Yang anda uploud bukan foto!');
            </script>";
      return false;
    }

    if($ukuranFile > 1000000){
      echo "<script>
              alert ('Ukuran foto Terlalu Besar!');
            </script>";
      return false;
    }

     $namaFileBaru = uniqid(); 
     $namaFileBaru .= '.'; 
     $namaFileBaru .= $ekstensiFoto;

    move_uploaded_file($tmpName, '../../img/user/'.$namaFileBaru);

    return $namaFileBaru;
  }


  function update($data){
    global $conn;
    
    $id = $data["id"];
    $nama_user = $data["nama_user"];
    $hak_akses = $data["hak_akses"];
    $username = strtolower(stripslashes($data["username"]));
    $pass = mysqli_real_escape_string($conn,$data["pass"]);
    $pass2 = mysqli_real_escape_string($conn,$data["pass2"]);
    $fotoLama = htmlspecialchars($data["fotoLama"]);


    if ($_FILES['foto']['error'] === 4){
      $foto = $fotoLama; 
    } else { 
      $foto = uploud();
    }

    if($pass !== $pass2){
      echo "<script>
            alert('konfirmasi password tidak sesuai !')
           </script>";

      return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $query = "UPDATE user SET 
                nama_user = '$nama_user',
                hak_akses = '$hak_akses',
                username = '$username',
                pass = '$pass',
                foto = '$foto'
              WHERE id = $id
              ";
  
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
  }


  function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
  }
?>