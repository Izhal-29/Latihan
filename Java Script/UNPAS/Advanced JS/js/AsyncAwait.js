// Asyncronous Function
  // Sebuah function yang bekerja secara asyncronous (melalui event loop), yang menghasilkan (imlisit) promise sebagai return value-nya, tapi cara penulisan code-nya menggunakan penulisan yang syncronous (standard)
    // sebuah async function dapat memiliki keyword await di dalamnya untuk memberhentikan sementara eksekusi fungsinya sambil menunggu promise-nya selesai

    // const coba = new Promise(resolve => {
    //   setTimeout(() => {
    //     resolve('selesai')
    //   },2000)
    // });

  // console.log(coba);// kalau langsung digunakan akan pending karena dijalankan secara syncronous
    // coba.then(() => console.log(coba)); // kalau ini yang akan terjadi ialah akan menunggu 2000 ms baru muncul resolve-nya

  // untuk menerapkan async await kita butuh function
    // function cobaPromise(){
    //   return new Promise(resolve => {
    //     setTimeout(() => {
    //       resolve('Promise 1 selesai')
    //     },2000)
    //   });  
    // }

    // async function cobaAsync(){
    //   const coba2 = await cobaPromise();
    //   console.log(coba2);
    // }

    // cobaAsync();


    // function cobaPromise2(){
    //   return new Promise((resolve,reject) => {
    //     const waktu = 5000;
    //     if (waktu < 5000){
    //       setTimeout(() => {
    //         resolve('Promise 2 selesai');
    //       },waktu);
    //     }else{
    //       reject('Promise 2 kelamaan!');
    //     }
    //   });  
    // }

    // const coba3 = cobaPromise2();
    //  coba3
    //   .then(() => console.log(coba3)) //untuk menangkap resolve
    //   .catch(() => console.log(coba3)) // untuk menangkap reject
   
    // async function cobaAsync2(){
    //   try{// pengganti then untuk menangkap resolve
    //     const coba2 = await cobaPromise2();
    //     console.log(coba2);
    //   }catch(err){ // untuk menangkap reject
    //     console.error(err);
    //   }
    // }

    // cobaAsync2();
  

// refactor (Async Await)
  const searchButton = document.querySelector('.search-button');
  searchButton.addEventListener('click', async function(){// async
    try{
      const inputKeyword = document.querySelector('.input-keyword');
      const movies = await getMovies(inputKeyword.value);// await
      updateUI(movies);
    }catch (err){
      alert(err);
    }
  });

  function getMovies(keyword){
    return fetch('http://www.omdbapi.com/?apikey=1fa92f9f&s=' + keyword)
      .then(response => {
        if (!response.ok){
          throw new Error(response.statusText);
        }
        return response.json();
      })
      .then(response => {
        if(response.Response === "False"){
          throw new Error(response.Error)
        }
        return response.Search;
      });   
  }

  function updateUI(movies){
    let cards = '';
    movies.forEach(m => cards += showCards(m));
    const movieContainer = document.querySelector('.movie-container');
    movieContainer.innerHTML = cards;
  }

// event binding -> memberikan event ke element yang awalnya belum ada tapi ketika dia ada eventnya tetap bisa berjalan
  document.addEventListener('click', async function(e){ // async
    if(e.target.classList.contains('modal-detail-button')){
      const imdbID = e.target.dataset.imdbid;
      const movieDetail = await getMovieDetail(imdbID); // await
      updateUIDetail(movieDetail);
    }
  });

  function getMovieDetail(imdbid){
    return fetch('http://www.omdbapi.com/?apikey=1fa92f9f&i=' + imdbid)
      .then(response => response.json())
      .then(m => m);
  }

  function updateUIDetail(m){
    const movieDetail = showMovieDetail(m);
    const modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = movieDetail;
  }

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

