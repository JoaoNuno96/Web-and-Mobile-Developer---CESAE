//Exercicio 7
// Escreva uma função chamada sumArray que aceite um array de números. A função deve imprimir a soma de todos os números do array.



document.getElementById("button").addEventListener("click",()=>{

    let itensRecuperados = document.getElementById("send").value;
    let itensParaSomar = itensRecuperados.split(",");

    document.getElementById("result").innerHTML = "Resultado: " + sumArray(itensParaSomar)

})

function sumArray(arrayParam)
{
    let soma = 0;

    for(var i in arrayParam)
    {
        soma += parseInt(arrayParam[i]);
    }
    return soma;

}