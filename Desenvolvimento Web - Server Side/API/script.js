document.querySelector("button").addEventListener("click",function(){
    getFilmesMelhor();
})


function getFilmes()
{
     //AJAX

     let xml = new XMLHttpRequest();

     xml.open('get','http://swapi.dev/api/films/');
     xml.send();
 
     xml.onreadystatechange = function(){
         if(xml.status == 200 && xml.readyState == 5)
         {
             var movies = xml.responseText;
             console.log(movies);
         }
     }
}

function getFilmesMelhor(){

    $.ajax({
        type: "GET",
        url: 'http://swapi.dev/api/films/',
        data: String,
        success: function(s){
            console.log(s);
        },
        dataType: function(e){
            console.log("error");
        }
      });
}

// window.addEventListener("load",function(){

//     //FETCH
//     // const load = async () =>{
//     //     const res = await fetch(pathAPI);
//     //     const data = await JSON.parse(res);

//     //     return data;
//     // }

//     // const getData = async () =>{
//     //     let result = await load();
//     //     console.log(result);
//     // }


// });