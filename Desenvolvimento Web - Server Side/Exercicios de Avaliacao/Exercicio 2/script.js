//Exercicio 2
//Defina um array chamado myWishList onde coloque a lista das prendas de Natal que pretende
//receber. Usando um ciclo, itere o array e mostre na consola a lista de prendas.
//No final indique quantas prendas tem a lista.

let myWishList = [];

//Função guardar Items na Lista
function guardarItem()
{
    //Buscar dados
    let item = prompt("Digite a prenda para adicionar:");

    //Add Array
    myWishList.push(item);

    //Add Screen
    let novo = document.createElement("li");
    novo.classList.add("list-group-item");
    novo.innerText = item;

    document.getElementById("listaNatal").appendChild(novo);

    //Increment Nr
    document.getElementById("add").innerText = myWishList.length.toString();


}

//Função para apresentar a Lista
function apresentarLista()
{
    console.log("WISH LIST: ");
    for(var i in myWishList)
    {
        console.log(`Item ${i} : ${myWishList[i]} `);
    }
}

