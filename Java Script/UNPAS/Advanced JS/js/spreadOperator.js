// Spread Operator --> ... 
  // memecah(expand / unpack) iterables menjadi single element

  const mhs = ['Rizhal', 'Rezha', 'Ridwan'];
  console.log(...mhs);
  console.log(...mhs[0]);
  console.log(...mhs[1]);
  console.log(...mhs[2]);



  // mengabungkan 2 array :
  const dosen = ['Nur Ilman','wawan','ilham'];
  const orang = [mhs,dosen]; // array dalam array
  console.log(orang);

  const orang1 = mhs.concat(dosen);// mengabungkan 2 array

  console.log(orang1);

  const orang2 = [...mhs, 'aji', ...dosen];// mengabungkan beberapa array yang lebih fleksibel

  console.log(orang2);




  // meng-copy array :
  const mhs1 = [...mhs];// copy array tnapa mengubah array awal
  mhs1[0] = 'fajar'; // mengubah nilai index ke 0 pada mhs1 tapi tidak mengubah mhs
  console.log(mhs1);
  console.log(mhs);
  
  
  // megambil isi li dan disimpan ke array:
  const liMhs = document.querySelectorAll('li');

  const mhs2 = []
  for (let i = 0; i < liMhs.length; i++){
    mhs2.push(liMhs[i].textContent);
  }
  
  console.log(`ini diambil dari isi li : ${mhs2}`)

  const mhs3 = [...liMhs].map(m => m.textContent);// [...liMhs] --> dirubah jadi array agar method map berfungsi
  console.log(mhs3)

  const nama = document.querySelector('.namaku');
  const huruf = [...nama.textContent].map(h  => `<span>${h}</span>`).join(''); // memecah isi .namaku lalu membuat array baru dan menambahkan <span> dimasing" hurufnya lalu digabungkan
  
  nama.innerHTML = huruf;
  