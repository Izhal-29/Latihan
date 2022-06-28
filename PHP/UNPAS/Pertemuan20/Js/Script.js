// Ajax
// //ambil element" yang dibutuhkan
// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');


// // tambahkan event ketika keyword ditulis
// keyword.addEventListener('keyup',function(){

//   //buat object ajax
//   var xhr = new XMLHttpRequest();

//   // cek kesiapan ajax
//   xhr.onreadystatechange = function (){

//     if(xhr.readyState == 4 && xhr.status == 200){
//       container.innerHTML = xhr.responseText; 
//     }
//   }


//   //eksekusi ajax
//   xhr.open('GET', 'Ajax/Mahasiswa.php?keyword='+keyword.value, true)
//   xhr.send();

// });


//Jquery jquery(namalibrary)/ $(namalibrary)
$(document).ready(function(){// jquery tolong ambilkan saya document, lalu ketika document tersebtu siap jalankan fungsi berikut
  $('#tombol-cari').hide();// jquery tolong carikan saya tombol-cari lalu sembunyikan
  //event ketiaka keyword ditulis
  $('#keyword').on('keyup',function(){ // jquery tolong carikan saya elemant keyword lalu on ketika di keyup lakukan fungsi berikut ini
    
    //munculkan icon loading
    $('.loader').show(); //jquery carikan saya loader lalu tampilkan

    //ajax menggunakan load
    // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());// jquery tolong carikan saya sebuah element container lalu ubah isinya dengan data yang kita ambil dari sumber lalu kirimkan data keywordnya apapun yang diketikkan oleh user

    // ajax menggunakan $.get()
    $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(),function(data){ // ambil data setelah datanya diambil kita lakukan sesuatu sambil mengirimkan data hasilnya
      $('#container').html(data);// jquery cariin saya id container lalu ganti isinya
      $('.loader').hide(); // jquery cariin saya class loader lalu sembunyikan
    });

  });
}); 


