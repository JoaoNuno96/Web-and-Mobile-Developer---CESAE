
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

function registarFofoca()
{
    var texto = document.getElementById("historia").value;

    if(texto == "")
    {   
        //div row
        var divRow = document.getElementById("div");
        divRow.classList.add("row");

        //div col
        var divCol = document.createElement("div");
        divCol.classList.add("col");

        //Elemento alert
        var div = document.createElement("div");
        div.classList.add("alert");
        div.classList.add("alert-warning");
        div.role = "alert";
        div.innerHTML = "Por favor, verifique se tem algum texto na historia."


        document.getElementById("formulario").appendChild(div);
    }
    else
    {

    }

}
