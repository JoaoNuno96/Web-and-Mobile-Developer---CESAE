//Exercicio 3
// Tranforme os items da lista em objectos com as propriedades: nome e preço. Usando os
// métodos dos arrays, crie um novo array com as prendas cujo valor é inferior a 20.

let lista = ["prenda1","prenda2","prenda3","prenda4","prenda5","prenda6","prenda7","prenda8"];
let random;
let listaComPreço = [];
let listaComPrecoMenorQueVinte;

for(let i in lista)
{
    let item = document.createElement("li");
    item.classList.add("list-group-item");
    item.innerText = lista[i];
    document.getElementById("lista").appendChild(item);

}

//Funçao que converte strings de outro array em objecto com proppriedades nome e preco, (gera randomicamente o preco) e guarda noutro array;
function arrayToAnother()
{
    for(let i in lista)
    {
        random = Math.ceil(Math.random() * 30);

        let product = new Object();
        product.nome = lista[i];
        product.preco = random;

        //add array
        listaComPreço.push(product);

        //addScreen

        let item = document.createElement("li");
        item.classList.add("list-group-item");
        item.innerText = product.nome + ", " + product.preco;
        document.getElementById("listaComPreco").appendChild(item);

    }

    document.getElementById("textPresented").innerHTML = `Existem ${listaMaisBarata()} artigos abaixo de 20€`;
}


//funçao que filtra o array por preco menor que 20;
function listaMaisBarata()
{
    listaComPrecoMenorQueVinte = listaComPreço.filter(function(d){return d.preco < 20});
    if(listaComPrecoMenorQueVinte.length == null)
    {
        return "0";
    }
    else
    {
        return listaComPrecoMenorQueVinte.length;
    }
}






