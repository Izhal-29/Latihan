<?php 
  class keliling{

    public function kpersegi ($sp){
      $kp = 4 * $sp;
        echo "Rumus <b> K = 4 &#215; S </b> <br><br>";
        echo "Persegi dengan sisi ".$sp." cm : <br><br>";
        echo "<b> K = 4 &#215; " . $sp . " = " . $kp ." cm </b>";
      return;
    }

    public function kjajargenjang ($a, $b, $c, $d){
      $kjg = $a + $b + $c + $d;
        echo "Rumus <b> K = a + b + c + d </b> <br><br>";
        echo "Jajar genjang dengan <br> sisi a = ".$a.", sisi b = ".$b.", sisi c = ".$c.", dan sisi d = ".$d." cm : <br><br>";
        echo "<b> K = ".$a." + ".$b." + ".$c." + ".$d. " = " . $kjg ." cm </b>";
      return;
    }

    public function ksegitiga ($a, $b, $c){
      $ks = $a + $b + $c ;
        echo "Rumus <b> K = a + b + c </b> <br><br>";
        echo "Segitiga dengan <br> sisi a = ".$a.", sisi b = ".$b.", sisi c = ".$c." cm : <br><br>";
        echo "<b> K = ".$a." + ".$b." + ".$c." = " . $ks ." cm </b>";
      return;
    }

    public function klingkaran ($r){
      $kl = 2 * 3.14 * $r ;
        echo "Rumus <b> K = 2 &#215; &#960; &#215; r </b> <br><br>";
        echo "Lingkaran dengan <br> Jari-jari = ".$r." cm : <br><br>";
        echo "<b> K = 2&#215; 3.14 &#215;".$r." = " . $kl ." cm </b>";
      return;
    }

    public function kbelahketupat ($a, $b, $c, $d){
      $kbk = $a + $b + $c + $d;
        echo "Rumus <b> K = a + b + c + d </b> <br><br>";
        echo "belah ketupat dengan <br> sisi a = ".$a.", sisi b = ".$b.", sisi c = ".$c.", dan sisi d = ".$d." cm : <br><br>";
        echo "<b> K = ".$a." + ".$b." + ".$c." + ".$d. " = " . $kbk ." cm </b>";
      return;
    }

  }


  class luas{

    public function lpersegi ($sp){
      $lp = $sp * $sp;
      echo "Rumus <b> L = S &#215; S </b> <br><br>";
      echo "Persegi dengan sisi ".$sp." cm : <br><br>";
      echo "<b> L = ". $sp . " &#215; " . $sp . " = " . $lp ." cm&sup2 </b> <br><br>";
      return;
    }

    public function ljajargenjang ($ajg, $tjg){
      $ljg = $ajg * $tjg;
      echo "Rumus <b> L = a &#215; t </b> <br><br>";
      echo "Persegi dengan <br> Alas = ".$ajg." dan Tinggi = ".$tjg." cm : <br><br>";
      echo "<b> L = ". $ajg . " &#215; " . $tjg . " = " . $ljg ." cm&sup2 </b> <br><br>";
      return;
    }

    public function lsegitiga ($sa, $st){
      $ls = 0.5 * $sa * $st;
      echo "Rumus <b> L = &#189; &#215; a &#215; t </b> <br><br>";
      echo "Persegi dengan <br> Alas = ".$sa." dan Tinggi = ".$st." cm : <br><br>";
      echo "<b> L = &#189; &#215; ". $sa . " &#215; " . $st . " = " . $ls ." cm&sup2 </b> <br><br>";
      return;
    }

    public function llingkaran ($r){
      $ll = 3.14 * $r**2;
      echo "Rumus <b> L = &#960; &#215; r &#215; r </b> <br><br>";
      echo "lingkaran dengan <br> jari-jari = ".$r." cm : <br><br>";
      echo "<b> L =  3.14 &#215; ". $r . " &#215; " . $r . " = " . $ll ." cm&sup2 </b> <br><br>";
      return;
    }

    public function lbelahketupat ($d1,$d2){
      $lbk = 0.5 * $d1 * $d2;
      echo "Rumus <b> L = &#189; &#215; d<sub>1</sub> &#215; d<sub>2</sub> </b> <br><br>";
      echo "Belah Ketupat dengan <br> d<sub>1</sub> = ".$d1." dan d<sub>2</sub> = ".$d2." cm : <br><br>";
      echo "<b> L = &#189; &#215; ". $d1 . " &#215; " . $d2 . " = " . $lbk ." cm&sup2 </b> <br><br>";
      return;
    }
    
    public function lkubus ($r){
      $lk = 6 * $r**2;
      echo "Rumus <b> L = 6 &#215; rusuk &#215; rusuk </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            6 R<sup>2</sup> </div>";
      echo "Kubus dengan <br> Rusuk = ".$r." cm : <br><br>";
      echo "<b> L =  6 &#215; ". $r . " &#215; " . $r . " = " . $lk ." cm&sup2 </b> <br><br>";
      return;
    }

    public function ltabung ($r, $t){
      $lst = 2 * 3.14 * $r * $t;
      $lpt = 2 * 3.14 * $r * $t + 2 * 3.14 * $r**2;
      echo "Rumus <b> Luas selimut </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            2 &#960; r T</div>";
      echo "Rumus <b> Luas permukaan </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            2 &#960; r T + 2 &#960; r<sup>2</sup> </div>";
      echo "Kubus dengan <br> jari-jari = ".$r.", Tinggi ".$t." cm : <br><br>";
      echo "<b> Ls =  2 &#960; ".$r." ".$t." = " . $lst ." cm&sup2 </b> <br><br>";
      echo "<b> Lp =  2 &#960; ".$r." ".$t." + 2 &#960; ".$r."<sup>2</sup> = " . $lpt ." cm&sup2 </b> <br><br>";
      return;
    }

    public function lkerucut ($r, $s){
      $lsk = 3.14 * $r * $s;
      $lpk = 3.14 * $r * $s + 3.14 * $r**2;
      echo "Rumus <b> Luas selimut </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            &#960; r s</div>";
      echo "Rumus <b> Luas permukaan </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            &#960; r s + &#960; r<sup>2</sup> </div>";
      echo "Kerucut dengan <br> jari-jari = ".$r.", Selimut ".$s." cm : <br><br>";
      echo "<b> Ls = &#960; ".$r." ".$s." = " . $lsk ." cm&sup2 </b> <br><br>";
      echo "<b> Lp = &#960; ".$r." ".$s." + &#960; ".$r."<sup>2</sup> = " . $lpk ." cm&sup2 </b> <br><br>";
      return;
    }
  }

  class volume{

    public function vkubus ($r){
      $vk = $r**3;
      echo "Rumus <b> V = rusuk &#215; rusuk &#215; rusuk </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            R<sup>3</sup> </div>";
      echo "Kubus dengan <br> Rusuk = ".$r." cm : <br><br>";
      echo "<b> V = ". $r . " &#215; ". $r . " &#215; " . $r . " = " . $vk ." cm&sup3 </b> <br><br>";
      return;
    }

    public function vtabung ($r, $t){
      $vt = 3.14 * $r**2 * $t;
      echo "Rumus <b> Luas selimut </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            &#960; r&sup2 T</div>";
      echo "Kubus dengan <br> jari-jari = ".$r.", Tinggi ".$t." cm : <br><br>";
      echo "<b> V = &#960; ".$r."&sup2 ".$t." = " . $vt ." cm&sup3 </b> <br><br>";
      return;
    }

    public function vkerucut ($r, $t){
      $vk = 1/3 * 3.14 * $r**2 * $t;
      echo "Rumus <b> Luas selimut </b> <br>";
      echo "<div style='
            background-color: yellow;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight:bolder;
            '>
            &#8531; &#960; r&sup2 T</div>";    
      echo "Kerucut dengan <br> jari-jari = ".$r.", Tinggi ".$t." cm : <br><br>";
      echo "<b> V = &#8531; &#960; ".$r."&sup2 ".$t." = " . $vk ." cm&sup2 </b> <br><br>";
      return;
    }

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">

    <title>Tugas function</title>
  </head>
  <body>
    <!-- Bangun Datar -->
    <section class="judul1" id="judul1">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Menghitung luas dan Keliling Bangun datar</h1>
            <table class="table table-striped table-bordered">
              <thead>
                <tr class="table-judul align-middle">
                  <th>Nama Bangun</th>
                  <th>Gambar/Bentuk</th>
                  <th>Keliling</th>
                  <th>Luas</th>
                </tr>
              </thead>
              <form action="" method="post"></form>
                <tbody class="align-middle">
                  <tr>
                    <td ><h3>PERSEGI</h3></td>
                    <td><img src="img/persegi.jpg" alt="persegi"></td>
                    <td>
                      <?php 
                        $keliling = new keliling();
                        $sp = 5; // sisi Persegi
                        echo $keliling->kpersegi($sp);
                      ?>
                    </td>
                    <td>
                      <?php 
                        $luas = new luas();
                        $sp = 10; // sisi Persegi
                        echo $luas->lpersegi($sp);
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><h3>JAJAR GENJANG</h3></td>
                    <td><img src="img/jajar genjang.jpg" alt="Jajar Genjang"></td>
                    <td>
                      <?php 
                        $keliling = new keliling();
                        $a = 5; // sisi Persegi
                        $b = 5;
                        $c = 3;
                        $d = 3;
                        echo $keliling->kjajargenjang($a, $b, $c, $d);
                      ?>
                    </td>
                    <td> 
                      <?php 
                        $luas = new luas();
                        $sa = 12;
                        $st = 17; // sisi Persegi
                        echo $luas->ljajargenjang($sa,$st);
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><h3>SEGITIGA</h3></td>
                    <td><img src="img/segitiga.jpg" alt="Segitiga"></td>
                    <td>
                      <?php 
                        $keliling = new keliling();
                        $a = 5; // sisi Persegi
                        $b = 5;
                        $c = 3;
                        echo $keliling->ksegitiga($a, $b, $c);
                      ?>
                    </td>
                    <td>
                      <?php 
                        $luas = new luas();
                        $sa = 10;
                        $st = 15; // sisi Persegi
                        echo $luas->lsegitiga($sa,$st);
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><h3>LINGKARAN</h3></td>
                    <td><img src="img/lingkaran.jpg" alt="Lingkaran"></td>
                    <td>
                      <?php 
                        $keliling = new keliling();
                        $r = 12;
                        echo $keliling->klingkaran($r);
                      ?>
                    </td>
                    <td>
                    <?php 
                        $luas = new luas();
                        $r = 10;// jari-jari
                        echo $luas->llingkaran($r);
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><h3>BELAH KETUPAT</h3></td>
                    <td><img src="img/belah ketupat.jpg" alt="Belah Ketupat"></td>
                    <td>
                      <?php 
                        $keliling = new keliling();
                        $a = 4; 
                        $b = 4;
                        $c = 2;
                        $d = 2;
                        echo $keliling->kbelahketupat($a, $b, $c, $d);
                      ?>
                    </td>
                    <td>
                      <?php 
                        $luas = new luas();
                        $d1 = 8;
                        $d2 = 4; // sisi Persegi
                        echo $luas->lbelahketupat($d1,$d2);
                      ?>
                    </td>
                  </tr>
                </tbody>
              </form>
            </table>
          </div>
        </div>
      </div> 
    </section>
    <!-- Akhir bangun datar -->


    <!-- Bangun Ruang -->
    <section class="judul2" id="judul2">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Menghitung luas dan Keliling Bangun ruang</h1>
            <table class="table table-striped table-bordered">
              <thead>
                <tr class="table-judul2 align-middle">
                  <th>Nama Bangun</th>
                  <th>Gambar/Bentuk</th>
                  <th>luas</th>
                  <th>Volume (isi)</th>
                </tr>
              </thead>
              <tbody class="align-middle"">
                <tr>
                  <td><h3>Kubus</h3></td>
                  <td><img src="img/Kubus.jpg" alt="kubus"></td>
                  <td>
                    <?php 
                      $luas = new luas();
                      $r = 5;// rusuk
                      echo $luas->lkubus($r);
                    ?>
                  </td>
                  <td>
                    <?php 
                      $luas = new volume();
                      $r = 5;
                      echo $luas->vkubus($r);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td><h3>Tabung</h3></td>
                  <td><img src="img/Tabung.jpg" alt="tabung"></td>
                  <td>
                    <?php 
                      $luas = new luas();
                      $r = 5;
                      $t = 30;
                      echo $luas->ltabung($r,$t);
                    ?>
                  </td>
                  <td>
                    <?php 
                      $luas = new volume();
                      $r = 5;
                      $t = 30;
                      echo $luas->vtabung($r,$t);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td><h3>Kerucut</h3></td>
                  <td><img src="img/kerucut.jpg" alt="kerucut"></td>
                  <td>
                    <?php 
                      $luas = new luas();
                      $r = 5;
                      $s = 30;
                      echo $luas->lkerucut($r,$s);
                    ?>
                  </td>
                  <td>
                    <?php 
                      $luas = new volume();
                      $r = 5;
                      $t = 30;
                      echo $luas->vkerucut($r,$t);
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir bangun ruang -->

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