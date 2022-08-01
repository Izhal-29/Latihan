function getPilihanComputer(){
	const comp = Math.random(); // bangkitkan bilangan random 0 - 1
	if(comp < 0.34) return 'gajah'; 
	if(comp >= 0.34 && comp < 0.67 ) return 'orang';
	return 'semut';
}
// ketika ketemu return maka programnya akan berhenti sampai disitu


function getHasil(comp, player){// parameternya 2 : pilihan komputernya dan usernya
	if(player == comp) return 'SERI!';
	if(player == 'gajah') return (comp == 'orang') ? 'MENANG!' : 'KALAH!'; // ketika player milih gajah kembalikan nilai tapi lihat dulu pilihan komputernya apa? kalau komputernya milih orang berarti menang tapi selain dari itu kalah
	if(player == 'orang') return (comp == 'gajah') ? 'KALAH!' : 'MENANG!';// ketika player milih orang kembalikan nilai tapi lihat dulu pilihan komputernya apa? kalau komputernya milih gajah berarti menang tapi selain dari itu kalah
	if(player == 'semut') return (comp == 'gajah') ? 'MENANG!' : 'KALAH!';// ketika player milih semut kembalikan nilai tapi lihat dulu pilihan komputernya apa? kalau komputernya milih gajah berarti menang tapi selain dari itu kalah
}

// const pGajah = document.querySelector('.gajah'); // menyeleksi tombolnya
// pGajah.addEventListener('click',function(){ // berikan event ketika mengklik gajah jalankan function berikut ini 
// 	const pilihanComputer = getPilihanComputer(); // ambil pilihan komputer
// 	const pilihanPlayer = pGajah.className; // ambil pilihan user berdasarkan nama classnya
// 	const hasil = getHasil(pilihanComputer,pilihanPlayer)  // buat hasil panggil function getHasil
	
// 	const imgComputer = document.querySelector('.img-comp'); // seleksi gambar komputer
// 	imgComputer.setAttribute('src','img/'+pilihanComputer+'.png'); // ganti gambarnya dengan memanipulasi isi attributnya src sesuai dengan pilihan komputer

// 	const info = document.querySelector('.info');// seleksi infonya
// 	info.innerHTML = hasil; // ganti isinya dengan hasil
// });

// const pOrang = document.querySelector('.orang');
// pOrang.addEventListener('click',function(){
// 	const pilihanComputer = getPilihanComputer();
// 	const pilihanPlayer = pOrang.className;
// 	const hasil = getHasil(pilihanComputer,pilihanPlayer)
	
// 	const imgComputer = document.querySelector('.img-comp');
// 	imgComputer.setAttribute('src','img/'+pilihanComputer+'.png');

// 	const info = document.querySelector('.info');
// 	info.innerHTML = hasil; 
// });

// const pSemut = document.querySelector('.semut');
// pSemut.addEventListener('click',function(){
// 	const pilihanComputer = getPilihanComputer();
// 	const pilihanPlayer = pSemut.className;
// 	const hasil = getHasil(pilihanComputer,pilihanPlayer)
	
// 	const imgComputer = document.querySelector('.img-comp');
// 	imgComputer.setAttribute('src','img/'+pilihanComputer+'.png');

// 	const info = document.querySelector('.info');
// 	info.innerHTML = hasil; 
// })


// mengacak / memutar dulu pilihan komputer
function putar(){// buat function putar lakukan hal berikut :
	const imgComputer = document.querySelector('.img-comp'); // menyeleksi gambar komputer
	const gambar = ['gajah','semut','orang']; // array gambar
	let i = 0;
	const waktuMulai = new Date().getTime(); // membuat waktu awal/mulai (untuk mendaptkan waktu saat itu)
	setInterval(function(){ // set interval fungsi untuk melakukan sesuatu secara berulang-ulang selama interval waktu 0,1 detik
	
		if(new Date().getTime() - waktuMulai > 1000 ){// jika waktu pengulangannya itu selisihnya 1 detik berhentikan / setiap pengulangannya dikurangi waktuMulai itu lebih besar dari 1000 maka
			clearInterval; // berhentikan/ hapus interval
			return; // keluarkan dari function
		}

		imgComputer.setAttribute('src', 'img/' + gambar[i++] + '.png'); // ganti gambarnya dengan memanipulasi isi attributnya src sesuai dengan array gambar yang dibuat
		if(i == gambar.length) i = 0 ; // jika gambarnya sudah sesuai dengan jumlah gambar suruh dia balik lagi (kembalikan nilainya ke-0)
	},100)// 100 = 0,1 detik
}


const pilihan = document.querySelectorAll('li img'); // mneyeleksi semua gambarnya yang ada didalam li
pilihan.forEach(function(pil){ // looping img jalankan function berikut dengan parameter pil (merepresentasikan satu img sja)
	pil.addEventListener('click',function(){ // berikan event tiap pilihan yang diklik jalankan function berikut
		
		const pilihanComputer = getPilihanComputer(); // ambil pilihan komputer
		const pilihanPlayer = pil.className; // ambil pilihan user berdasarkan img yang dipilih
		const hasil = getHasil(pilihanComputer,pilihanPlayer) // buat hasil panggil function hasil

		putar();// memanggil function putar setelah diklik

		setTimeout(function(){// nunggu dulu baru jalankan function berikut selama 1 detik
			const imgComputer = document.querySelector('.img-comp');
			imgComputer.setAttribute('src','img/'+pilihanComputer+'.png');

			const info = document.querySelector('.info');
			info.innerHTML = hasil; 
		},1000) // 1000 = 1 detik
		
	})
})

// PR Buatkan Scor untuk comp dan user