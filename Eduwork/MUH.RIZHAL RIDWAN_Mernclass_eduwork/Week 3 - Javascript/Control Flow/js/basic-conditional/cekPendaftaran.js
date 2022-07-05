/* 

Buatlah sebuah fungsi sederhana yang akan mengecek data pendaftaran kelas bootcamp di MERN.
Untuk pendaftaran, user perlu mamasukan 3 variable, yaitu nama, email, dan kelas. Munculkan hasil pendaftaran sesuai dengan rules dan contoh yang ada.

Rules :
    variable nama, harus memiliki data, jika kosong maka munculkan tulisan "nama tidak boleh kosong"
    variable email, harus memiliki data, jika kosong maka munculkan tulisan "email tidak boleh kosong"
    variable kelas, harus memiliki data, jika kosong maka munculkan tulisan "kelas tidak boleh kosong"
    Terdapat 3 kelas berbeda yang bisa di pilih, yaitu "Backend Developer", "Frontend Developer", "Fullstack Developer"

Hint : 
    input di isi secara manual di dalam coding (tidak ada interaksi user untuk isi data)
    gunakan if-else untuk mengecek kelas yang dipilih

contoh
*/

// Contoh Input (silahkan di ganti value untuk melakukan test kondisi yang bisa di handle):
// let nama = "Muhamad Aziz";
// let email = "muhamadaziz@eduwork.com";
// let kelas = "Fullstack Developer";

/* 
Contoh input :
    let nama = ""
    let email = ""
    let kelas = ""

Contoh Output :
    "Nama harus diisi" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = ""
    let kelas = ""

Contoh Output :
    "Halo Muhamad Aziz, silahkan masukan Email untuk menyelesaikan registrasi" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = "muhamadaziz@eduwork.com"
    let kelas = ""

Contoh Output :
    "Halo Muhamad Aziz, silahkan pilih kelas untuk menyelesaikan registrasi" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = "muhamadaziz@eduwork.com"
    let kelas = "Fullstack Developer"

Contoh Output :
    "Selamat datang di Eduwork, Muhamad Aziz"
    "Yuk mulai langkah pertama belajar Fullstack Developer" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = "muhamadaziz@eduwork.com"
    let kelas = "Backend Developer"

Contoh Output :
    "Selamat datang di Eduwork, Muhamad Aziz"
    "Jadi Backend Developer itu menyenangkan, yuk mulai belajar" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = "muhamadaziz@eduwork.com"
    let kelas = "Frontend Developer"

Contoh Output :
    "Selamat datang di Eduwork, Muhamad Aziz"
    "Buat tampilan website keren mulai dari sini, ayo kita mulai kelas Frontend Developer" 
*/

/* 
Contoh input :
    let nama = "Muhamad Aziz"
    let email = "muhamadaziz@eduwork.com"
    let kelas = "Database Enginer"

Contoh Output :
    "Maaf Muhamad Aziz, kelas yang anda pilih belum tesedia"
*/

function cekPendaftaran() {
  let nama = "Izhal";
  let email = "rizhal@gmail.com";
  let kelas = "Developer";

  if (nama === "" ){
    console.log("Nama harus diisi");
  } else if(email === "") {
    console.log('Halo ' + nama + ' , silahkan masukan Email untuk menyelesaikan registrasi')
  } else if (kelas === ""){
    console.log('Halo ' + nama + ' , silahkan pilih kelas untuk menyelesaikan registrasi')
  } else{
    if (kelas === "Fullstack Developer"){
        console.log('Selamat datang di Eduwork, ' + nama + '\nYuk mulai langkah pertama belajar Fullstack Developer');
    } else if (kelas === "Backend Developer") {
        console.log('Selamat datang di Eduwork, ' + nama + '\nJadi Backend Developer itu menyenangkan, yuk mulai belajar');
    } else if (kelas === "Frontend Developer"){
        console.log('Selamat datang di Eduwork, ' + nama + '\nBuat tampilan website keren mulai dari sini, ayo kita mulai kelas Frontend Developer');
    } else {
        console.log('Maaf '+ nama + ', kelas yang anda pilih belum tesedia')
    }
  }
}

cekPendaftaran();
