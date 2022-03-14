<?php 

  $conn = mysqli_connect("localhost", "root", "","phpdasar");

  function query($query){// menerima parameter dari index.php
    global $conn; //mengambil variabel diluar dari function agar dapat digunakan di dalam function
    $result = mysqli_query($conn, $query); // panggil query-nya
    $rows = []; // wadahnya
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row; // menambahkan elemen baru di akhir tiap array
    }
    return $rows; // mengembalikan wadahnya
  }

  function tambah($data) {
    global $conn;
    // mengambil data dari tiap elemen dalam form dan dibuatin variabel :
    $nrp  = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $foto = htmlspecialchars($data["gambar"]);

    // htmlspecialchars ---> fungsinya agar user tdk asal"an menginput data

    // buatin variabel query-nya
    $query = "INSERT INTO mahasiswa VALUES('','$nrp','$nama','$email','$jurusan','$foto')";
    // Query Insert Data :
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
    // fungsi mysqli_affected_rows merupakan fungsi MYSQL yang akan menghasilkan sebuah angka, ada berapa baris yang berubah dalam MYSQLnya
    // jika datanya bertambah, diubah, dihapus maka menghasilkan 1
    // jika error maka menghasilkan -1
  }

  function hapus($id){ // id dikirimin dari halama hapus masuk kesini
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
  }

  function update($data){
    global $conn;
    // mengambil data dari tiap elemen dalam form dan dibuatin variabel :
    $id = $data["id"];
    $nrp  = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $foto = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$foto'
              WHERE id = $id
              ";
    // Query Insert Data :
    mysqli_query($conn, "$query");
    
    return mysqli_affected_rows($conn);
  }

  function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
              WHERE
              nrp LIKE '%$keyword%' OR
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'
             ";
             // pakai LIKE istilahnya wildcard dan ditambahkan % variabel

    return query($query);
  }
?>