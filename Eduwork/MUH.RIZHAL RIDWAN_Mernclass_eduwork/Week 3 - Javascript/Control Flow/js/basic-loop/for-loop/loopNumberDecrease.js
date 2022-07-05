/* 
    buatlah sebuah fungsi yang akan menerima input berupa angka > 0 kemudian akan mencetak angka mulai dari angka inputan, sampai dengan 0

    contoh :
        loopNumberDecrease(7)
        output:
        7
        6
        5
        4
        3
        2
        1
        0

        loopNumberDecrease(3)

        output:
        3
        2
        1
*/

function loopNumberDecrease(maxNumber) {
   for (angka=0 ; angka <= maxNumber ; maxNumber--){
        console.log(maxNumber);
    }
}

loopNumberDecrease(7)
