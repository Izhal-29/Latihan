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
    $nama_supplier = ($data["nama_supplier"]);
    $telepon = ($data["telepon"]);
    $alamat = ($data["alamat"]);

    $query = "INSERT INTO supplier VALUES('$id','$nama_supplier','$telepon','$alamat')";

    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
  }



  function update($data){
    global $conn;
    // mengambil data dari tiap elemen dalam form dan dibuatin variabel :
    $id = ($data["id"]);
    $nama_supplier = ($data["nama_supplier"]);
    $telepon = ($data["telepon"]);
    $alamat = ($data["alamat"]);

    $query = "UPDATE supplier SET 
                nama_supplier = '$nama_supplier',
                telepon = '$telepon',
                alamat = '$alamat'
              WHERE id = $id
              ";
  
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
  }


  
  
  function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM supplier WHERE id = $id");

    return mysqli_affected_rows($conn);
  }
?>