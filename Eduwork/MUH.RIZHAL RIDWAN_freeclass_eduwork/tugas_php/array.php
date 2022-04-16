<?php 
  $data = file_get_contents("data.json");
  $json = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <title>Tugas Array</title>
</head>
  <body>
    <section class="header" id="header">
      <nav class="nav bg-warning">
        <div class="container-fluid">
          <h1 class="judul">Daftar Nilai</h1>
        </div>
      </nav>
    </section>

    <section class="tabel" id="tabel">
      <div class="container">
        <table class="table table-bordered table-striped">
          <tr align="center">
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
          </tr>
          <?php for($no = 0; $no < count($json); $no++) : ?>
          <tr>
            <td align="center"> <?php echo $no+1 ?> </td>
            <td> <?php echo $json[$no]['nama']; ?> </td>
            <td align="center"> <?php echo $json[$no]['tanggal_lahir']; ?> </td>
            <td align="center"> 
              <?php 
                $tl = new DateTime($json[$no]['tanggal_lahir']);
                $today = new DateTime('today');
                $y = $today ->diff($tl)->y;
                echo $y." Tahun";
              ?>
              </td>
            <td align="center"> <?php echo $json[$no]['alamat']; ?> </td>
            <td align="center"> <?php echo $json[$no]['kelas']; ?> </td>
            <td align="center"> <?php echo $json[$no]['nilai']; ?></td>
            <td align="center"> 
              <?php 
                $nilai = $json[$no]['nilai'];
                switch ($nilai){
                  case ($nilai < 70) :
                    echo "D";
                  break;
                  case ($nilai < 80) :
                    echo "C";
                  break;
                  case ($nilai < 90) :
                    echo "B";
                  break;
                  case ($nilai < 100) :
                    echo "A";
                  break;
                  default :
                    echo " Nilai tidak ada";
                  break;
                }
              ?>
            </td>
          </tr>
          <?php endfor; ?>
        </table>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>