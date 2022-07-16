// callback -> fungsi yang dieksekusi melalui parameter yang berkerja secara asynchronous

function main (p1, p2, cb){
  console.log(p1,p2);
  cb();//memanggil isi fungsi myCallback()
}

function myCallback(){
  console.log("Hello Callback");
}

main(1,2, myCallback)

console.log(myCallback); // outputnya sourcecodenya

console.log(myCallback()); // outputnya isi fungsinya dan undifined karen diconsole.log lagi


// 1. function injection -> memanipulasi fungsi kita sendiri
function calculate(p1, p2, callback){
  let result = p1 + p2;
  if (typeof callback === "function"){// jika nanti dicek callbacknya berupa function kit akembalikan callbacknya (p1 + p2)
    result = callback(p1,p2);
  }
  return result;// kalau ngga kita kembalikan result
}

 let a = calculate(7000,2000, function (x,y){ // mengembalikan callback(p1,p2) sekaligus parameternya lalu ditangkap p1 -> x, p2 -> y lalu dieksekusi
  return x * y;
 });
console.log(a);


let b =  calculate(3000,2000);// biasa
console.log(b);

// 2. event listener
document.getElementById("btn").addEventListener("click", function(){
  alert("hello World");
})


//3. callback pada asyncronous
function getData(url, cb){
  let xhr = new XMLHttpRequest();
  xhr.onload = function(){
    if (xhr.status === 200){
      return cb(JSON.parse(xhr.responseText));
    }
  };
  xhr.open("GET", url);
  xhr.send();
}

const data = getData("https://jsonplaceholder.typicode.com/users/1", function(data){
  document.getElementById("data");
});
