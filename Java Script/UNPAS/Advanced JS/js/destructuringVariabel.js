// Destructuring Variabel / Assignment
// MDN Web Docs -> expression pada javascript yang membuat kita dapat 'membongkar' nilay dari array atau properti dari object ke dalam variabel yang terpisah.

  // Destructuring pada array
    const coba = ["satu", "dua", "tiga"];

    const [a, b, c] = coba;
    console.log(a); //"satu"
    console.log(b); //"dua"
    console.log(c); //"tiga"

    // skip item
    const perkenalan = ['halo', 'nama', 'saya', 'rizhal'];

    const [salam1, satu, dua, nama1] = perkenalan;
    const [salam2, , , nama2] = perkenalan;
    console.log(nama2)


  // swap items (menukar isi dari variabel)
    let as = 1;
    let bs = 2;

    console.log(as);
    console.log(bs);
    [as,bs] = [bs,as];
    console.log(as);
    console.log(bs);


  // return value pada function
    function coba2(){
      return [1,2];
    }

    const [af, bf] = coba2();
    console.log(af)
    console.log(bf)


  // Rest Parameter
    const [ar, ...values] = [1,2,3,4,5];
    console.log(ar);
    console.log(values);



  // Destructuring Pada Object
    const mhs = {
      namaO : 'Rizhal Ridwan',
      umurO : 29,
      emailO : 'rizhal@gmail.com'
    };

    const {namaO, umurO, emailO} = mhs;
    console.log(namaO); //Rizhal Ridwan
    console.log(umurO); //29
    console.log(emailO); //rizhal@gmail.com


    // assignment tanpa deklarasi object
      ({namaO1,umurO1,emailO1} = {
        namaO1 : 'Rizhal Ridwan',
        umurO1 : 29,
        emailO1 : 'rizhal@gmail.com'
      });

      console.log(namaO1); 


    // assignment ke variabel baru
      ({namaO2 : n , umurO2 : u, emailO2 : e} = { // menganti nama variabel
        namaO2 : 'Rizhal Ridwan',
        umurO2 : 29,
        emailO2 : 'rizhal@gmail.com'
      });

      console.log(e); 
    

    // memberikan default value
      const mhs2 = {
        namaO3 : 'Rizhal Ridwan',
        umurO3 : 29,
        // emailO3 : 'rizhal@gmail.com'
      };

      const {namaO3 : n3, umurO3 : u3, emailO3 : e3 = 'default@gmail.com' } = mhs2;
      console.log(n3); //default@gmail.com


    // mengambil field pada object, setelah dikirim sebagai parameter untuk function
      const mhs3 = {
        id : 123,
        namaO4 : 'Rizhal Ridwan',
        umurO4 : 29,
        emailO4 : 'rizhal@gmail.com'
      };

      function getIdMhs3({id,namaO4, umurO4, emailO4}){
        return `id : ${id}
        nama : ${namaO4}
        umur : ${umurO4}
        email : ${emailO4}`;
      }

      console.log(getIdMhs3(mhs3));



  // Destructuring Pada Function
    function kalkulasi(a,b){
      return [a + b, a - b, a * b, a / b]; // kelemahannnya kalau menggunakan array itu harus berurut
    }

    // const tambah = kalkulasi(2,3)[0];
    // const kali = kalkulasi(2,3)[1];

    const [tambah, kurang, kali, bagi = 'Tidak ada'] = kalkulasi(2,3); //bagi = 'Tidak ada' --> itu misalnya fungsi baginya tidak ada diberikan nilai default

    console.log(tambah)
    console.log(kurang)
    console.log(kali)
    console.log(bagi)
    


    function kalkulasiO(a,b){
      return {// kalau menggunakan object tidak masalah jika tidak berurut
        tambahO : a + b,
        kurangO : a - b,
        kaliO : a * b,
        bagiO : a / b
      }
    }

    const [kaliO, kurangO, tambahO, bagiO = 'Tidak ada'] = kalkulasi(2,3);//--> ini tidak akan jadi masalah jika tidak berurut

    console.log(tambah)
    console.log(kurang)
    console.log(kali)
    console.log(bagi)

    // Destructuring Pada Function Arguments
    const mhs1 = {
      nama1 : 'Rizhal Ridwan',
      umur1 : 29,
      email1 : 'rizhal@gmail.com',
      nilai1 :{
        tugas : 80,
        uts : 85,
        uas : 75,
      }
    }

    // function cetakMhs (nama, umur){
    //   return `Halo, nama saya ${nama}, saya berumur ${umur} tahun`
    // }

    // console.log(cetakMhs(mhs1.nama1, mhs1.umur1)) // dipecah disini

    // atau

    // function cetakMhs (mhs){
    //   return `Halo, nama saya ${mhs.nama1}, saya berumur ${mhs.umur1} tahun.`// dipecah disini
    // }

    // console.log(cetakMhs(mhs1))

    // atau

    function cetakMhs ({nama1, umur1,nilai1:{tugas, uts, uas}}){// dipecah disini (Destructuring bersarang)
      return `Halo, nama saya ${nama1}, saya berumur ${umur1} tahun, dan nilai UAS saya adalah ${uas}.`
    }

    console.log(cetakMhs(mhs1))