// cara untuk membuat Object pada javascript
  // 1. Object Literal
    let mahasiswa1 = {
      nama : 'Rizhal',
      energi : 10,
      makan : function (porsi){
        this.energi = this.energi + porsi;
        console.log(`Halo ${this.nama}, selamat makan!`);
      }
    }

    let mahasiswa2 = {
      nama : 'Doddy',
      energi : 20,
      makan : function (porsi){
        this.energi = this.energi + porsi;
        console.log(`Halo ${this.nama}, selamat makan!`);
      }
    }



  // 2. function Declaration
    // dengan cara ini akan disimpan ke memory setiap kali dipanggil
    function mahasiswa(nama, energi){
      let mahasiswa = {};
      mahasiswa.nama = nama;
      mahasiswa.energi = energi;

      mahasiswa.makan = function(porsi){
        this.energi += porsi;
        console.log(`Halo ${this.nama}, selamat makan!`);
      }

      mahasiswa.main = function(jam){
        this.energi -= jam
        console.log(`Halo ${this.nama}, Selamat bermain!`);
      }

      return mahasiswa;// wajib ada
    }

    let mhs1 = mahasiswa('Rizhal', 10);
    let mhs2 = mahasiswa('Doddy', 20);



  // 3. Constructor Function (Keyword new)
    function mahasiswaCons(nama, energi){
      this.nama = nama;
      this.energi = energi;

      this.makan = function(porsi){
        this.energi += porsi;
        console.log(`Halo ${this.nama}, selamat makan!`);
      }

      this.main = function(jam){
        this.energi -= jam
        console.log(`Halo ${this.nama}, Selamat bermain!`);
      }
    }

    let mhs3 = new mahasiswaCons('Rizhal', 10);
    let mhs4 = new mahasiswaCons('Doddy', 20);




  // 4. Object.create
    // Dengan cara ini methodnya akan dipanggil sekali ke dalam memory
    const methodMahasiwa = {
      makan : function(porsi){
        this.energi += porsi;
        console.log(`Halo ${this.nama}, selamat makan!`);
      },

      main : function(jam){
        this.energi -= jam
        console.log(`Halo ${this.nama}, Selamat bermain!`);
      },

      tidur : function(jam){
        this.energi += jam * 2;
        console.log(`Halo ${this.nama}, Selamat tidur!`);
      }
    }

    function mahasiswaOc(nama, energi){
      let mahasiswa = Object.create(methodMahasiwa);// dengan menggunakan Object.create kita tidak usah mendefenisikan setiap method yang ada dalam methodMahasiswa (makan,main,tidur)
      mahasiswa.nama = nama;
      mahasiswa.energi = energi;

      return mahasiswa;// wajib ada
    } 

    let mhs5 = mahasiswaOc('Rizhal', 10);
    let mhs6 = mahasiswaOc('Doddy', 20);


    
  //5. versi Prototype Inhairitens
    function mahasiswaPrototype(nama, energi){
      this.nama = nama;
      this.energi = energi;
    } 

    mahasiswaPrototype.prototype.makan = function(porsi){
      this.energi += porsi;
      return `Halo ${this.nama}, selamat makan!`;
    }

    mahasiswaPrototype.prototype.main = function(jam){
      this.energi -= jam;
      return `Halo ${this.nama}, selamat bermain!`;
    }

    mahasiswaPrototype.prototype.tidur = function(jam){
      this.energi -= jam * 2;
      return `Halo ${this.nama}, selamat tidur!`;
    }

    let mhs7 = new mahasiswaPrototype('Rizhal', 10);
    let mhs8 = new mahasiswaPrototype('Doddy', 20);



    
  //6. versi Class
    class mahasiswaClass{
      constructor(nama, energi){
        this.nama = nama;
        this.energi = energi;
      }

      makan(porsi){
        this.energi += porsi;
        return `Halo ${this.nama}, selamat makan!`;
      }

      main(jam){
        this.energi -= jam;
        return `Halo ${this.nama}, selamat bermain!`;
      }

      tidur(jam){
        this.energi -= jam * 2;
        return `Halo ${this.nama}, selamat tidur!`;
      }
    }

    let mhs9 = new mahasiswaClass('Rizhal', 10);
    let mhs10 = new mahasiswaClass('Doddy', 20);

