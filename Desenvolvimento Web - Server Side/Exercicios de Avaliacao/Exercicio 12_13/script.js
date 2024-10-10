//Exercicio 12,13

    let l = document.getElementById("square");
    let lista = ["Lógica de Código JS","Funções","DOM","Eventos"];

//Quando o documento carrega cria titulo,  linha separacao, lista(na tela), e os devido botoes
addEventListener("DOMContentLoaded",function(){

    //CRIAR TITULO
    let title = document.createElement("h1");
    title.classList.add("display-6");
    title.innerText = "O que já aprendi em JS:"

    //CRIAR LINHA SEPARACAO
    let hr = document.createElement("hr");
    hr.style.border = "1px solid white";

    //CRIAR LISTA
    let ul = document.createElement("ul");
    ul.id = "listaConteudo";
    ul.classList.add("list-group");

    //CRIAR BOTAO COM marcacao -aprendido (somente se necessario)
    let botao = document.createElement("button");
    botao.classList.add("btn");
    botao.classList.add("btn-primary");
    botao.innerText = "Aprendido";
    botao.addEventListener("click",verificarMarcarAprendido);

    for(var i in lista)
    {
        let li = document.createElement("li");
        li.classList.add("list-group-item");
        li.innerText = lista[i];
        ul.appendChild(li);
    }

    l.appendChild(title);
    l.appendChild(hr);
    l.appendChild(ul);
    l.appendChild(botao);

});

//Funcao verificar se pode ser marcado com aprendido
function verificarMarcarAprendido()
{
    let listElements = document.getElementsByClassName("list-group-item");

        for(let i in lista)
        {
            if(!lista[i].toString().includes("-aprendido"))
            {
                lista[i] += "-aprendido";
                listElements[i].innerText += "-aprendido";
            }
            
        }
}

//Funcao para reescrever outro item na lista
document.getElementById("botaoAprender").addEventListener("click",function(){

    let listaCont = document.getElementById("listaConteudo");

    let item = prompt("Digite o que aprendeu de novo:");
    lista.push(item);

    let li = document.createElement("li");
    li.classList.add("list-group-item");
    li.innerText = item;

    listaCont.appendChild(li);


})




