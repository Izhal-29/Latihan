
class Table{
  constructor(init){
    this.init = init;
  }

  createHeader(data){
    let open ="<thead><tr>";
    let close="</tr></thead>";
    data.forEach((d) => {
      open += `<th>${d}</th>`;
    });

    return open + close;
  }

  createBody(data){
    let open = "<tbody>";
    let close = "</tbody>";

    data.forEach((d) => {
      open += `
        <tr>
            <td>${d[0]}</td>
            <td>${d[1]}</td>
            <td>${d[2]}</td>
            <td>${d[3]}</td>
            <td>${d[4]}</td>
        </tr>
      `;
    });

    return open + close;
  }

  render(element){
    let table = "<table class='table table-dark table-hover'>" + this.createHeader(this.init.columns) + this.createBody(this.init.data) + "</table>";
    element.innerHTML = table;
  }

}

const table = new Table({
  columns : ["Nama", "Email", "Phone Number", "Kelas", "ALamat"],
  data : [
    ["Adi", "adi@gmail.com","086547783336","Frontend Developer","Jl. Gagak"],
    ["Ahmad", "ahmad@gmail.com","081345678222","Backend Developer","Jl. Bangau"],
    ["Rudi", "rudi@gmail.com","085278345689","Frontend Developer","Jl. Garuda"],
    ["Yani", "yani@gmail.com","081387265398","Backend Developer","Jl. Elang"],
    ["Lasmi", "lasmi@gmail.com","083039363983","Digital Marketing","Jl. Perkutut"],
    ["Jumsiani", "jumsiani@gmail.com","085289764654","Frontend Developer","Jl. Rajawali"],
    ["Mursidin", "mursidin@gmail.com","085348271994","Backend Developer","Jl. Puyu"],
    ["Mika", "mika@gmail.com","082547353883","Backend Developer","Jl. Pipit"],
    ["Sria", "sria@gmail.com","081654746723","Digital Marketing","Jl. Kenari"],
    ["Yuyun", "yuyun@gmail.com","082715375111","Backend Developer","Jl. Kakaktua"],
    ["Vita", "vita@gmail.com","0825666444888","Digital Marketing","Jl. Merpati"],
    ["Istiqomah", "istiqomah@gmail.com","081773365625","Frontend Developer","Jl. Hantu"],
    ["Rahmi", "rahmi@gmail.com","081536753717","Backend Developer","Jl. Cendrawasih"],
    ["Hendra", "hendra@gmail.com","0852872834366","Frontend Developer","Jl. Jalak"],
    ["Ridwan", "ridwan@gmail.com","0829674664674","Digital Marketing","Jl. Koibri"],
    ["Wawan", "wawan@gmail.com","0818763784883","Backend Developer","Jl. Kacer"],
    ["Rista", "rista@gmail.com","0859383628229","Digital Marketing","Jl. Murai Batu"],
    ["Novi", "novi@gmail.com","085383243113","Frontend Developer","Jl. Lovebird"],
    ["Eko", "eko@gmail.com","08535342232323","Digital Marketing","Jl. Beo"],
    ["Sulkifli", "sulkifli@gmail.com","08535342242242","Backend Developer","Jl. Walet"],
  ]
})
const tablejs = document.getElementById("table-gridjs");
table.render(tablejs)