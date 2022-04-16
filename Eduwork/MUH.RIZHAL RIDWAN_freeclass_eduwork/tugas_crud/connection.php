<?php 
  $servername = "localhost";
  $database = "perpustakaan";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);
  // if ($mysqli!=true) {
  //   echo "Database tidak Konek";
  // } else {
  //   echo "Database Konek";
  // }


  $query = mysqli_query($conn, "SELECT buku.isbn, buku.judul, buku.tahun, buku.qty_stok, buku.harga_pinjam, penerbit.nama_penerbit, pengarang.nama_pengarang, katalog.nama 
                FROM buku 
                JOIN penerbit ON  penerbit.id_penerbit = buku.id_penerbit
                JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                JOIN katalog ON katalog.id_katalog = buku.id_katalog");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <title>Connection</title>
</head>
<body>
<h1 class="text-center">Data Buku</h1>
  <div class="container">
    <div class="row">
      <div class="col">
        <table id="table" class="display">
          <thead>
            <tr>
              <th>No</th>
              <th>ISBN</th>
              <th>Judul</th>
              <th>Tahun</th>
              <th>Penerbit</th>
              <th>Pengarang</th>
              <th>Katalog</th>
              <th>Qty Stok</th>
              <th>Harga Pinjam</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php
            $no=1;
            foreach ($query as $buku) :
            ?>
              <td><?php echo $no;  ?> </td>
              <td><?php echo $buku['isbn'];  ?> </td>
              <td><?php echo $buku["judul"];  ?> </td>
              <td><?php echo $buku["tahun"];  ?> </td>
              <td><?php echo $buku["nama_penerbit"];  ?> </td>
              <td><?php echo $buku["nama_pengarang"];  ?> </td>
              <td><?php echo $buku["nama"];  ?> </td>
              <td><?php echo $buku["qty_stok"];  ?> </td>
              <td><?php echo $buku["harga_pinjam"];  ?> </td>
            </tr>
            <?php 
            $no++;
              endforeach; 
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    $(document).ready( function (){
      $('#table').DataTable();
    });
  </script>
</body>
</html>
