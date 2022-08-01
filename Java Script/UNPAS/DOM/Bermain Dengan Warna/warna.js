// Merubah warna sesuai keinginan
const body = document.querySelector('body')[0]; 
const tUbahWarna = document.getElementById('tUbahWarna');

tUbahWarna.onclick = function(){
  document.body.classList.toggle('hijau-muda');
}


// Merubah warna secara random dengan menekan tombol Acak Warna
const tAcakWarna = document.createElement('button');
const teksTombol = document.createTextNode('Acak Warna');

tAcakWarna.appendChild(teksTombol);

tAcakWarna.setAttribute('type', 'button');

tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener('click',function(){
  const red = Math.round(Math.random()*255 + 1);
  const green = Math.round(Math.random()*255 + 1);
  const blue = Math.round(Math.random()*255 + 1);
  document.body.style.backgroundColor = 'rgb('+ red +','+ green +','+ blue +')'
})


// membuat slider
const sMerah = document.querySelector('input[name=sMerah]');
const sHijau = document.querySelector('input[name=sHijau]');
const sBiru = document.querySelector('input[name=sBiru]');


sMerah.addEventListener('input',function(){
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});

sHijau.addEventListener('input',function(){
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});

sBiru.addEventListener('input',function(){
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});


// merubah warna dari move mouse
document.body.addEventListener('mousemove', function(event){
  // posisi mouse
  // console.log(event.clientX); // Sumbu X
  // console.log(event.clientY); // Sumbu Y
  // ukuran browser
  // console.log(window.innerWidth); /// ukuran browser (lebar document)
  // console.log(window.innerHeight); /// ukuran browser (tinggi document)

  const xPos = Math.round((event.clientX / window.innerWidth) * 255);
  const yPos = Math.round((event.clientY / window.innerHeight) * 255);
  
  document.body.style.backgroundColor = 'rgb('+ xPos + ','+ yPos +',100)';


});