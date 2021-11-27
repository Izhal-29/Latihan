var lagi= true;
while (lagi){
	// Menangkap Pilihan User
	var user = prompt('Silahkan Pilih : Gajah, Orang & Semut :')

	// Membuat Nilai/Pilihan random komputer
	var comp = Math.floor(Math.random()*15)+1;
	if(comp <= 5){
		comp = 'gajah';
	}else if (comp >= 5 && comp <=10){
		comp = 'orang';
	}else{
		comp = 'semut';
	}

	// Menentukan Menang / Kalah
	var hasil ='';
	if(user == comp){
		hasil = 'SERI!';
	}else if(user == 'gajah'){
		// if(comp == 'orang'){
		// 	hasil = 'MENANG!';
		// }else{
		// 	hasil = 'KALAH!';
		// }
		hasil = (comp == 'orang') ? 'MENANG!' : 'KALAH!';
	}else if(user == 'orang'){
		// if(comp == 'gajah'){
		// 	hasil = 'KALAH!';
		// }else{
		// 	hasil = 'MENANG!';
		// }
		hasil = (comp == 'gajah') ? 'KALAH!' : 'MENANG!';
	}else if(user == 'semut'){
		hasil = (comp == 'gajah') ? 'MENANG!' : 'KALAH!';
	}else{
		hasil = alert ('Maaf yang anda masukkan tidak ada dalam pilihan ... !!!');
	}

	// Hasilnya
	alert ('kamu memilih ' + user + ' dan Komputer memilih ' + comp + '\n Hasilnya : Kamu ' + hasil);

	// Konfrmasi
	lagi = confirm ('Apakah Anda mau mencobanya lagi ?');
}

alert ("Terima Kasiih Sudah Bermain");
