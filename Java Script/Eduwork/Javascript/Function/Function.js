// Jenis funtion berdasarkan cara deklarasi :

// 1. function declaration
  function deklarasi(){
    console.log(this);// hasilnya object window
    console.log("declaration");
  };

  deklarasi (); // pemanggilan
  console.log(deklarasi()); // cara lain memanggil function
  console.log(deklarasi); // yang akan keluar isi/script functionnya

  const btn = document.getElementById('btn');
  btn.addEventListener("click", function() {
    console.log(this)
  }); // hasilnya tag button beserta isinya

// 2. function expression (menyimpan function kedalam variabel)
  const ekspresi = function (){ //anonymous function (function yang tidak mempunyai nama)
    console.log("expression")
  };

ekspresi(); //pemanggil

// 3. arrow function (mengganti kata function dengan panah)
  // dimulai dari versi es5
  const panah = () => {
    console.log("arrow");
  };

  const btn1 = document.getElementById('btn');
  btn1.addEventListener("click", () => {
    console.log(this)
  }); // hasilnya object window

  panah(); //pemanggil

// 4. function constructor (membuat function mirip membuat object)
  const konstruktor = new Function ('console.log("construktor")');

  konstruktor(); //pemanggil

// this --> bukan variabel tapi merupakan kata kunci yang merujuk ke objek yang berbeda tergantung pada cara penggunaannya

// parameter --> Variabel yang menyimpan nilai yang diteruskan ke dalam function untuk diproses di dalam function

// 1. parameter di fungsi deklarasi
  function tambah(a,b){
    alert(`${a} + ${b} = ${a + b}`);
  };

  document.getElementById("fdeklarasi").onclick = () => {
    tambah(10,20);
  };


// 2. Paremeter di Function Expression
  const kali = function (a,b){
    alert(`${a} * ${b} = ${a * b}`);
  };

  document.getElementById("fexpressi").onclick = () => {
    kali(10,20);
  };

// 3. arrow function
  // - jika hanya 1 parameter, tidak wajib tidak wajib dibungkus kurung
    const arrow1 = a => {
      alert(`nilai adalah ${a}`);
    };

  // - jika parameter lebih dari 1, wajib dibungkus kurung
    const arrow2 = (a,b) => {
      alert(`nilai adalah ${a} + ${b}`);
    };

  // - jika tidak ada parameter, tetap wajib menggunakan kurung
    const arrow3 = () => 'hello';
    console.log(arrow3);

    // sama dengan

    function arrow4() {
      return 'hello';
    };
    console.log(arrow4);

  // jika pakai kurung kurawal lalu tidak direturn maka hasilnya undifined
    const arrow5 = () => {
      'hello';
    };
    console.log(arrow5);

  // yang benar
    const arrow6 = () => {
      return 'hello';
    };
    console.log(arrow6);

  //  mengeluarkan objet tanpa return
    const arrow7 = () => ({
      nama: 'Izhal'
    });
    console.log(arrow7);

