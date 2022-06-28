<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <title>Perpustakaan</title>
</head>
<body>
  <?php 
    include_once("connect.php");
    $query = "SELECT buku.*, penerbit.nama_penerbit, pengarang.nama_pengarang, katalog.nama as nama_katalog
              FROM buku 
              JOIN penerbit ON  penerbit.id_penerbit = buku.id_penerbit
              JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
              JOIN katalog ON katalog.id_katalog = buku.id_katalog
              ORDER BY buku.judul ASC";
    $result = mysqli_query($conn,$query);
  ?>
  <div class="container">

    <div class="row" style="margin: 50px">
      <div class="col-md-3 text-center">
        <h5> <a href="index.php"> Buku </a> </h5>
      </div>
      <div class="col-md-3 text-center">
        <h5> <a href="katalog.php"> Katalog </a> </h5>
      </div>
      <div class="col-md-3 text-center">
        <h5> <a href="penerbit.php"> Penerbit </a> </h5>
      </div>
      <div class="col-md-3 text-center">
        <h5> <a href="pengarang.php"> Pengarang </a> </h5>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-primary" href="add.php">Add New Buku</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered">
          <thead>
            <tr class="text-center">
              <th>ISBN</th>
              <th>Judul</th>
              <th>Tahun</th>
              <th>Penerbit</th>
              <th>Pengarang</th>
              <th>Katalog</th>
              <th>Qty Stok</th>
              <th>Harga Pinjam</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              while($book = mysqli_fetch_array($result)) { 
            ?>
            <tr>
              <td class="text-center"> <?php echo $book['isbn']; ?> </td>
              <td> <?php echo $book['judul']; ?> </td>
              <td class="text-center"> <?php echo $book['tahun']; ?> </td>
              <td> <?php echo $book['nama_penerbit']; ?> </td>
              <td> <?php echo $book['nama_pengarang'] ?> </td>
              <td> <?php echo $book['nama_katalog'] ?> </td>
              <td class="text-center"> <?php echo $book['qty_stok'] ?> </td>
              <td> <?php echo $book['harga_pinjam'] ?> </td>
              <td class="text-center"> 
                <a href="edit.php?isbn=<?php echo $book['isbn']; ?>" class="btn btn-warning"> Edit </a> | 
                <a href="#" class="btn btn-danger" onclick="confirmation('<?php echo $book['isbn']; ?>')"> Hapus </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table> 
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    function confirmation(isbn){
      if (confirm("Apakah anda yakin ingin mneghapus data ini ?")){
        window.location.href='hapus.php?isbn='+isbn;
      }
    }
  </script>
</body>
</html>