const card = document.querySelectorAll('.card');

const tutup = document.querySelectorAll('.close');

// for (let i = 0; i < tutup.length;i++){
//   // tutup[i].addEventListener('click',function(){
//   //   // card[i].style.display = 'none';
//   //   tutup[i].parentElement.style.display = 'none'; // ambil element close telusuri siapa orang tuanya lalu kita display=none;
//   // });
//   tutup[i].addEventListener('click',function(e){// e akan berisi object yang bermacam-macam informasi event yang terjadi
//     e.target.parentElement.style.display = 'none';// target ==> mengambil element yang di click
//   });
// }

tutup.forEach(function(el){
  el.addEventListener('click', function(e){
    e.target.parentElement.style.display = 'none';
  });
});


const nama = document.querySelector('.nama');
// console.log(nama.parentElement); // parentnya nama
// console.log(nama.parentNode); // parentnya nama
// console.log(nama.parentElement.parentElement); // diatas parentnya nama
// console.log(nama.nextSibling); // mengambil saudaranya setelah dia (adiknya) termasuk node enter
// console.log(nama.nextElementSibling); // mengambil saudaranya setelah dia (adiknya) mengabaikan node enter
// console.log(nama.previousElementSibling); // mengambil saudaranya sebelum dia (kakaknya) mengabaikan node enter
// console.log(nama.previousSibling); // mengambil saudaranya sebelum dia (kakaknya) termasuk node enter


// tutup.forEach(function(el) {
//   el.addEventListener('click', function(e){
//       e.target.parentElement.style.display = 'none';
//       e.preventDefault(); // menghentikan aksi default element(tag) a 
//       e.stopPropagation(); // mengehentikan bubling(event yang ada pada parentnya)
//   });
// });


// preventDefault() --> cegah aksi default dari sebuah element
// event bubling --> ketika kita mempunyai event pada child dan juga parentnya ketika kita jalankan di childnya maka event di parentnya juga akan dijalankan, nah kita harus hentikan event di parentnya dengan menggunakan : stopPropagation()
// const cards = document.querySelectorAll('.card');
// cards.forEach(function(card){
//   card.addEventListener('click', function(e){
//     alert('ok');
//   });
// });

// const nama = document.querySelector('.nama');
// console.log(nama.nextElementSibling.nextElementSibling);


const container = document.querySelector('.container'); // ambil parentnya
container.addEventListener('click', function(e){
   if (e.target.className == 'close'){ // kalau misalnya yang diklik e.target punya nama class yaitu close 
    // lalu kita ambil parentnya lalu diubah stylenya jadi none
    e.target.parentElement.style.display = 'none';
    e.preventDefault(); // untuk jaga" menghentikan aksi default sebuah element
  }
});
