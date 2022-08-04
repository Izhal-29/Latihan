// Higher Order Function
  // --> function yang beroperasi pada function yang lain, Baik itu digunakan dalam argument, maunpun sebagai return value
  // --> javascript memperlakukan function sebagai object
// Array.prototype.filter()
// Array.prototype.map()
// Array.Prototype.reduce()

const angka = [-1,8,9,1,4,-5,-4,3,2,9];
const newAngka =[];

// menggunakan for
for (let i = 0; i <= angka.length; i++){
  if (angka[i] >= 3){
    newAngka.push(angka[i]);
  }
}

console.log (newAngka);


//filter :
const newAngka1 = angka.filter ( function (a) {
  return a >= 3;
});

console.log(newAngka1);

// menggunakan arrow function
const newAngka2 = angka.filter(a => a >= 3);

console.log(newAngka2);


//map : --> memetakan tiap" elementya menggunakan fungsi yang baru
const newAngka3 = angka.map(a => a * 2);

console.log(angka);
console.log(newAngka3);


//reduce : --> melakukan sesuatu terhadap seluruh element pada array
//jumlahkan seluruh element pada array
const newAngka4 = angka.reduce((accumulator,currentValue) => //accumulator --> hasil dari prosesnya, currentValue --> element array tyang sedang dilooping
accumulator + currentValue );
// accumulator + currentValue, 0); 0 --> nilai awal
console.log(newAngka4)


// method Chaining (berantai) --> mengabungkan fungsi" pada higher order function dalam satu kali eksekusi

const hasil = angka.filter (a => a > 5)// 8,9,9
  .map(a => a * 3) // 24, 27, 27
  .map(a => a / 2) // 12, 13.5, 13.5
  .reduce((acc, cur) => acc + cur); //39
console.log(hasil);




// latihan Higher Order Function

  // ambil semua element video
  const videos = Array.from(document.querySelectorAll('[data-duration]'));//Array.from --> merubah element menjadi array
  
  // pilih hanya yang 'JAVASCRIPT LANJUTAN'
  let jsLanjutan = videos.filter(video => video.innerHTML.includes('JAVASCRIPT LANJUTAN')) // --> filter video yang didalamnya terdapat 'JAVASCRIPT LANJUTAN'

  // ambil durasi masing" video
  .map(item => item.dataset.duration)//dipetakan item yang returnnya item.dataset --> untuk mengambil data yaitu duration

  // ubah durasi menjadi float, ubah menit menjadi detik 
  .map(waktu => {
    //  10:30 -> [10, 30] ---->  di split namanya
    const parts = waktu.split(':').map(part => parseFloat(part));// parseFloat --> menjadikan bilangan pecahan, split --> menghilangkan titik dua (:) dan dipecahkan menjadi array
    return parts[0] * 60 + parts[1];//mengalikan 60 index 0 dan ditambah dengan index ke 1 (15*60+27)
  })

  // jumlahkan semua detik
  .reduce((total, detik) => total + detik);

  // ubah formatnya jadi jam menit detik
  const jam = Math.floor(jsLanjutan / 3600);
  jsLanjutan = jsLanjutan - jam * 3600;

  const menit = Math.floor(jsLanjutan / 60);
  const detik = jsLanjutan - menit * 60;
  
  // simpan di DOM
  const pDurasi =  document.querySelector('.total-durasi');
  pDurasi.textContent = `${jam} Jam, ${menit} Menit, ${detik} Detik.`;
  const jmlVideo = videos.filter(video => video.textContent.includes('JAVASCRIPT LANJUTAN')).length;

  const pJmlVideo = document.querySelector('.jumlah-video');
  pJmlVideo.textContent = `${jmlVideo} Video.`
