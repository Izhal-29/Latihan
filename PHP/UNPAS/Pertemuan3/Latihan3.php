<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .warna-baris{
      background-color  : silver;
    }
  </style>
</head>
<body>
  <table borders="1" cellpadding="10" celspacing="0">
    <?php 
      // for($i = 1 ; $i <= 5 ; $i++){
      //   if ($i % 2 == 1){
      //     echo "<tr class=warna-baris>";
      //   } else {
      //     echo "<tr>";
      //   }
      //     for($j = 1; $j <=5 ; $j++){
      //       echo "<td> $i,$j </td>";
      //     }
      //   echo "</tr>";
      // }
    ?>
    <!-- teknik memisahkan HTML dan PHP -->
    <?php for($i = 1 ; $i <= 5 ; $i++): ?>
      <?php if ($i % 2 == 1) : ?>
        <tr class=warna-baris>
      <?php else :?>
        <tr>
      <?php endif; ?>
        <?php for($j = 1; $j <=5 ; $j++): ?>
          <td> <?= "$i, $j"; ?> </td>
          <!-- atau <td> <?php //echo "$i, $j"; ?> </td> -->
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  <!-- ket :
  : pengganti {
  end... pengganti } agar ketahuan ini adalah akhiran dari sebuah struktur kendali--> 
  </table>
</body>
</html>