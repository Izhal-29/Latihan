//  callback 
  // --> function yang dikirimkan sebagai parameter pada function yang lain
  // --> function yang dieksekusi setelah fungsi lain selesai dijalankan

  // // Synhcronous Callback
  //   function halo(nama){
  //     alert (`Halo, ${nama}`);
  //   }

  //   function tampilkanPesan(callback){
  //     const nama = prompt('Masukkan Nama : ');
  //     callback(nama);
  //   }

  //   // tampilkanPesan(halo())// ini langsung ditampilkan dengan nilai undifined tanpa ingisi prompt dulu
  //   tampilkanPesan(halo)// ini akan tampil setelah ngisi prompt-nya
  

  //   // tanpa function halo

  //   function tampilkanPesan2(callback){
  //     const nama = prompt('Masukkan Nama : ');
  //     callback(nama);
  //   }

  //   tampilkanPesan2(nama => alert(`Halo, ${nama}`))// menggunakan arrow function



  // Asynhcronous Callback
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
  
    // Synchronous :
      console.log('mulai');
      // mhs.forEach(m => console.log(m.nama));
      mhs.forEach(m => {// untuk simulasi
        for(let i = 0; i < 1500000; i++){
          let date = new Date();
        }
        console.log(m.nama)
      });

      console.log('selesai\n\n');// ini akan dikerjakan setelah mhs.forEach-nya selesai dikerjakan jika tidak selesai maka tidak akan dikerjakan makanya ini disebut synchronous





    // Asychronous Callback menggunakan ajax
      function getDataMahasiswa(url, success, error){// 3 parameter alamat URL-nya/API, ketikas sukses ngapain, ketika error ngapain
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){//onreadystatechange --> Mendefinisikan fungsi yang akan dipanggil ketika properti readyState berubah
          if(xhr.readyState === 4) { 
            // 0: permintaan tidak diinisialisasi
            // 1: koneksi server dibuat
            // 2: permintaan diterima
            // 3: memproses permintaan
            // 4: permintaan selesai dan tanggapan siap
            if(xhr.status === 200) {
            // 200: “OK”
            // 403: “Forbidden”
              success(xhr.response);
            } else if (xhr.status === 404) {
            // 404: “Page not found”
              error();
            }
          }
        }
        xhr.open('get', url);//beberapa parameter --> methodnya mau apa, URLnya kemana sesuaikan yang dikirim di parameternya
        xhr.send();
      }



      console.log('mulai Ajax');

      // success () {

      // }

      // error () {

      // }

      // getDataMahasiswa('js/mahasiswa.json', success, error);

      // atau kalau tidak mau buat function success dan eror dulu bisa dibuat seperti dibawah ini :
      getDataMahasiswa('js/mahasiswa.json', results => {//parameternya ada 3 --> URL/API,callback function success, callback function error
        // console.log(JSON.parse(results));
        const mhs = JSON.parse(results)//JSON.parse --> merubah JSON-nya jadi object //callback function success
        mhs.forEach(m => console.log(`Ajax : ${m.nama}`)); //callback function success
      }, () => {   
        // callback function error
      });

      console.log('Selesai Ajax\n\n');



    // Asychronous Callback Menggunakan JQuery
      console.log('Mulai JQuery');
      $.ajax({//--> jalanin ajax
        url : 'js/mahasiswa.json',
        success : (mhs) => {// success ngapain --> tanpa di parse udah berubah jadi object
          // console.log(mhs);
          mhs.forEach(m => console.log(`JQuery : ${m.jurusan}`));
        },
        error: (e) => {// error ngapain
          console.log(e.responseText);
        }
      });
      console.log('Selesai JQuery\n\n');






  // Latihan :
$('.search-button').on('click', function(){
  $.ajax({
    url:'http://www.omdbapi.com/?apikey=1fa92f9f&s=' + $('.input-keyword').val(), //jquery carikan saya class input-keyword lalu ambil apapun valuenya/apapun yang diketikkan kirim ke ajaxnya
    success : results => {
      const movies = results.Search;// --> agar search pembungkusnya hilang
      // console.log(movies);
      let cards = '';
      movies.forEach(m => {
        // cards += `<div class="col-md-4 my-5">
        //             <div class="card">
        //               <img src="${m.Poster}" class="card-img-top">
        //               <div class="card-body">
        //                 <h5 class="card-title">${m.Title}</h5>
        //                 <h6 class="card-subtitle mb-2 text-muted">${m.Year}</h6>
        //                 <a href="${m.Poster}" class="btn btn-primary modal-detail-button" data-bs-toggle="modal" data-bs-target="#movieDetailModal" data-imdbid="${m.imdbID}">Show Details</a>
        //               </div>
        //             </div>
        //           </div>`;
  
        // kalau pakai function :
        cards += showCards(m)
      });
      $('.movie-container').html(cards);//jquery carikan saya class movie-container isi htmlnya ganti dengan cards
  
      // data-imdbid="${m.imdbID}" --> ini bisa kita buat sendiri agar ketika tombol diklik nangkap id-nya
  
      
  
      // ketika tombol detail di-klik
      $('.modal-detail-button').on('click', function (){// jquery cariin saya element .modal-detail-button lalu ketika tombolnya on clik kita jalankan function berikut :
        // jangan pakai arrow function karena kita butuh this
        // console.log($(this).data('imdbid'));// testing
        $.ajax({
          url : 'http://www.omdbapi.com/?apikey=1fa92f9f&i=' + $(this).data('imdbid'), // jquery ambil tombol ini lalu ambil attribut data imdbid-nya
          success : m => {
            // const movieDetail = ` <div class="coontainer-fluid">
            //                         <div class="row">
            //                           <div class="col-md-3">
            //                             <img src="${m.Poster}" alt="" class="img-fluid">
            //                           </div>
            //                           <div class="col-md">
            //                             <ul class="list-group">
            //                               <li class="list-group-item"><h4>${m.Title} - (${m.Year})</h4></li>
            //                               <li class="list-group-item"><strong>Director : </strong>${m.Director}</li>
            //                               <li class="list-group-item"><strong>Actors : </strong>${m.Actors}</li>
            //                               <li class="list-group-item"><strong>Writer : </strong>${m.Writer}</li>
            //                               <li class="list-group-item"><strong>Plot : </strong><br>${m.Plot}</li>
            //                             </ul>
            //                           </div>
            //                         </div>
            //                       </div>`;
            
            // kalau pakai function :
            const movieDetail = showMovieDetail(m);
  
            $('.modal-body').html(movieDetail)//jquery carikan saya class modal-body isi htmlnya ganti dengan movieDetail
          },
          error : (e) => {
            console.log(e.responseText)
          }
        });
      });
  
    },
    error : (e) => {
      console.log(e.responseText)
    }
  });
});


function showCards(m){
  return `<div class="col-md-4 my-5">
            <div class="card">
              <img src="${m.Poster}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">${m.Title}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${m.Year}</h6>
                <a href="${m.Poster}" class="btn btn-primary modal-detail-button" data-bs-toggle="modal" data-bs-target="#movieDetailModal" data-imdbid="${m.imdbID}">Show Details</a>
              </div>
            </div>
          </div>`;
}

function showMovieDetail(m){
  return `<div class="coontainer-fluid">
            <div class="row">
              <div class="col-md-3">
                <img src="${m.Poster}" alt="" class="img-fluid">
              </div>
              <div class="col-md">
                <ul class="list-group">
                  <li class="list-group-item"><h4>${m.Title} - (${m.Year})</h4></li>
                  <li class="list-group-item"><strong>Director : </strong>${m.Director}</li>
                  <li class="list-group-item"><strong>Actors : </strong>${m.Actors}</li>
                  <li class="list-group-item"><strong>Writer : </strong>${m.Writer}</li>
                  <li class="list-group-item"><strong>Plot : </strong><br>${m.Plot}</li>
                </ul>
              </div>
            </div>
          </div>`;
}