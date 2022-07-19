


const janji = new Promise (function(resolve, reject){
  if (true){
    resolve('Promise Berhasil');
  } else {
    reject('promise Gagal');
  }
});

janji.then(function(result){
  console.log(result);
}).catch(error => console.log(error))
.finally(() => {
  console.log('promise selesai di eksekusi')
});