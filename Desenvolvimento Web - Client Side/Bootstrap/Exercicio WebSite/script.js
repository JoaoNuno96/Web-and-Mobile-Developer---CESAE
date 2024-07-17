
//Clicar botao
//disparar acçao -> auto scroll 100px

//COMEÇAR TRANSITAR PARA QUESTOES
function comecar()
{
    window.scroll({
        top: 620,
        left: 100,
        behavior: "smooth",
      });

}

function noticias()
{
    window.scroll({
        top: 1150,
        left: 100,
        behavior: "smooth",
      });
}

function fofoquices()
{
    window.scroll({
        top: 2650,
        left: 100,
        behavior: "smooth",
      });
}

function voltar()
{
    window.scroll({
        top: 0,
        left: 100,
        behavior: "smooth",
      });
}

function formulario()
{
    window.scroll({
        top: 3400,
        left: 100,
        behavior: "smooth",
      });
}

function registarFofoca()
{
    var nome = document.getElementById("nomeHistoria").value;
    var texto = document.getElementById("historia").value;

    if(texto == "")
    {  
        //Elemento alert
        var div = document.createElement("div");
        div.classList.add("alert");
        div.classList.add("alert-warning");
        div.classList.add("text-center");
        div.role = "alert";
        div.innerHTML = "Por favor, verifique se tem algum texto na historia."

        document.getElementById("formulario").appendChild(div);
    }
    else
    {
       
        var index = localStorage.length + 1;
        localStorage.setItem(index,texto);
    }

    document.getElementById("nomeHistoria").value = "";
    document.getElementById("historia").value = "";

}

function receberFofocas()
{
    var arr = [];

    //ciclo para adicionar texto de local storage no arr
    for(var o = 1; o <= localStorage.length; o++)
    {
        arr.push(localStorage.getItem(o));
    }

    //ciclo de arr com mensagens string do localstorage
    for(var i in arr)
    {
        //criar elemento de table row e table data

        var tr = document.createElement("tr");
        var td = document.createElement("td");

        td.innerHTML = arr[i];

        tr.appendChild(td);

        document.getElementById("tabela").appendChild(tr);

    }

}

window.addEventListener("load",function(){
    receberFofocas();
})
