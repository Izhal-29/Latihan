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
  <title>Form Buku</title>
</head>
<body>

<?php 
  include_once("connect.php");

  $array_penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
  $array_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
  $array_katalog = mysqli_query($conn, "SELECT * FROM katalog");

  $isbn = $_GET['isbn']; 

  $buku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn='$isbn' ");

  while($buku_data=mysqli_fetch_array($buku)){
    $judul = $buku_data['judul'];
    $isbn = $buku_data['isbn'];
    $tahun = $buku_data['tahun'];
    $id_penerbit = $buku_data['id_penerbit'];
    $id_pengarang = $buku_data['id_pengarang'];
    $id_katalog = $buku_data['id_katalog'];
    $qty_stok = $buku_data['qty_stok'];
    $harga_pinjam = $buku_data['harga_pinjam'];
  }

  if (isset($_POST['submit'])){
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $qty_stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $result= mysqli_query($conn,"UPDATE buku SET 
                        judul = '$judul',
                        tahun ='$tahun',
                        id_penerbit = '$id_penerbit',
                        id_pengarang = '$id_pengarang',
                        id_katalog = '$id_katalog',
                        qty_stok = '$qty_stok',
                        harga_pinjam = '$harga_pinjam'
                        WHERE isbn = '$isbn';");

    header("location:index.php");
  }
  
   
  
?>

  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <H4>Edit Buku</H4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form action="edit.php?isbn=<?php echo $isbn;?>" method="post" name="form1">
          <table width="100%" class="table-bordered" cellpadding="10">
            <tr>
              <td>ISBN</td>
              <td><input type="text" readonly="" class="form-control" name="isbn" value="<?php echo $isbn; ?>"></td>
            </tr>
            <tr>
              <td>Judul</td>
              <td><input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>"></td>
            </tr>
            <tr>
              <td>Tahun</td>
              <td><input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>"></td>
            </tr>
            <tr>
              <td>Nama Penerbit</td>
              <td>
                <select class="form-select" name="id_penerbit">
                  <?php 
                    while($penerbit = mysqli_fetch_array($array_penerbit)){                    
                  ?>
                  <option <?php echo ($penerbit['id_penerbit'] == $id_penerbit ? 'selected' : ''); ?> value="<?php echo $penerbit["id_penerbit"]; ?>"> <?php echo $penerbit["nama_penerbit"]; ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>Nama Pengarang</td>
              <td> 
                <select class="form-select" name="id_pengarang">
                  <?php 
                    while($pengarang = mysqli_fetch_array($array_pengarang)){                    
                  ?>
                    <option <?php echo ($pengarang['id_pengarang'] == $id_pengarang ? 'selected' : ''); ?> value="<?php echo $pengarang["id_pengarang"]; ?>" > <?php echo $pengarang["nama_pengarang"]; ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>Nama Katalog</td>
              <td>
                <select class="form-select" name="id_katalog">
                  <?php 
                    while($katalog = mysqli_fetch_array($array_katalog)){                    
                  ?>
                    <option <?php echo ($katalog['id_katalog'] == $id_katalog ? 'selected' : ''); ?> value="<?php echo $katalog["id_katalog"]; ?>" > <?php echo $katalog["nama"]; ?> </option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>Qty Stok</td>
              <td><input type="text" class="form-control" name="qty_stok" value="<?php echo $qty_stok; ?>"></td>
            </tr>
            <tr>
              <td>Harga Pinjam</td>
              <td><input type="text" class="form-control" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="form-control btn btn-primary" name="submit">Edit</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
