
<?php 
  // cara Lama
  // koneksi DBMS
  // $conn = mysqli_connect("localhost","root", "", "phpdasar");
  // cek apakah tombol submit sudah ditekan atau belum
  //if(isset($_POST["submit"])){
    // ambil data dari tiap elemen dalam form
    // $nrp  = $_POST["nrp"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $foto = $_POST["gambar"];

    // query Insert Data
    // $query = "INSERT INTO mahasiswa VALUES('','$nrp','$nama','$email','$jurusan','$foto')";
    // mysqli_query($conn, "$query");
    // cek apakah data berhasil ditambahkan atau tidak
    // if(mysqli_affected_rows($conn)>0){
    //   echo "Berhasil";
    // } else {
    //   echo "Gagal!";
    //   echo "<br>";
    //   echo mysqli_error($conn);
    // }

    // Cara Baru
    require 'function.php'; // mengambil data dari function.php
    if(isset($_POST["submit"])){// jika $_POST yang keynya Submit / tombol submit di pencet
      if(tambah($_POST) > 0){
      // mengambil nilai dari fungsi mysqli_affected_rows jika datanya bertambah, diubah, dihapus maka menghasilkan 1 jika error maka menghasilkan -1
        echo "
              <script>
                alert ('Data Berhasil ditambahakan!');
                document.location.href='Index.php'
              </script>
             ";
      } else {
        echo "
              <script>
               alert ('Data Gagal ditambahakan!');
                document.location.href='Index.php'
              </script>
             ";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Mahasiswa</title>
</head>
<body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nrp"> NRP : </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="email"> Email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan"> Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar"> Foto : </label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit"> Tambah Data </button>
      </li>
    </ul>
  </form>
</body>
</html>