/* 
    buatlah sebuah fungsi yang akan menerima input berupa angka > 0 kemudian akan mencetak angka mulai dari 0 sampai dengan angka inputan tersebut.

    contoh :
        loopNumber(7)

        output:
        0
        1
        2
        3
        4
        5
        6
        7

        loopNumber(3)

        output:
        0
        1
        2
        3
*/

function loopNumber(maxNumber) {
    for (angka=0 ; angka <= maxNumber ; angka++){
        console.log(angka);
    }
  }

  loopNumber(3);
  