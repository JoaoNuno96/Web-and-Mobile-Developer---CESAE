function exibirLista()
 {
    let codigo = "fim";

let listaCompras = [];

while(codigo == "fim")
{
    let add = prompt("Digite o Item a adicionar no carrinho:");

    if(add == "fim")
    {
        codigo = "desligar";
    }
    else
    {
        listaCompras.push(add);
    }
}
listaCompras.pop();
console.log(listaCompras);

}

function rant(message)
{
    for(var i=1; i<=3;i++)
    {
        console.log(i,message.toUpperCase());
    }
}

