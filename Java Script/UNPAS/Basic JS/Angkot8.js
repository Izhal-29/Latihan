function Angkot (sopir, trayek, penumpang, kas){
  this.sopir = sopir;
  this.trayek = trayek;
  this.penumpang = penumpang;
  this.kas = kas;

  this.penumpangNaik = function (namPenumpang){
    this.penumpang.push(namPenumpang);
    return this.penumpang;
  }

  this.penumpangTurun = function (namaPenumpang, bayar){
    if(this.penumpang.length === 0){
      alert ('angkot masih kosong');
      return false;
    }
    for (let i = 0; i < this.penumpang.length; i++){
      if (this,penumpang[i] == namaPenumpang){
        this.penumpang[i] = undefined;
        this.kas += bayar;
        return this.penumpang;
      }
    }

  }
}

let Angkot1 = new Angkot('Rizhal',['Cicahem','Cibiru'],[],0);
let Angkot2 = new Angkot('Tom Cruise',['Antapani','Ciroyom'],[],0);