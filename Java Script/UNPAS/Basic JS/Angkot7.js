let penumpang = ['rizhal','ridwan',undefined,'rezha'];
let tambahPenumpang = function (namaPenumpang, penumpang){
	//jika angkot kosong
	if(penumpang.length == 0) {
		// tambah penumpang di awal
		penumpang.push(namaPenumpang);
		// kembalikan isi array & keluar dari function
		return penumpang;
	}else{
		// telusuriseluruh kursi dari awal
		for (let i = 0; i < penumpang.length; i++){
		// jika ada kursi kosong
			if (penumpang[i] == undefined){
			// tambah penumpang di kursi tersebut
				penumpang[i] = namaPenumpang;
			// kembalikan isi array & keluar dari function
				return penumpang;
		// jika sudah ada nama yang sama
			}else if(penumpang [i] == namaPenumpang ){
			// 	tampilkan pesan kesalahannya
			console.log(namaPenumpang + ' Sudah ada di dalam angkot.');
			// 	kembalikan isi array & keluar dari function
			return penumpang;
		// jika seluruh kursi terisi
			}else if (i == penumpang.length - 1){
			// 	tambah penumpang di akhir array
			penumpang.push(namaPenumpang);
			// 	kembalikan isi array & keluar dari function
			return penumpang;
			}
		}
	}
}

let hapusPenumpang = function (namaPenumpang, penumpang){
	if (penumpang.length == 0){
		console.log('Angkot masih kosong');
	}else{
		for (let i = 0; i < penumpang.length; i++){
			if (penumpang[i] == namaPenumpang){
				penumpang[i] = undefined;
				return penumpang;
			}else if (i == penumpang.length - 1 ){
				console.log(namaPenumpang + ' Tidak ada di dalam Angkot.');
				return penumpang;
			}
		}
	}
	return penumpang;
}
