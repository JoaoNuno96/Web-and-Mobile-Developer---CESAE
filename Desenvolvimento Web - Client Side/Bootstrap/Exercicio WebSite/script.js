
//Clicar botao
//disparar acçao -> auto scroll 100px

//TRANSIÇÕES___________________________________________________________
//CADA ARGUMENTO REPRESENTA A DIRECÇÃO A TOMAR

function navegacao(direccao)
{
    if(direccao == "home")
    {
        window.scroll({
            top: 0,
            left: 100,
            behavior: "smooth",
          });
    }
    else if(direccao == "comecar")
    {
        window.scroll({
            top: 620,
            left: 100,
            behavior: "smooth",
          });
    }
    else if(direccao == "noticias")
    {
        window.scroll({
            top: 1350,
            left: 100,
            behavior: "smooth",
          });
    }
    else if(direccao == "fofoquices")
    {
        window.scroll({
            top: 2900,
            left: 100,
            behavior: "smooth",
          });
    }
    else if(direccao == "formulario")
    {
        window.scroll({
            top: 3550,
            left: 100,
            behavior: "smooth",
          });
    }
}

//TRANSIÇÕES DE BARRA LATERAL___________________________________________________________
//CADA ARGUMENTO REPRESENTA A DIRECÇÃO A TOMAR
//DIFERENTE Á ROTA DE NVAGEAÇAR, ESTA TEM UMA CLIQUE NO BOTAO DE CLOSE DA BARRA LATERAL

function navegacaoLateral(direccaoLateral)
{
    if(direccaoLateral == "home")
    {
        window.scroll({
            top: 0,
            left: 100,
            behavior: "smooth",
          });
        document.getElementById("closeButton").click();
    }
    else if(direccaoLateral == "comecar")
    {
        window.scroll({
            top: 620,
            left: 100,
            behavior: "smooth",
          });
        document.getElementById("closeButton").click();
        document.getElementById("botaoLateralHome").classList.add("active")
    }
    else if(direccaoLateral == "noticias")
    {
        window.scroll({
            top: 1350,
            left: 100,
            behavior: "smooth",
          });
        document.getElementById("closeButton").click();
    }
    else if(direccaoLateral == "fofoquices")
    {
        window.scroll({
            top: 2900,
            left: 100,
            behavior: "smooth",
          });
        document.getElementById("closeButton").click();
    }
    else if(direccaoLateral == "formulario")
    {
        window.scroll({
            top: 3550,
            left: 100,
            behavior: "smooth",
          });
        document.getElementById("closeButton").click();
    }

    else if(direccaoLateral == "contactos")
        {
            window.scroll({
                top: 4100,
                left: 100,
                behavior: "smooth",
              });
            document.getElementById("closeButton").click();
        }

}

//LOCAL STORAGE___________________________________________________________

//REGISTAR EM LOCALSTORAGE
function registarFofoca()
{
    var nome = document.getElementById("nomeHistoria").value;
    var texto = document.getElementById("historia").value;

    if(texto == "")
    {  
        //Elemento ALERT - PARA VERIFICAR OS DADOS
        var div = document.createElement("div");
        div.id = "alertaAmarelo";
        div.classList.add("alert");
        div.classList.add("alert-warning");
        div.classList.add("text-center");
        div.role = "alert";
        div.innerHTML = "Por favor, verifique se tem algum texto na historia."

        document.getElementById("formulario").appendChild(div);

    }
    else
    {
        //Elemento ALERT - SUCESSO NOS DADOS INSERIDOS
        var div = document.createElement("div");
        div.classList.add("alert");
        div.classList.add("alert-success");
        div.classList.add("text-center");
        div.role = "alert";
        div.innerHTML = "Sucesso, o item foi inserido na tabela de fofoquices!";

        document.getElementById("formulario").appendChild(div);
       
        var index = localStorage.length + 1;
        localStorage.setItem(index,texto);
    }

    //LIMPAR CAMPOS DO FORMULARIO
    document.getElementById("nomeHistoria").value = "";
    document.getElementById("historia").value = "";


}

//RECUPERAR DE LOCAL STORAGE TODAS AS FOFOCAS
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

//RELOAD PAGE
function recarregarWindow()
{
    window.location.reload();
}

//RETORNAR PARA PAGINA INDEX EM NOTICIAS
function retornarIndexNoticias()
{
    window.location.href="./index.html";
    window.scroll({
        top: 1350,
        left: 100,
        behavior: "smooth",
      });

}
