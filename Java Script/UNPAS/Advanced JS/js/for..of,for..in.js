// for..of --> looping yang bisa mnegulang atau menelusuri object" yang iterables :
 
  // string
    const nama = 'Rizhal';
    for (const n of nama){
      console.log (n);
    }

  // Array
    const mhs = ['Rizhal', 'Ridwan','Rezha'];
    mhs.forEach(m => console.log(m)); // array mhs direpresentasikan sebagai m dan return value-nya dicetak m di console

    mhs.forEach((m,i) => { // forEach mempunyai 2 parameter (alias,index)
      console.log(`${m} adalah mahasiswa ke-${i+1}`)
    }); 

    for(const m of mhs){
      console.log(m);
    }

    for(const [i,m] of mhs.entries()){ // entries() --> mengembalikan object array dengan pasangan kunci / nilai
      console.log(`${m} adalah mahasiswa ke-${i+1}`)
    }


  // Arguments --> array untuk menampung argument" pada function / NodeList --> ketika kita melakukan query pada DOM
    // arguments
      function jumlahkanAngka(){
        // console.log(arguments)// jika kalau tidak dipasangkan parameter pada functiondia tertampung pada arguments
        let jumlah = 0;
        for(a of arguments){
          jumlah += a;
        }
        return jumlah
      }

      console.log(jumlahkanAngka(1,2,3,4,5));


    // nodeList
      const liNama = document.querySelectorAll('.nama');
    
      liNama.forEach(n => console.log(`NodeList ${n.textContent}`));

      for (n of liNama){
        console.log(`for..of NodeList : ${n.innerHTML}`)
      }

  // TypeArray
  // Map
  // Set
  // User-defined Iterables --> iterables yang buat sendiri



// for..in --> looping property pada dari object

  const mahasiswa = {
    nama : 'Rizhal',
    umur : '29',
    email : 'rizhal@gmail.com'
  }

  for (m in mahasiswa){
    console.log(m);// untuk mencetak property-nya/index-nya
  }

  for (m in mahasiswa){ 
    console.log(mahasiswa[m]);// untuk mencetak nilai
  }