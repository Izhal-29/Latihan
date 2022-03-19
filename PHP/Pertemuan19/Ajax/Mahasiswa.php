<?php 
  require '../function.php';
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM mahasiswa 
            WHERE
            nrp LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
          ";
  $mahasiswa = query($query);
?>
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
        foreach ($mahasiswa as $row ) :
      ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="Update.php?id=<?= $row["id"]; ?>">Ubah</a> | <!-- ID dirikirmkan lewat URL -->
          <a href="Hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus Data');">Hapus</a> <!-- ID dirikirmkan lewat URL -->
          
        </td>
        <td>
          <img src="img/<?= $row["gambar"]; ?>" alt="">
        </td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["email"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
      </tr>
      <?php 
        $i++;
        endforeach; 
      ?>
  </table>