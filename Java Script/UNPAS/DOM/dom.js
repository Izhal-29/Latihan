//##### DOM (Document Object Model)######
  // 1. DOM Tree :
    // * Tipe-tipe node :
        // - Element (Tag HTML)
        // - Attribute (Attribut Tag HTML)
        // - Text (Isi tag HTML)
        // - CData Section
        // - Entity Reference
        // - Entity
        // - Processing Instruction
        // - Comment
        // - Document (Semua yang ada dalam body browser)
        // - Document Type
        // - Document Fragment
        // - Notation
    // * Node --> satu node yang terdiri dari 1 type node element/text
    // * NodeList --> lebih dari satu node, tidak peduli tipe nodenya apa dan tidak bersifat live
    // * HTMLCollection --> kumpulan Node tapi khusus yang typenya element HTML saja dan bersifat live
    // * Struktur Hierarki :
        // - Root Node
            // node yang menjadi sumber dari semua node lain di dalam DOM
            // Document
        // - Parent Node
            // node yang berada 1 tingkat diatas node yang lain
            // body adalah dari h1,p,p,div dan a
        // - Child Node
            // node yang berada 1 tingkat di bawah node yang lain
            // h1 adalh child dari body
  // 2. DOM Selection
        // * Method 
            // - getElementById() --> carikan element berdasarkan Id  ==> Element
                  // const judul = document.getElementById('judul'); // menangkap/menyeleksi element
                  // judul.style.color = 'red'; // merubah warna text
                  // judul.style.backgroundColor = '#ccc'; // merubah backgroundnya
                  // judul.innerHTML = 'Izhal Brown'; // merubah textnya
            // - getElementsByTagName() --> carikan element-element yang memiliki nama Tag tertentu ==> HTMLCollection (bentuk array)
                  // const p = document.getElementsByTagName('p');
                  // p[0].style.backgroundColor = 'lightblue'// merubah satu element
                  // p[1].style.backgroundColor = 'lightblue'
                  // p[2].style.backgroundColor = 'lightblue'
                  // p[3].style.backgroundColor = 'lightblue'

                  // for(let i = 0; i < p.length; i++){ // merubah semua element menggunakan looping
                  //   p[i].style.backgroundColor = 'lightgreen';
                  // }

                  // cara membuat menjadi element menngunakan getElementByTagName
                  // const h1 = document.getElementsByTagName('h1')[0]; // ambil semua element element-element yang memiliki nama Tag h1 lalu ambil yang hanya index ke 0
                  // h1.style.color = 'green';

            // - getElementsByClassName() --> carikan element-element yang memiliki class tertentu ==> HTMLCollection (bentuk array)
                  // const p1 = document.getElementsByClassName('p1')[0];
                  // p1.style.color = 'red'; 
                  // p1.style.fontWeight = 'bold'; 

            // - querySelector() --> mencari element berdasarkan selectornya ==> Element
                  // const p4 = document.querySelector('#b p');
                  // p4.style.color = 'green';
                  // p4.style.fontSize = '30px';

                  // const li2 = document.querySelector('section#b ul li:nth-child(2)');
                  // li2.style.fontSize = '20px';
                  // li2.style.color = 'blue';

                  // const p = document.querySelector('p'); // ini hanya akan berpengaruh 1 elemen saja walaupun yang di selector semua tag P yang berpengaruh hanya element pertama tag p 
                  // p.innerHTML = 'Ini diubah melalui javascript';

            // - querySelectorAll() --> mencari element berdasarkan semua selectornya ==> NodeList
                  // const p = document.querySelectorAll('p'); // ini akan berpengaruh semua elemen yang di selector, semua tag P akan berpengaruh tanpa terkecuali
                  // p[1].innerHTML = 'Ini diubah melalui javascript'; // merubah satu element

                  // for(let i = 0; i < p.length; i++){ // merubah semua element menggunakan looping
                  //   p[i].innerHTML = 'Ini diubah melalui javascript';
                  // }

            // - Merubah Node root
                  // cara 1 merubah tag p ke empat :
                  // const p4 = document.getElementsByTagName('p');
                  // p4[3].style.backgroundColor = 'lightblue'
                  // cara 2 merubah tag p ke empat:
                  // const p4 = document.querySelectorAll('p');
                  // p4[3].style.backgroundColor = 'lightblue'

                  // cara 3 merubah tag p ke empat teknik Node root:
                  // const sectionB = document.getElementById('b'); 
                  // const p4 = sectionB.querySelector('p'); //hanya mencari selector p dalam id b
                  // p4.style.backgroundColor = 'orange';

                  // const sectionB = document.querySelector('section#b'); 
                  // const p4 = sectionB.getElementsByTagName('p')[0]; //hanya mencari selector p dalam selector section#b
                  // p4.style.backgroundColor = 'orange';


  // 3. DOM Manipulation
      // * Manipulasi Element --> Merubah bentuk, isi dari sebuah element
          // - Method :
            // element.innerHTML --> untuk merubah isi dari sebuah tag yang sudah kita seleksi
                // let judul = document.getElementById('judul');
                // judul.innerHTML = '<em> izhal Brown </em>';

                // const sectionA = document.querySelector('section#a');
                // sectionA.innerHTML = '<div><p> Hello World </p></div>'; 

            // element.style.<property> --> untuk merubah style/css dari sebuah element yang sudah kita seleksi
                // let judul = document.querySelector('#judul');
                // judul.style.color = 'lightblue';
                // judul.style.backgroundColor = 'black';

            // element.setAttribute('nama attribut','nilai dari attribut') Menambah Attribut dan Valuenya
            // element.getAttribute('nama attribut') mengambil attribut
            // element.removeAttribute('nama attribut') menghapus attribut
            // --> untuk memanipulasi attribut dan valuenya pada sebuah element, yang melekat pada sebuah element yang sudah kita seleksi
                // const judul = document.getElementsByTagName('h1')[0];
                // judul.setAttribute('name','Izhal');// menambahkan attribute name yang valuenya izhal

                // const a = document.querySelector('section#a a');
                // a.setAttribute('id','link');// menambahkan attribute id yang valuenya link
                // a.getAttribute('href');// untuk mengambil attribute
                // a.removeAttribute('href');// untuk menghapus attribute

                
            // element.classList --> untuk memanipulasi class
               // element.classList.add() --> menambah class baru
                    // const sectionA = document.getElementById('a');
                    // sectionA.classList.add('biru-muda');

               // element.classList.remove() --> menhilangkan class yang ada
                    // const sectionA = document.getElementById('a');
                    // sectionA.classList.remove('biru-muda');

               // element.classList.toggle() --> jika element tersebut classnya sudah ada maka dia hilangkan classnya tetapi jika classnya belum ada maka dia adakan classnya (false dia hilangkan classnya / true dia tambahkan classnya) 
                    // const sectionB = document.getElementById('b');
                    // sectionB.classList.toggle('biru-muda');
                    // const sectionB2 = document.getElementById('b');
                    // sectionB2.classList.toggle('biru-muda');

               // element.classList.item() --> untuk mengetahui class tertentu dari sebuah element
                    // const sectionA = document.getElementById('a');
                    // const p1 = sectionA.querySelector('#a p:nth-child(1)');
                    // console.log(p1.classList.item(0));

               // element.classList.contains() --> mengecek dalam element ada tidak class tertentu (true / false)
                    // const sectionA = document.getElementById('a');
                    // const p1 = sectionA.querySelector('#a p:nth-child(1)');
                    // console.log(p1.classList.contains('dua'));

               // element.classList.replace() --> untuk mengganti class tertentu dengan kelas yang baru
                    // const sectionA = document.getElementById('a');
                    // const p1 = sectionA.querySelector('#a p:nth-child(1)');
                    // p1.classList.replace('dua','dua-puluh');

            // . . .

      // * Manipulasi Node --> ketika kita ingin menyisipkan element baru pada halaman, menambah, mengurangi element
        // buat Element (node 2) --> buat isi element (node 2) --> jadj 2 node --> pindahkan isi element ke dalam elementnya (ke node 1) --> simpan ketempat yang dituju

            // - document.createElement() --> untuk Membuat element
                // membuat p baru di bawah paragraf 3
                // const pBaru = document.createElement('p');

            // - document.createTextNode() --> untuk membuat isi element
                // membuat isi p baru
                // const teksPBaru = document.createTextNode('Paragraf Baru');

            // - node.appendChild() --> untuk menyimpan ke akhir dari sebuah element parent
                // menyimpan isi p baru ke dalam p baru
                // pBaru.appendChild(teksPBaru);// javascript ambilkan element pBaru  lalu tambahkan child di dalamnya teksPBaru
                // simpan PBaru di akhir Section a
                // const sectionA = document.getElementById('a');
                // sectionA.appendChild(pBaru);

            // - node.insertBefore() --> untuk menyimpan
                // const liBaru = document.createElement('li');
                // const teksLiBaru = document.createTextNode('Item Baru');
                // liBaru.appendChild(teksLiBaru);
                // const ul = document.querySelector('section#b ul');
                // const li2 = ul.querySelector('li:nth-child(2)');
                
                // ul.insertBefore(liBaru, li2);// panggil element parentnya lalu kita simpan sebelum element(node baru yang akan disimpan, lalu akan disimpan sebelum elemen apa? )


            // - parentNode.removeChild() --> menghapus
                // menghapus link --> harus tahu parentnya dan element yang akan di remove
                // const sectA = document.getElementById('a');
                // const link = document.getElementsByTagName('a')[0];
                // sectA.removeChild(link);

            // - parentNode.replaceChild() --> mengganti
                // mengganti paragraf 4  menjadi h2 judul baru --> harus tahu parentya --> pilih element yang akan diganti --> buat node dan isinya --> ganti element
                // const sectionB = document.getElementById('b');
                // const p4 = sectionB.querySelector('p');

                // const h2Baru = document.createElement('h2');
                // const teksH2Baru = document.createTextNode('Judul Baru!');
                // h2Baru.appendChild(teksH2Baru);

                // sectionB.replaceChild(h2Baru, p4);// panggil element parentnya lalu kita ganti dengan element ( node baru pengganti node lama, node lama )

            // - parentNode.append() -->
            // - parentNode.prepend() -->
            // - childNode.before() -->
            // - childNode.after() -->
            // - childNode.remove() -->
            // - childNode.replaceWith() -->

  // 4. DOM Events Events (Kejadian) != Even (Genap/Meskipun)
  // Event pada javascript merepresentasikan sebuah kejadian yang terjadi di dalam DOM.. kejadian tersebut bisa dilakukan oleh user,(Mouse Evenet, Keyboard Event, dll) ataupun dilakukan secara otomatis oleh API (animasi selesai dijalankan, halaman selesai di load, dll)

  // Cara 'mendengarkan' event
    // Event Handler (Mencampur adukkan file html dengan javascript dan memodifikasi htmlnya langsuung)
        // Inline HTML Attribute --> onEvent --> disimpan pada htmlnya
            // const p3 = document.querySelector('.p3');

            // function ubahWarnaP3(){
            //     p3.style.backgroundColor = "lightblue";
            // }
            // // lalu tambahkan attribut on<namaevent> pada tag html tersebut

        // Element Method
            // const p2 = document.querySelector('.p2');
            // p2.onclick = ubahWarnaP2;

            // function ubahWarnaP2(){
            //     p2.style.backgroundColor = "lightgreen";
            // }
            // // lalu tambahkan attribut on<namaevent> pada tag html tersebut


    // addEventListener(on<namaevent>, mw apa)
            
        // const p4 = document.querySelector('section#b p');
        // p4.addEventListener('click', function(){
        //     const ul = document.querySelector('section#b ul');

        //     const liBaru = document.createElement('li');
        //     const teksLiBaru = document.createTextNode('item baru')

        //     liBaru.appendChild(teksLiBaru); //memasukkan teks kedalam li
        //     ul.appendChild(liBaru); //memasukkan li ke dalam ul

        // });

        // ketika kita memakai Event Handler akan menimpa perubahan pertama 
        // const p3 = document.querySelector('.p3');
        // p3.onclick = function(){
        //     p3.style.backgroundColor = 'lightBlue';
        // }

        // p3.onclick = function(){
        //     p3.style.color = 'red';
        // }


        // ketika kita memakai addEventListener akan menjalankan semua perubahannya
        // const p3 = document.querySelector('.p3');
        // p3.addEventListener('mouseover',function(){
        //     p3.style.backgroundColor = 'lightBlue';
        // })

        // p3.addEventListener('mouseleave',function(){
        //     p3.style.backgroundColor = 'white';
        // })

    // daftar event :
        // Mouse Event (click, dblclick, mouseover, mouseleave, mouseenter, mouseup, wheel)
        // Keyboard Event (keydown, keyprress, keyup)
        // Resources Event --> ketika halaman diload
        // Focus Event 
        // View Event (resize,scroll)
        // Form Event (reset, submit)
        // css Animation & TRansition Event
        // Drag & Drop Event
        // dll

  // 5. DOM Traversal (Penelusuran DOM)
    // parentNode --> node : mengambil parentnya termasuk node enter (\n)
    // ParentElement --> element : mengambil parent mengabaikan node enter (\n)
    // nextSibling  --> node : mengambil adiknya / element setelahnya termasuk node enter (\n)
    // nextElementSibling --> element : mengambil adiknya / element setelahnya mengabaikan node enter (\n)
    // previousSibling --> node : mengambil kakaknya / element sebelumnya termasuk node enter (\n)
    // PreviousElementSibling --> element  : mengambil adiknya / element sebelumnya mengabaikan node enter (\n)