// Template Literal / Template String --> menggunakan back tick ``
  // MDN Web Docs --> string literal yang memungkinkan adayan expression di dalamnya
  const nama = 'Rizhal';
  const umur = 29;
  const email = 'rizhal@gmail.com'
  console.log('Halo, nama saya ' + nama + ', dan saya ' + umur + ' tahun.')//--> concat
  console.log(`Halo, nama saya ${nama}, dan saya ${umur} tahun.`);//--> template Literal


  // embended Extention
  console.log(`${1 + 1}`);
  // console.log(`${alert('halo!')}`);
  
  const x = 10;
  console.log(`${(x % 2 == 0) ? 'Genap' : 'Ganjil'}`)// Ternari



  //1. HTML Fragments
  const mhs = {
    nama : 'Rizhal',
    umur : 29,
    nrp : '043040023',
    email : 'informatika@gmail.com'
  };

  const el = `<div class="mhs">
    <h2>${mhs.nama}</h2>
    <span class="nrp">${mhs.nrp}</span>
  </div>`;

  console.log(el)
  document.body.innerHTML = el;

  const mahasiswa = [
    {
      nama : "Rizhal Ridwan",
      nrp : "043040023",
      email : "izhal@gmail.com",
      jurusan : "Teknik Informatika",
    },
    {
      nama : "Doddy Ferdiansyah",
      nrp : "133040123",
      email : "doddy@gmail.com",
      jurusan : "Teknik Informatika",
    },
    {
      nama : "Erik",
      "nrp" : "104040001",
      email : "erik@gmail.com",
      jurusan : "Teknik Industri",
    }
  ];

    //2. looping
    const element = `<div class="mhs">
    ${mahasiswa.map(m => 
      `<ul>
        <li>${m.nama}</li>
        <li>${m.nrp}</li>
        <li>${m.email}</li>
        <li>${m.jurusan}</li>
      </ul>`).join('')}
    </div>`;

    document.body.innerHTML = element;



    //3. conditionals
      // ternary
      const lagu = {
        judul : 'Tetap Dalam Jiwa',
        penyanyi : 'Isyana Sarasvati',
        // feat : 'Rayi Putra'
      }

      const elt = `<div class="lagu">
        <ul>
          <li>${lagu.penyanyi}</li>
          <li>${lagu.judul} ${lagu.feat ? `(feat.${lagu.feat})` : ''}</li>
        </ul>
      </div>`

      document.body.innerHTML = elt;


    //4. Nested HTML (HTML Fragments bersarang)
      const mhs1 = {
        nama : 'Rizhal',
        semester : 5,
        mataKuliah : [
          'Rekayasa Web',
          'Analisa dan perancangan Sistem Informasi',
          'Pemrograman Sistem Interaktif',
          'Perancangan Sistem Berorientasi Object'
        ]
      };


      function cetakMataKuliah(mataKuliah){
        return `
          <ol>
            ${mataKuliah.map(mk => `<li>${mk}</li>`).join('')}
          </ol>
        `;
      }

      const elm = `<div class="mhs">
        <h2>${mhs1.nama}</h2>
        <span class="semester">Semester : ${mhs1.semester}</span>
        <h4>Mata Kuliah : </h4>
          ${cetakMataKuliah(mhs1.mataKuliah)}
      </div>`;

      document.body.innerHTML = elm;


  // Expression Interpolation


  // Tagged Template
    // MDN Web Docs --> Bentuk yang lebih kompleks dari Template Literals, memungkinkan kita untuk membaca template loterals melalui sebuah function 

    function coba (strings, ...values){ //strings --> untuk menampilkan stringnya, ...values --> untuk menampilkan expression-nya
      // let result = '';
      // strings.forEach((str, i) =>{
      //   result += `${str}${values[i] || '' }`
      // });
      // return result;

      return strings.reduce((result, str, i) => `${result}${str}${values[i] || ''}`, '')
    }
    // ${str}${values[i] || '' kalau values ada isinya tampilin kalau ngga ada tampilin kosong

    function hightLight(strings, ...values){
      return strings.reduce((result, str, i) => `${result}${str} <span class="hl">${values[i] || ''}</span> `, '')
    }

    const str = hightLight`Halo, nama saya ${nama}, saya ${umur} tahun dan email saya adalah ${email}.`;
    console.log(str)

    document.body.innerHTML = str;
    