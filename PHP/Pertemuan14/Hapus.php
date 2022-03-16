<?php 

require "function.php";

  $id = $_GET["id"];// nangkap ID / ambil ID lewat URL

  if ( hapus ($id) > 0 ){ // mengirimkan ID ke function hapus
    // mengambil nilai dari fungsi mysqli_affected_rows jika datanya bertambah, diubah, dihapus maka menghasilkan 1 jika error maka menghasilkan -1
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