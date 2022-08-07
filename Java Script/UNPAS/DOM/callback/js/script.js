// Callback --> function yang dikirimkan sebagai parameter pada function yang lain
  // function halo(nama){
  //   alert(`halo, ${nama}`);
  // }

  // function tampilkanPesan(callback){
  //   const nama = prompt ('Masukkan Nama : ');
  //   callback(nama);
  // }

  // tampilkanPesan(halo);


  // 1. Synchronous Callback:
  // sebuah function yang paramaternya adalah sebuah function juga
  //   function tampilkanPesan2(callback){
  //     const nama = prompt ('Masukkan Nama 2 : ');
  //     callback(nama);
  //   }

  //   tampilkanPesan2(nama =>{
  //     alert(`Halo, ${nama}`)
  //   });

  //   atau
  //       anonymouse function
  //   tampilkanPesan2(nama => alert(`Halo, ${nama}`));

  // 2. Asynchronous Callback:

  //   data array of Object
    const mhs = [
      {
        "nama" : "Rizhal Ridwan",
        "nrp" : "043040023",
        "email" : "izhal@gmail.com",
        "jurusan" : "Teknik Informatika",
        "idDosenWali" : 1
      },
      {
        "nama" : "Doddy Ferdiansyah",
        "nrp" : "133040123",
        "email" : "doddy@gmail.com",
        "jurusan" : "Teknik Informatika",
        "idDosenWali" : 2
      },
      {
        "nama" : "Erik",
        "nrp" : "104040001",
        "email" : "erik@gmail.com",
        "jurusan" : "Teknik Industri",
        "idDosenWali" : 2
      }
    ];

    Synchronous :
      console.log('mulai');
      mhs.forEach(m => console.log(m.nama));
      console.log('selesai');// ini akan dikerjakan setelah mhs.forEach-nya selesai dikerjakan jika tidak selesai maka tidak akan dikerjakan makanya ini disebut synchronous

    // Asychronous Callback menggunakan ajax
      function getDataMahasiswa(url, success, error){
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
          if(xhr.readyState === 4) {
            if(xhr.status === 200) {
              success(xhr.response);
            } else if (xhr.status === 404) {
              error();
            }
          }
        }
        xhr.open('get', url);
        xhr.send();
      }

      console.log('mulai');
      getDataMahasiswa('js/mahasiswa.json', results => {
        // console.log(JSON.parse(results));
        const mhs = JSON.parse(results)
        mhs.forEach(m => console.log(m.nama));
      }, () => {   

      });

      console.log('selesai');


    // Asychronous Callback Menggunakan JQuery
      console.log('mulai');
      $.ajax({
        url : 'js/mahasiswa.json',
        success : (mhs) => {
          console.log(mhs);
          mhs.forEach(m => console.log(m.nama));
        },
        error: (e) => {
          console.log(e.responseText);
        }
      });
      console.log('selesai');


