const nextIcon = '<i class="bi-arrow-right-circle-fill"></i>';
const prevIcon = '<i class="bi-arrow-left-circle-fill"></i>';

$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 4,
  padding: 5,
  nav: true,
  dots:false,
  navText: [prevIcon, nextIcon],
  items :4,
  responsive: {
    0: {
        items: 1
    },
    485: {
        items: 2
    },
    728: {
        items: 3
    },
    1000: {
        items: 4
    }
  }
});

$(document).ready(function(){
  $('#tombol-cari').hide();
  $('#keyword').on('keyup',function(){ 
    
    // $('.loader').show(); //jquery carikan saya loader lalu tampilkan

    $.get('ajax/produk.php?keyword=' + $('#keyword').val(),function(data){ 
      $('#isi').html(data);
      // $('.loader').hide(); // jquery cariin saya class loader lalu sembunyikan
    });

  });
}); 

