<?php 

  include_once("connect.php");
  
  $id = $_GET['id']; 

  $hapus= mysqli_query($conn, "DELETE FROM produk WHERE id = '$id' ");

  if ( $hapus > 0 ){ 
    echo "
    <script>
      alert ('Data Berhasil dihapus!');
      document.location.href='Index.php'
    </script> 
    ";
  } else {
  echo "
    <script>
      alert ('Data Gagal dihapus!');
      document.location.href='Index.php'
    </script>
    ";
  }

?>