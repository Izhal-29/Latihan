<?php 

  include_once("connect.php");
  
  $isbn = $_GET['isbn']; 

  $hapus= mysqli_query($conn, "DELETE FROM buku WHERE isbn = '$isbn' ");

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