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

    // uploud gambar
    $foto = uploud();
      if (!$foto){// kalau yang dikirimkan adalah gagal
        return false; // kita berhentikan INSERT-nya tdk akan dijalankan
      }

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

  function uploud(){
    // ["gambar"] diambil dari name input
    $namaFile = $_FILES["gambar"]['name'];
    $ukuranFile = $_FILES["gambar"]['size'];
    $error = $_FILES["gambar"]['error'];
    $tmpName = $_FILES["gambar"]['tmp_name'];

    //cek apakah tidak ada gambar yang diuploud
    if ($error === 4){ // error === 4 maksudnya tidak ada gambar yang diuploud
      echo "<script>
              alert ('Pilih gambar terlebih dahulu!');
            </script>";
      return false;
    }

    // cek apakah yang di uploud adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png','bmp'];
    $ekstensiGambar = explode ('.',$namaFile); 
    // explode fungsi PHP untuk memecah sebuah string menjadi array menggunakan delimeter
    // artiinya kalau saya punya nama file Rizhal.jpg maka akan dirubah menjadi sebuah array yang isinya ['Rizhal', 'jpg']
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // mengambil extensi file
    // end ==> mengambil nama file yang paling akhir
    // strtolower ==> memaksa semua extensinya menjadi huruf kecil

    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){ 
      // kalau tidak sama dengan  isi array ekstensiGambarValid
      // needle (jarum), haystack (jerami)
      // !in_array ==> mengecek ada ngga sebuah string dalam sebuah array
      echo "<script>
              alert ('Yang anda uploud bukan gambar!');
            </script>";
      return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000){// 1000000 = 1 mb
      echo "<script>
              alert ('Ukuran Gambar Terlalu Besar!');
            </script>";
      return false;
    }

    // lolos pengecekan, gambar siap di uploud

    //generate nama gambar baru
     $namaFileBaru = uniqid(); // membangkitkan string random
     $namaFileBaru .= '.'; // kita rangkai dengan titik
     $namaFileBaru .= $ekstensiGambar; // kita rangkai dengan ekstensi file

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru); // untuk mindahin file dari lokasi sementara ke lokasi yang kita sediakan

    return $namaFileBaru;// supaya ketika gambarnya berhasil di uploud, isi dari gambar adalah nama filenya sehingga gambarnya bisa dimasukkan ke database
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
    $fotoLama = htmlspecialchars($data["fotoLama"]);

    // Cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4){ // tidak ada gambar maka 
      $foto = $fotoLama; // gambar diisi dengan gambar lama
    } else { // tetapi selain 4
      $foto = uploud(); // maka gamabar diisi dengan fungsi uploud
    }

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
             // pakai LIKE istilahnya wildcard dan ditambahkan % diparameternya, jika lebih dari satu field tambahkan OR 

    return query($query);
    // kembalikan hasilnya berupa array associative
  }
?>