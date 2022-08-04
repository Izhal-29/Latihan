// Function Declaration
function tampilPesanD (nama){
  console.log ('Function Declaration\nhalo ' + nama);
}

tampilPesanD('Rizhal');



// function Expression
let tampilPesanE = function(nama){
  console.log ('Function Expression\nhalo ' + nama);
}

tampilPesanE('Rezha')



// Arrow function
let tampilPesanA = (nama) => {
  console.log ('Arrow Function\nhalo ' + nama);
}

tampilPesanA('Raya')


    // ini untuk 1 parameter
    let tampilNama = nama => {return `Halo, ${nama}`;} // parameter function tidak wajib pakai kurung ()
    console.log('doddy Ferdiansyah')

    let tampilNama0 = nama => {`Halo, ${nama}`;} // isinya bisa tanpa return
    console.log('doddy Ferdiansyah')

    let tampilNama1 = nama => `Halo, ${nama}`; // isinya bisa tanpa kurung kurawal {} dan return
    console.log('doddy Ferdiansyah')

    let tampilNama2 = () => `Halo, ${nama}`; // jika tanpa parameter
    console.log('doddy Ferdiansyah')


    // ini untuk lebih dari 1
    let tampilNama3 = (nama, waktu) =>{ // nama function wajib pakai kurung
      return `Selamat ${waktu}, ${nama}`;
    }
    console.log(tampilNama3('erik', 'malam'))



  // contoh :
    let mahasiswa = ['Rizhal Ridwan', 'rezha', 'Raya','Ridwan'];

    // let jumlahHuruf = mahasiswa.map(function (nama){
    //   return nama.length;
    // });

    // console.log(jumlahHuruf);

    // jika di ubah ke arrow function :
      let jumlahHuruf = mahasiswa.map(nama => nama.length);

      console.log(jumlahHuruf);


    // memetakan jadi object :
      let jumlahHuruf2 = mahasiswa.map(nama => 
        // ({nama : nama,jmlHuruf : nama.length}));
        ({nama,jmlHuruf : nama.length}));// ini kalau key dan valuenya sama nilainya bisa ditulis satu ajah

      // console.log(jumlahHuruf2);
      console.table(jumlahHuruf2);




  // kosep this pada arrow function
    // Arrow function tidak memiliki konsep this
  // Constructor Function
    const Mahasiswa = function () {
      this.nama = 'Rizhal';
      this.umur = 29;
      this.sayHello = function () {
        console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
      }
    }

    const rizhal = new Mahasiswa(); // ketikkan di console rizhal.sayHello()


  // arrow function
    const Mahasiswa2 = function () {
      this.nama = 'Rizhal';
      this.umur = 29;
      this.sayHello = () => {
        console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
      }
    }

    const rizhal2 = new Mahasiswa2(); // ketikkan di console rizhal2.sayHello()


  // Object Literal
    const mhs = {
      nama : 'Rizhal',
      umur : 29,
      sayHello : () => {
        console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
      }
    }// ketikkan di console mhs.sayHello()
    // Arrow function tidak memiliki konsep this



  const Mahasiswa3 = function () {// function expression --> tidak terkena hoisting
    this.nama = 'Rizhal';
    this.umur = 29;
    this.sayHello = function () {// function expression --> tidak terkena hoisting
      console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
    }
    // setiap setengah detik umurnya bertambah 1
    // setInterval(function (){// function declaration
    //   console.log(this.umur++);// thisnya langsung ke global jadi hasilnya NAN (window) alias tidak ada
    //   // ketika kita memakai function declaration dalam function expression maka terkena hoisting jadi pada saat thisnya dipanggil, dia ngga ngecek di lexical scopenya tapi dia langsung ke global maka hasilnya NAN
    // },5000);

    // setInterval( () => {//arrow function
    //   console.log(this.umur++); // karena arrow function tidak punya konsep this maka thisnya akan mencari keluar ke lexical scope-nya
    // },5000);
  }

  const rizhal3 = new Mahasiswa3(); // ketikkan di console rizhal.sayHello()





  // implementasi menggunakan CSS dan HTML:
  const box = document.querySelector('.box');

  box.addEventListener('click', function () {
    let satu = 'size';
    let dua = 'caption';

    if (this.classList.contains(satu)){// jika this.classList itu contain didalamnya terdapat satu maka balikin satu jadi dua dua jadi satu
      // satu = temp;
      // satu = dua;
      // dua = temp;
      // atau
      [satu, dua] = [dua, satu]; //notasi terbari dalam javascript
    }
    
    this.classList.toggle(satu);
    setTimeout(() => {//nunggu beberapa detik baru kita jalankan sesuatu
      this.classList.toggle(dua);
    }, 600);
  });

