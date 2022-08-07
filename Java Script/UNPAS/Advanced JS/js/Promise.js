// versi JQuery :
  // $.ajax({
  //   url : 'http://www.omdbapi.com/?apikey=1fa92f9f&s=avengers',
  //   success : movies => console.log(movies)
  // });



// versi Ajax Vanila Javascript :
  // let xhr = new XMLHttpRequest();
  //   xhr.onreadystatechange = function(){
  //     if(xhr.status === 200) { 
  //       if(xhr.readyState === 4) {
  //         console.log(JSON.parse(xhr.response));
  //       }
  //     } else {
  //         console.log(xhr.responseText);
  //     }
  //   }
  //   xhr.open('get', 'http://www.omdbapi.com/?apikey=1fa92f9f&s=avengers');
  //   xhr.send();


// fetch(resources, init) -> Sebuah method pada API javascript terbaru untuk mengambil resources dari jaringan, dan mengembalikan promise yang selesai (fullfilled) ketika ada response yang tersedia
  // Resources 
    // URL : alamat dari sumber yang kita akan ambil
    // Request Object : representasi permintaan sumber
  // init (optional)
    // konfigurasi tambahan pada sebuah request berbentuk object
    // method, headers, body, mode, cache, referrer, referrerPolicy, Integrity, keepalive, signal
// response (property)
  // headers, ok, redirected, status, statusText, type, url, body
// response (method)
  // clone(), error(), redirect(), blob(), formData(), json(), text()


  
// menggunakan Fetch Vanila Javasccript terbaru :
  // fetch('http://www.omdbapi.com/?apikey=1fa92f9f&s=avengers')// fetch mengembalikannya sebagai promise
  //   .then(response => response.json())
  //   .then(response => console.log(response));





  // promise (janji) --> sebuah object yang merepresentasikan keberhasilan / kegagalan sebuah event yang asyncronous di masa yang akan datang
    // janji (terpenuhi / ingkar)
    // states/keadaan  (fullfilled / rejected / pending)
      // fullfilled -> terpenuhi janjinya
      // Rejected -> diingkari janjinya
      // pending -> waktu tunggunya sebelum janjinya terpenuhi atau tidak
    // fungsi callbacknya : 
      // resolve -> dibuat ketika janjinya terpenuhi
      // reject -> dibuat ketika janjinya tidak terpenuhi
      // finally -> ini ketika waktu tunggunya selesai baik terpenuhi atau tidak janjinya
    // aksi :
      // then -> kalau terpenuhi
      // catch -> kalau tidak terpenuhi

  // contoh 1 :
    // let ditepati = false;
    // const janji1 = new Promise((resolve, reject) => {
    //   if (ditepati){
    //     resolve('Janji telah ditepati');
    //   } else {
    //     reject('ingkar janji');
    //   }
    // });

    // janji1
    //   .then(response => console.log('OK! : '+ response))
    //   .catch(response => console.log('NOT OK! : '+ response)) 


  
  // contoh 2 :
    // let ditepati2 = false;
    // const janji2 = new Promise((resolve, reject) => {
    //   if (ditepati2){
    //     setTimeout( () => {
    //       resolve('Ditepati setelah beberapa waktu!');
    //     }, 2000);
    //   } else {
    //     setTimeout( () => {
    //       reject('Tidak ditepati setelah beberapa waktu!');
    //     }, 2000);
    //   }
    // });

    // console.log('mulai');

    // // console.log(janji2.then(() => console.log(janji2))) // ini agar terlihat pendingnya

    // janji2
    // .finally(() => console.log('selesai menunggu!'))// ini dijalankan jika then atau catch sudah siap di jalankan
    // .then(response => console.log('OK! : '+ response))
    // .catch(response => console.log('NOT OK! : '+ response)) 

    // console.log('selesai');


  // Promise.all() --> method untuk menjalankan ketika mempunyai banyak promise yang mau dijalankan sekaligus

    //   const film = new Promise(resolve => {
    //     setTimeout( () => {
    //       resolve([{
    //         judul : 'Avengers',
    //         sutradara : 'Rizhal',
    //         pemeran : 'doddy, erik'
    //       }]);
    //     }, 1000);
    //   });

    //   const cuaca = new Promise(resolve => {
    //     setTimeout(() => {
    //       resolve([{
    //         kota : 'Bandung',
    //         temp : 26,
    //         kondisi : 'Cerah Berawan'
    //       }]);
    //     },500);
    //   });

    // // film.then(response => console.log(response));
    // // cuaca.then(response => console.log(response));

    // Promise.all([film,cuaca])
    //   .then(response => console.log(response)); // digabungkan array-nya dalam satu array
    //   // .then(response => { // dipisahkan array-nya
    //   //   const [film, cuaca] = response;
    //   //   console.log(film);
    //   //   console.log(cuaca);
    //   // });



    // latihan :
    const searchButton = document.querySelector('.search-button');
    searchButton.addEventListener('click', function(){
      const inputKeyword = document.querySelector('.input-keyword');
      fetch('http://www.omdbapi.com/?apikey=1fa92f9f&s=' + inputKeyword.value)
        .then(response => response.json())
        .then(response => {
          const movies = response.Search;
          let cards = '';
          movies.forEach(m => cards += showCards(m));
          const movieContainer = document.querySelector('.movie-container');
          movieContainer.innerHTML = cards;

          // ketika tombol detail di click
          const modalDetailButton = document.querySelectorAll('.modal-detail-button');
          modalDetailButton.forEach(btn => {
            btn.addEventListener('click', function (){
              const imdbID = this.dataset.imdbid;
              fetch('http://www.omdbapi.com/?apikey=1fa92f9f&i=' + imdbID)
                .then(response => response.json())
                .then(m => {
                  const movieDetail = showMovieDetail(m);
                  const modalBody = document.querySelector('.modal-body');
                  modalBody.innerHTML = movieDetail;
                });
            });
          });
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