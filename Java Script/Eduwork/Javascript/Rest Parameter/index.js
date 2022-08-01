// Spread Operator : Operator yang digunakan untuk memecah / ekstraksi item dari sebuah array, object atau string
  // Notasi spread operator menggunakan tanda titik tiga di awal sebuah variabel (...variabel)
  // hanya bis adigunakan pada nilai iterable
      const str = "Belajar MERN"; // iterable
      const arr = [1,2,3,4]; // iterable
      const obj = { // tidak iterable
        nama : "edi",
        umur : 23
      };
      const obj1 = [{ // iterable
        nama : "edi",
        umur : 23
      }];

      console.log(...str); // hasilnya dipecah 
      console.log(...arr);
      console.log({...obj});
      console.log(...obj1);

    // contoh penggunaan spread operator
      // 1. Sebagai Parameter
        function hitung(a, b, c, d){
          return a + b + c + d;
        }

        // const hasil = hitung(arr[0], arr[1], arr[2], arr[3]); // cara biasa 

        const hasil = hitung (...arr); // car spread
        console.log(hasil);
      // 2. array / object concatination
        const arr2 = [5, 6, 7];
        const arrCon = [...arr, ...arr2];// mengabungkan arr dengan arr2
        console.log(arrCon);

        const profile = {
          hobi: ["ngoding", "makan", "tidur"]
        }

        const objCon = {...obj, ...profile}; // mengabungkan object dengan array
        console.log(objCon);

// Destructutring Assignments : fitur untuk memecah item dari array / object ke dalam variabel yang berbeda

  const colors = ["merah", "kuning", "hijau"]

  // cara biasa
    let merah = colors[0];
    let kuning = colors[1];
    let hijau = colors[2];

  // destructing
    let [merah1, kuning1, hijau1] = colors;
    console.log(merah, kuning, hijau);
    let [merah2] = colors; // kalau mau ambil merah
    console.log(merah);
    let [, kuning2] = colors; // kalau mau ambil kuning
    console.log(kuning);
    let [,, hijau2] = colors;// kalau mau ambil hijau
    console.log(hijau);


    const profile2 = {
      nama : "edi hartono",
      umur : 23
    };

  // cara biasa
    const nama = profile2.nama;
    const umur = profile2.umur;

  // destructing
    const {nama1, umur1} = profile2;
    console.log(nama,umur);
    const {umur2} = profile2; // kalau mau ambil umurnya saja
    console.log(umur);


// Rest Operator : kombinasi antara spread operator dan destructuring assignment
    const users = [
      {id : 1, nama: "edi"},
      {id : 2, nama: "dodi"},
      {id : 3, nama: "bayu"},
      {id : 4, nama: "rahma"},
      {id : 5, nama: "aji"},
    ];

    const [edi,dodi, ...lainnya] = users;

    console.log(edi);
    console.log(dodi);
    console.log(lainnya);