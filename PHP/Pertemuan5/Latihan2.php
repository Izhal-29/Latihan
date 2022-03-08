<?php
// pengulanagan pada array
// for/Foreach

$angka = [3,2,15,20,11,77,89,8, 1, 45];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengulanngan Array</title>
  <style>
    .kotak{
    width: 50px;
      height : 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float : left;
    }

    .clear { clear: both; }
  </style>
</head>
<body>
  <h1>Mengunakan for</h1>
  <?php for( $i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka [$i]; ?></div>
  <?php } ?>
  
  <br><br>
  <div class="clear"></div>

  <h1>Mengunakan foreach</h1>
  <?php foreach($angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <h1>Mengunakan foreach dengan gaya penulisan templating</h1>
  <?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>
</body>
</html>