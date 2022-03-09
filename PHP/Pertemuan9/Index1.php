<?php 
// koneksi Database
  $conn = mysqli_connect("localhost", "root", "","phpdasar");
// Mengambil data dari tabel / Query data tabel
  $result = mysqli_query($conn,"SELECT * FROM mahasiswa");

// ambil data (fetch) Tabel dari object result
// mysqli_fetch_row() ---> untuk mengembalikan array numerik
  // $mhs = mysqli_fetch_row($result);
  // var_dump($mhs[3]);

// mysqli_fetch_assoc() ---> mengembalikan array associative 
  // $mhs = mysqli_fetch_assoc($result);
  // var_dump($mhs["jurusan"]);

// mysqli_fetch_array() ---> untuk mengembalikan array numerik dan  associative tapi double
  // $mhs = mysqli_fetch_array($result);
  // var_dump($mhs);

// mysqli_fetch_object() ---> untuk mengembalikan 
  // $mhs = mysqli_fetch_object($result);
  // var_dump($mhs->email);

// Cek Databasae Berhasil konek/tidak
  // if (!$result){
  //   echo "Koneksi Database Tidak Berhasil";
  // }else{
  //   echo "Koneksi Database Berhasil";
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpaddding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $i=1;
      while ($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
      </td>
      <td>
        <img src="img/<?= $row["gambar"]; ?>" alt="">
      </td>
      <td><?php echo $row ["nrp"]; ?></td>
      <td><?php echo $row ["nama"]; ?></td>
      <td><?php echo $row ["email"]; ?></td>
      <td><?php echo $row ["jurusan"]; ?></td>
    </tr>
    <?php 
      $i++;
     endwhile; 
    ?>
  </table>
</body>
</html>