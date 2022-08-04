// Konsep Execution Context, Hoisting, Scope
  // 2 fase pada Execution Context (saat program kalian dijalankan)
    // 1. Creation
      // creation phase pada Global Context
      // Saat programnya dijalankan javascriptnya akan mengecek apakah ada variabel atau function di dalam codingannya, kalau ada :
        // nama Var = undifined
        // nama function = fn() --> nama function itu sendiri / diisi dri string functionnya
        // javascript mendefinisakan window = global object 
        // javascript mendefinisakan this = window
      // function membuat local Execution Context yang di dalamnya terdapat creation dan execution phase --> akses ke window, arguments dan hoisting
      // ini disebut dengan Hoisting -> mengerek bendera atau istilahnya dinaikkan keatas

        console.log(sayHelloC());//--> fungsinya yang dimunculkan nilainya undifined
        console.log(sayHelloC);// --> fungsinya di eksekusi nilainya undifined
    
        var namaC = 'rizhal';
        var umurC = 33;

        function sayHelloC(){
          // console.log(`Halo, nama saya ${nama}, saya ${umur} tahun.`); // akan tercetak undifined
          return `Halo, nama saya ${namaC}, saya ${umurC} tahun.`;  // tidak tercetak undifined
        }

    // 2. Execution
      // mengeksekusi codingnya baris perbaris

      var namaE = 'rizhal';
      var umurE = 33;

      console.log(sayHelloE());//--> fungsinya yang dimunculkan
      console.log(sayHelloE);// --> fungsinya di eksekusi

      function sayHelloE(){
        // console.log(`Halo, nama saya ${nama}, saya ${umur} tahun.`); // akan tercetak undifined
        return `Halo, nama saya ${namaE}, saya ${umurE} tahun.`;  // tidak tercetak undifined
        
      }

    // ### contoh kasus :
    // var nama = 'Rizhal Ridwan';
    var username = '@Izhal_Brown';

    function cetakURL(username){
      var instagramURL = 'http://instagram.com/';
      return instagramURL + username;
    }

    console.log(cetakURL(username));


    function a (){
      console.log('ini a');

      function b (){
        console.log ('ini b');

        function c() {
          console.log('ini c');
        }

        c();
      }
      
      b();
    }
    
    a();
    // ada tumpukan eksekusi setelah selesai dieksekusi maka akan hilang satu persatu


    // var namaA = 'Rizhal Ridwan';
    var usernameA = '@Izhal_Brown';

    function cetakURLA(username){
      console.log(arguments[0]); // arguments @doddyferdiansyah akan tersimpan disini (object arguments)
      var instagramURL = 'http://instagram.com/';
      return instagramURL + username;// username ini akan mengecek ada ngga variabel dalam function (variabel local) --> kalau ngga ada lalu ngecek ke parameternya --> kalau ngga ada dia cek lagi keluar (ke variabel global) --> jika ngga ada maka akan tampil error "username is not defined" --> ini yang dinamakan scope, mencari ke defenisi variabel terdekat kalau ngga da naik keatas
    }

    console.log(cetakURLA('@doddyferdiansyah'));// ketika kita menulis arguments disini maka lalu datanya akan dirimkan keparameter maka username yang ada di dalam function itu ngambilnya ke argumentnya jadi yang muncul @doddyferdiansyah bukan @Izhal_Brown, jika tidak ada parameter di function (username) makan yang muncul adalah @Izhal_Brown bukan @doddyferdiansyah karena argument @doddyferdiansyah dikirimkan ke function () tapi tidak ada yang nangkap jdi dia masuknya ke object argument


    function satu(){ 
      var nama = 'Izhal'; 
      console.log(nama); 
    }

    function dua(){
      console.log (nama); 
    }

    console.log(nama);
    var nama = 'erik';
    satu();
    dua('doddy');
    console.log(nama);
    // Hasilnya :
    // Undifined
    // Izhal
    // erik
    // erik




// Closures 
  // MDN -> "Closure merupakan kombinas antara function dan lingkunagan leksikal (lexical Scope) di dalam function tersebut" 
  // W3School -> "sebuah function ketika memiliki akses ke parent scope-nya, meskipun parent scope-nya sudah selesai dieksekusi"
  // Code Fellow -> "Closure adalah sebuah function dikembalikan oleh function yang lain, yang memiliki ke lingkungan saat diciptakan"

  // contoh 1 :
  function init(){
    let nama = 'Izhal'; // local variabel
    let umur = 29;
    function tampilNama(){ // inner function (closure*)
      console.log(nama); // akses ke parent variabel
      console.log(umur); // akses ke parent variabel
    }
    tampilNama();
    console.dir(tampilNama); // ini menampilkan object
    // inner function membutuhkan variabel yang ada di parent scopenya maka ini disebut closures
  }
  init();


  // contoh 2 :
  function init2(){
    // let nama = 'Izhal'; 
    function tampilNama(nama){ 
      console.log(nama); 
    }
    return tampilNama;
  }

  let panggilNama2 = init2();
  panggilNama2('Izhal');
  panggilNama2('Ridwan');


  // contoh 3 :
  function init3(){
    return function tampilNama(nama){ // Anonimos function (fungsi tanpa nama)
      console.log(nama); 
    }
  }

  let panggilNama3 = init3();
  panggilNama3('Rezha');
  panggilNama3('Raya');

  // alasan kita menggunakan closures
    // -> untuk membuat function Factories
    // -> untuk membuat private method

    // contoh 1 :
    function ucapkanSalam(waktu){
      return function(nama){
        console.log (`Halo ${nama}, Selamat ${waktu}, semoga harimu menyenangkan!`);//string literal
      }
    }

    // membuat function dari hasil function yang lain
    let selamatPagi = ucapkanSalam('Pagi');
    let selamatSiang = ucapkanSalam('Siang');
    let selamatMalam = ucapkanSalam('Malam');

    selamatPagi('Izhal');
    selamatSiang('Rezha');
    selamatMalam('Raya');


    // contoh 2 :
      
    let add = function (){
      let counter = 0;
      return function () {
        return ++counter;
      }
    }

    let aku = add();// buat jalanin functionnya ditampung di variabel
    counter = 100; // ini tidak akan menganggu function

    console.log(aku());
    console.log(aku());
    console.log(aku());
    console.log(aku());
    console.log(aku());
    

    // atau dengan cara tanpa menampungnya divariabel 
    let add2 = (function (){ //--> (imidiateli invoc function)
      let counter = 0;
      return function () {
        return ++counter;
      }
    })();

    counter = 100; // ini tidak akan menganggu function

    console.log(add2());
    console.log(add2());
    console.log(add2());
    console.log(add2());
    console.log(add2());

