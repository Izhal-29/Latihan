function GenapGanjil(...numbers){

    let genap = [];
    let ganjil = [];
    let temp;

    if (numbers == "") {
        return "tidak ada angka"
    } else {
        for (let i = 0; i < numbers.length; i++) {
            if (numbers[i] % 2 == 0){
                console.log(numbers[i])
                genap.push(numbers[i])
            }

            if (numbers[i] % 2 == 1){
                console.log(numbers[i])
                ganjil.push(numbers[i])
            }
        }
    }

    if (genap.length > ganjil.length){
        temp ="angka terbanyak genap"
    } else if (ganjil.length > genap.length) {
        temp =  "angka terbanyak adalah ganjil"
    }

    return temp
}

console.log(GenapGanjil(1,2,3,4,5)) // angka terbanyak adalah ganjil
console.log(GenapGanjil(4,2)) // angka terbanyak genap
console.log(GenapGanjil(10,20,30,13)) // terbanyak genap
console.log(GenapGanjil(30,13,13,77,33,55,17,13)) // terbanyak ganjil
console.log(GenapGanjil()) // tidak ada angka