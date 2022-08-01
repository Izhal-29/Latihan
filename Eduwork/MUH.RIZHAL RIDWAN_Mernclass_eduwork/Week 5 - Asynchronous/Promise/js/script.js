//deklarasi Variabel kategori && Search

        //Button pilihan kategori berita pake dropdown//
        

const headlineDropdown = document.getElementById("headline");
const sportDropdown = document.getElementById("sport");
const businessDropdown = document.getElementById("business");
const entertainmentDropdown = document.getElementById("entertainment");
const kesehatanlDropdown = document.getElementById("kesehatan");
const technologyDropdown = document.getElementById("technology");


        //search
const searchbtn = document.getElementById("btnsearch");//button search

const newsQuery= document.getElementById("find");//input text pencarian

const newsType= document.getElementById("kategori");//sebagai key kategori atau type/jenis berita 


     //ruang untuk menampilkan berita
const newsdetails= document.getElementById("berita");

//--------END deklarasi Variabel kategori && Search-------



//Deklarasi variabel penampung Array

var newsDataArray = [];

//END Deklarasi variabel penampung Array




// source API nya

const API_KEY ="433d6559a40f4b37822ee501e52d8e2b"

const HEADLINES_NEWS ="https://newsapi.org/v2/top-headlines?country=id&apiKey=";
const GENERAL_NEWS = "https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=";
const SPORT_NEWS = "https://newsapi.org/v2/top-headlines?country=id&category=sports&apiKey=";
const BUSINESS_NEWS = "https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=";
const ENTERTAINMENT_NEWS = "https://newsapi.org/v2/top-headlines?country=id&category=entertainment&apiKey=";
const TECHNOLOGY_NEWS = "https://newsapi.org/v2/top-headlines?country=id&category=technology&apiKey=";
const SEARCH_NEWS = "https://newsapi.org/v2/everything?q=";

//END source API nya




//Menampilkan Headline sebagai default berita ketika masuk halaman 
window.onload = function(){
    newsType.innerHTML = "<h4>Sedang Ramai Di Masyarakat</h4>";

    fetchHeadLineNews();
};

//END Menampilkan Headline sebagai default berita ketika masuk halaman 



//event listener pada button kategori dan Search

kesehatanlDropdown.addEventListener("click",function(){
    newsType.innerHTML = "<h4>Kesehatan Anda</h4>";
    fetchGeneralNews();

});



headlineDropdown.addEventListener("click",function(){

    
    newsType.innerHTML = "<h4>Headline News</h4>";
    fetchHeadLineNews();

});





sportDropdown.addEventListener("click",function(){
    newsType.innerHTML = "<h4>Berita Olahraga</h4>";
    fetchSportNews();

});


businessDropdown.addEventListener("click",function(){
    newsType.innerHTML = "<h4>Berita Bisnis</h4>";

    fetchBusinessNews();

});



entertainmentDropdown.addEventListener("click",function(){
    newsType.innerHTML = "<h4>Berita dalam Hiburan</h4>";

    fetchEntertainmentNews();

});



technologyDropdown.addEventListener("click",function(){
    newsType.innerHTML = "<h4>Pencarian Kabar</h4> +";

    fetchTechnologyNews();

});







searchbtn.addEventListener("click",function(){
    newsType.innerHTML="<h4>Pencarian Kabar"+newsQuery.value+"</h4>";

    fetchNewsQuery();

});


//END event listener pada button kategori dan Search





//Define function 

const fetchGeneralNews = async() => {
    const response = await fetch (GENERAL_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
    }else{
        //error

        alert(response.status,response.statusText);
        
    }

    displayNews();
    
}


const fetchHeadLineNews = async() => {
    const response = await fetch (HEADLINES_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();
    
}







const fetchSportNews = async() => {
    const response =await fetch (SPORT_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();
    
}


const fetchBusinessNews = async() => {
    const response =await fetch (BUSINESS_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();
    
}


const fetchEntertainmentNews = async() => {
    const response =await fetch (ENTERTAINMENT_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        console.log(myJson);
        newsDataArray = myJson.articles;
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();
    
}


const fetchTechnologyNews = async() => {
    const response =await fetch (TECHNOLOGY_NEWS + API_KEY);
    newsDataArray = [];
    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();
    
}





const fetchNewsQuery = async () => {

    if(newsQuery.value == null)
    
        return;


    const response = await fetch(SEARCH_NEWS+ encodeURIComponent(newsQuery.value)+"&apikey="+API_KEY);
    newsDataArray = [];

    if(response.status >= 200 && response.status < 300 ){
        const myJson = await response.json();
        newsDataArray = myJson.articles;
        
    }else{
        //error
        alert(response.status,response.statusText);
        // console.log(response.status,response.statusText);
    }

    displayNews();

    

}



//END Define function 





//Function Untuk Menampilkan Berita berupa card pada halaman

function displayNews(){


    newsdetails.innerHTML = "";

    if (newsDataArray.length==0){
        newsdetails.innerHTML = "<h5>Tidak Menemukan Data</h5>";
        return;
    }

    newsDataArray.forEach(news => {

        var date = news.publishedAt.split("T");



        var col = document.createElement('div');
        col.className="col-sm-12 col-md-4 col-lg-3 p-2 card " ;
        col.style="background-color:#0909b9;";

        var card = document.createElement('div');
        card.className="p-2 bg-dark";

        var image = document.createElement('img');
        image.setAttribute("height","matchparnt");
        image.setAttribute("width","100%");
        image.src=news.urlToImage;

        var cardBody = document.createElement('div');

        var newsHeading = document.createElement('h5');
        newsHeading.className="card-title";
        newsHeading.innerHTML=news.title;


        var dateHeading = document.createElement('h6');
        dateHeading.className="text-warning";
        dateHeading.innerHTML=date[0];


        var deskripsi = document.createElement('p');
        deskripsi.className="text-light";
        deskripsi.innerHTML=news.description;
        

        var link = document.createElement('a');
        link.className = "btn text-white ";
        link.style = "background-color:#e6880f;";
        link.setAttribute("target","_blank");
        link.href=news.url;
        link.innerHTML="Read More";

        cardBody.appendChild(newsHeading);
        cardBody.appendChild(dateHeading);
        cardBody.appendChild(deskripsi);
        cardBody.appendChild(link);


        card.appendChild(image);
        card.appendChild(cardBody);

        col.appendChild(card);

        newsdetails.appendChild(col);


    });

}

//END Function Untuk Menampilkan Berita berupa card pada halaman