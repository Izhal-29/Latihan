<?php 
  $no = 1 ;
  $nama = 1;
  $kelas = 10;

  echo 
  "<table border=1 cellpadding=10'>
    <tr bgcolor=blue>
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
    </tr>";

    while ($no<=10){
      echo 
        "<tr>
        <td> $no </td>
        <td> Nama Ke $nama</td>
        <td> Kelas $kelas</td>";
      $no++;
      $nama++;
      $kelas--;
    }

  echo "</tr>";
  echo "</table>";

?>