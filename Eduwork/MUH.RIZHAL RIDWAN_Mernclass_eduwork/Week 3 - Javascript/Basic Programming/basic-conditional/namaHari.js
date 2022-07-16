/* 

buatlah sebuah fungsi yang akan menerima inputan berupa number. inputan number akan bernilai dari angka 1 sampai dengan 7.
fungsi ini akan mengembalikan nama hari sesuai dengan angka yang di input.

Rules :
    number pasti berupa integer
    number bernilai 1 sampai dengan 7
    hari dimulai dengan hari senin.
    gunakan switch-case

contoh :
    input 1, output "hari senin"
    input 6, output "hari sabtu"
*/

function namaHari() {
  let number = 8;
  switch (number){
    case 1 :
      console.log("Hari Senin");
    break;
    case 2 :
      console.log("Hari Selasa");
    break;
    case 3 :
      console.log("Hari Rabu");
    break;
    case 4 :
      console.log("Hari Kamis");
    break;
    case 5 :
      console.log("Hari Jum'at");
    break;
    case 6 :
      console.log("Hari Sabtu");
    break;
    case 7 :
      console.log("Hari Minggu");
    break;
    default :
      console.log("Anda Hanya Bisa menginput angka 1 - 7");
    break;
  }
}

namaHari();


