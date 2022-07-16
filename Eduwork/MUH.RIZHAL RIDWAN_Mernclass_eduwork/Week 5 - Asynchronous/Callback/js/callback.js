
$.ajax({
  url       : "https://jsonplaceholder.typicode.com/users",
  type      : "GET",
  dataType  : "json",
  data      : {get_param : 'value'},
  success   : function(data){

    jmlData = data.length;

    buatTabel = "";

    for(a = 0; a < jmlData; a++){

      buatTabel += "<tr align='center'>"
                + "<td>" + data[a]["id"] + "</td>"
                + "<td>" + data[a]["name"] + "</td>"
                + "<td>" + data[a]["username"] + "</td>"
                + "<td>" + data[a]["email"] + "</td>"
                + "<td>" + data[a]["address"]["street"] +", "+ data[a]["address"]["suite"] +", "+ data[a]["address"]["city"] + "</td>"
                + "<td>" + data[a]["company"]["name"] + "</td>"
                + "</tr>"
    }

    document.getElementsByTagName("table")[0].innerHTML += buatTabel;

  }

})