// cara biasa
function toCelcius(fahrenheit){
  return (5/9)*(fahrenheit-32);
}

function penjumlahan(angka1, angka2){
  return angka1 + angka2;
}

// mengembalikan nilai
function printText(nama){
  var text3 = "Saya Adalah " + nama;
  document.getElementById("text3").innerHTML=text3;
}

// mengunakan ekspresi
var perkalian = function(angka3,angka4){
  return angka3 * angka4;
}


//menggunakan tanda panah
var pembagian = (angka5,angka6) => {
  return angka5 / angka6;
}

//menggunakan constructor
function person(first, last, age, eye){
  this.firstName = first;
  this.lastName = last;
  this.age = age;
  this.eyecolor = eye;
  this.nationality = "Indonesia" ;
}