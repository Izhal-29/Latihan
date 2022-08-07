// Rest parameter --> ... (sisa parameter)
  //Merepresentasikan argument pada function dengan jumlah yang tidak terbatas menjadi sebuah array 

  function myFunc(a, b, ...lainnya){ // posisinya harus diakhir
    return `a = ${a}, b = ${b}, lainnya = ${lainnya}`
  }

  function myFunc1(...nilai){ // akan mengambil semua arguments
    return `nilai = ${nilai}`
  }

  function myFunc2(){
    // return arguments // mengambil semua disimpan ke dalam arguments
    // return Array.from(arguments) // mengambil semua disimpan ke dalam arguments dan dirubah ke array
    return [...arguments] // mengambil semua disimpan ke dalam arguments dan dirubah ke array menggunakan spread operator
  }


  console.log(myFunc(1,2,3,4,5))
  console.log(myFunc1(1,2,3,4,5))
  console.log(myFunc2(1,2,3,4,5))





  function jumlahkan(...angka){
    // let total = 0;
    // for (const a of angka){
    //   total += a
    // }
    // return total;

    return angka.reduce((a,b) => a + b);
  }

  console.log(jumlahkan(1,2,3,4,5));




  // array destructuring
  const kelompok1 = ['Rizhal', 'Rezha', 'Raya', 'Ridwan', 'Rosmala'];

  const [ketua, wakil, ...anggota] = kelompok1;

  console.log(ketua);




  // object destructuring
  const team = {
    pm : 'Rizhal',
    frontEnd1 : 'Rezha',
    frontEnd2 : 'Raya',
    backend : 'Ridwan',
    ux : 'Rosmala',
    devOps : 'Ambo'
  }

  const {pm, ...myTeam} = team;

  console.log(myTeam)




  // filtering
  function filterBy(type, ...values){
    return values.filter(v => typeof v === type);//isi dari valuesnya dianggap v akan mengembalikan nilai cek typeof-nya apakah sama dengan type 
  }

  console.log(filterBy('number',1,2,'Rizhal',false, 10, true, 'Raya'));
  console.log(filterBy('string',1,2,'Rizhal',false, 10, true, 'Raya'));
  console.log(filterBy('boolean',1,2,'Rizhal',false, 10, true, 'Raya'));