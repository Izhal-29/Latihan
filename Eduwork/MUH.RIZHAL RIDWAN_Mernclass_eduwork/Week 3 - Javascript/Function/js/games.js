let lagi = true;
let p1,p2,comp;
let ronde = 1;
let nilaip1 = 0;
let nilaip2 = 0;

while(lagi){
  alert ('Selamat datang di game tebak angka \n kamu diminta untuk menebak angka 1-3 \n dan kamu akan bermain dalam 5 ronde \n player yang berhasil mengumpulkan tebakan terbanyak akan menang \n SELAMAT BERMAIN!!!')


  function isi() {
    alert ('Ronde ' + ronde);
    p1 = prompt ('Masukkan Angka (Player 1): ');  
    p2 = prompt ('Masukkan Angka (Player 2): ');
    comp = Math.floor(Math.random()*3)+1;
    validasi()
  }

  function cekhasil () {
    //cek siapa player yang benar :
    if (p1 == comp) {
      alert ('Player 1 WIN');
      nilaip1+=1;
      alert ('Nilai yang dicari ' + comp + '\n ---------------------------- \n - Player 1 : ' + nilaip1 + '\n - Player 2 : ' + nilaip2);
    } else if (p2 == comp) {
      alert ('Player 2 WIN')
      nilaip2+=1;
      alert ('Nilai yang dicari ' + comp + '\n ---------------------------- \n - Player 1 : ' + nilaip1 + '\n - Player 2 : ' + nilaip2);
    } else {
      alert ('tidak ada yang benar. hasil SERI');
      alert ('Nilai yang dicari ' + comp + '\n ---------------------------- \n - Player 1 : ' + nilaip1 + '\n - Player 2 : ' + nilaip2);
    }
  }

  function validasi(){
    if (p1 > 3 || p2 > 3) {
      alert ('Tebakan tidak boleh lebih besar dari 3')
      alert ('ulangi'); 
      isi();
    } else if (p1 < 1 || p2 < 1) {
      alert ('Tebakan tidak boleh lebih kecil dari 1')
      alert ('ulangi');  
      isi(); 
    } else if (p1 == p2){
      alert ('Tebakan tidak boleh sama');
      alert ('ulangi');
      isi();
    } else {
      cekhasil()
    }
  }

  while (ronde <= 5) {
    isi();
    ronde++; 
  }
  
  if(nilaip1 > nilaip2){
    alert('Good Jobs Player 1')
  } else if (nilaip1 < nilaip2) {
    alert('Good Jobs Player 2')
  } else {
    alert('Tidak Ada Yang Menang')
  }

  lagi = confirm('Apakah Anda ingin Bermain lagi ?')
}


alert ("Terima Kasih Sudah Bermain");         