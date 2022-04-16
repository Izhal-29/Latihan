<?php 
  include_once ('connect.php');

  $query = "SELECT produk.*, supplier.nama as nama_supplier
                  FROM produk
                  JOIN supplier ON supplier.id = produk.supplier_id
                  ORDER BY nama_produk ASC";
  $result = mysqli_query($conn,$query);
  // var_dump($produk);
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
  <style>
    .tambah{
      margin-bottom: 20px;
      margin-top: 20px;
      margin-left: 30px;
    }

    .tabel{
      padding: 5px 30px 5px 30px;
    }
  </style>
  <title>Produk</title>
</head>
<body>
  <div class="container-fluid">

    <div class="row bg-warning">
      <div class="col text-center">
        <h1>Data Produk</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-primary tambah" href="tambah.php">Add New Buku</a>
      </div>
    </div>

    <div class="row tabel">
      <div class="col">
        <table id="table" class="table table-bordered display">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Satuan</th>
              <th>Suplier</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              while ($p = mysqli_fetch_array ($result)) { 
            ?>  
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $p["kode_produk"] ?></td>
              <td><?php echo $p["nama_produk"] ?></td>
              <td><?php echo $p["harga"] ?></td>
              <td><?php echo $p["stok"] ?></td>
              <td><?php echo $p["satuan"] ?></td>
              <td><?php echo $p["nama_supplier"] ?></td>
              <td class="text-center"> 
                <a href="edit.php?id=<?php echo $p['id']; ?>" class="btn btn-warning"> Edit </a> 
                <a href="#" class="btn btn-danger" onclick="confirmation('<?php echo $p['id']; ?>')"> Hapus </a>
              </td>
            </tr>
            <?php 
              $no++;
              }
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

    function confirmation(id){
      if (confirm("Apakah anda yakin ingin mneghapus data ini ?")){
        window.location.href='hapus.php?id='+id;
      }
    }
  </script>
</body>
</html>