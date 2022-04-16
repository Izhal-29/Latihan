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
    .formt{
      margin: 20px 25% 10px 25%; 
    }
  </style>
  <title>Form Edit Data Produk</title>
</head>
<body>
  <?php 
    include_once("connect.php");

    $a_supplier = mysqli_query($conn, "SELECT * FROM supplier");

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id' ");

    while($p =  mysqli_fetch_array($query)){
      $kode_produk = $p['kode_produk'];
      $nama_produk = $p['nama_produk'];
      $harga = $p['harga'];
      $stok = $p['stok'];
      $satuan = $p['satuan'];
      $supplier_id = $p['supplier_id'];
    }

    if(isset($_POST['submit'])){
      $kode_produk = $_POST['kode_produk'];
      $nama_produk =$_POST['nama_produk'];
      $harga = $_POST['harga'];
      $stok = $_POST['stok'];
      $satuan = $_POST['satuan'];
      $supplier_id = $_POST['supplier_id'];

      $result= mysqli_query($conn, "UPDATE produk SET
                          kode_produk = '$kode_produk',
                          nama_produk = '$nama_produk',
                          harga = '$harga',
                          stok = '$stok',
                          satuan = '$satuan',
                          supplier_id = '$supplier_id'
                          WHERE id = '$id';
                          ");
      if($_POST > 0){
        echo "<script>
                alert('Data Berhasil diedit !');
                document.location.href='index.php';
              </script>
              ";
      } else {
  
        echo "<script>
                alert('Data Gagal diedit !');
                document.location.href='index.php';
              </script>
              ";
      }
    }
  ?>
  <div class="container-fluid">

    <div class="row bg-warning">
      <div class="col text-center">
        <h1>Form Edit Data Produk</h1>
      </div>
    </div>

    <div class="row formt">
      <div class="col">
        <form action="" method="POST">
          <table width=100% cellpadding="10">
            <tr>
              <th><label for="kode_produk">Kode Produk</label></th>
              <td><input class="form-control" name="kode_produk" type="text" id="kode_produk" value="<?= $kode_produk; ?>"></td>
            </tr>
            <tr>
              <th><label for="nama_produk">Nama Produk</label></th>
              <td><input class="form-control" name="nama_produk" type="text" id="nama_produk" value="<?= $nama_produk; ?>"></td>
            </tr>
            <tr>
              <th><label for="harga">Harga</label></th>
              <td><input class="form-control" name="harga" type="text" id="harga" value="<?= $harga; ?>"></td>
            </tr>
            <tr>
              <th><label for="stock">Stok</label></th>
              <td><input class="form-control" name="stok" type="text" id="stok" value="<?= $stok; ?>"></td>
            </tr>
            <tr>
              <th><label for="satuan">Satuan</label></th>
              <td>
                <select class="form-select" name="satuan" id="satuan">
                  <option <?= ($satuan == $id ? 'selected' : ''); ?> value="<?= $satuan; ?>"><?= $satuan; ?></option>
                  <option value="Pcs">Pcs</option>
                  <option value="Dos">Dos</option>
                  <option value="Lusin">Lusin</option>
                  <option value="Gross">Gross</option>
                  <option value="Rim">Rim</option>
                  <option value="Ton">Ton</option>
                  <option value="Sak">Sak</option>
                  <option value="Bks">Bks</option>
                </select>
              </td>
            </tr>
            <tr>
              <th><label for="supplier_id">Nama Supplier</label></th>
              <td>
                <select class="form-select" name="supplier_id">
                  <?php 
                    while($supplier = mysqli_fetch_array($a_supplier)) { ?>
                    
                      <option <?= ($supplier['id'] == $supplier_id ? 'selected' : ''); ?> value="<?= $supplier["id"]; ?>"> <?= $supplier["nama"]; ?> </option>
                      
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="form-control btn btn-primary" name="submit"> Edit </button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>