let lagi = true;

while (lagi){
  let user = prompt('Input Nilai :');
  
  if (user <= 20){
    alert ('nilai Anda E');
  } else if (user < 40) {
    alert ('Nilai Anda D');
  } else if (user < 60 ) {
    alert ('Nilai Anda C')
  } else if (user < 80) {
    alert ('Nilai Anda B')
  } else if (user >= 80) {
    alert ('Nilai Anda A')
  } else {
    alert ('Anda tidak menginput Angka silahkan input angka 1 - 100')
  }

  lagi = confirm('Apakah Anda ingin menginput lagi ?')
}

alert ("Terima Kasiih Sudah menginput");


