const container = document.querySelector('.container');
const jumbo = document.querySelector('.jumbo');
const thumbs = document.querySelectorAll('.thumb');

container.addEventListener ('click', function(e){

  //cek apakah yang diklik adalah thumb
  if (e.target.className == 'thumb'){
    // jika iya ganti src class jumbo dengan src class thumb yang diklik
    jumbo.src = e.target.src;
    jumbo.classList.add('fade');// menambahkan class fade pada thumb

    // hilangkan fade setelah setengah detik
    setTimeout(function(){
      jumbo.classList.remove('fade');
    },500);

    // mengecek thumb yang ada class active-nya dihilangkan
    thumbs.forEach(function(thumb){
      // if (thumb.classList.contains('active')){
      //   thumb.classList.remove('active');
      // }
      thumb.className = 'thumb';
    });

    // memberikan class active pada thumb
    e.target.classList.add('active');
  }
});