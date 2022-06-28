
<?php 
  
    require 'function.php'; // mengambil data dari function.php

    // mengambil data dari URL
    $id = $_GET["id"];

    // query Data Mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    // [0] saya panggil function query begitu dimasukkan kedalam Array Rowsnya yang kita ambil langsung index ke O-nya / elemen pertamanya
    if(isset($_POST["submit"])){// jika $_POST yang key-nya Submit / tombol submit di pencet

      //ketika tombol submit ditekan ambil semua data barunya masukkan kedalam variabel $_POST kirim ke function update

      if(update($_POST) > 0){
      // mengambil nilai dari fungsi mysqli_affected_rows jika datanya bertambah, diubah, dihapus maka menghasilkan 1 jika error maka menghasilkan -1
        echo "
              <script>
                alert ('Data Berhasil diupdate!');
                document.location.href='Index.php'
              </script>
             ";
      } else {
        echo "
              <script>
                alert ('Data Gagal diupdate!');
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
  <title>Update data Mahasiswa</title>
</head>
<body>
  <h1>Update Data Mahasiswa</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs ["id"]; ?>">
    <input type="hidden" name="fotoLama" value="<?= $mhs ["gambar"]; ?>">
    <!-- 
      type="hidden" untuk menyembunyikan input
      input name=fotoLama, jadi kalau user tidak menganti gambar maka fotolama yang akan dipakai tetapi jika user menganti gambar maka akan diganti dengan gambar baru 
    -->
    <ul>
      <li>
        <label for="nrp"> NRP : </label>
        <input type="text" name="nrp" id="nrp" value="<?= $mhs ["nrp"]; ?>" required>
      </li>
      <li>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $mhs ["nama"]; ?>" required>
      </li>
      <li>
        <label for="email"> Email : </label>
        <input type="text" name="email" id="email"  value="<?= $mhs ["email"]; ?>" required>
      </li>
      <li>
        <label for="jurusan"> Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs ["jurusan"]; ?>" required>
      </li>
      <li>
        <label for="gambar"> Foto : </label><br>
        <img src="img/<?= $mhs ["gambar"] ?>" alt="Foto" witdh="100" height="100"><br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit"> Update Data </button>
      </li>
    </ul>
  </form>
</body>
</html>