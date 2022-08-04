// contoh 1
function tambahNilai(number){
  if(number == 0){
    return;
  }
  tambahNilai(number-1) //maximum call stack size exceeded
  console.log(number);
}

tambahNilai(10);


// contoh 2
function countDown(fromNumber){
  let nextNumber = fromNumber - 1

  // case yang pisitive ajah yang ditampilkan
  if (nextNumber > 0){
    countDown(nextNumber);
    console.log(nextNumber);
  }
}


countDown(20);