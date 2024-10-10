//Exercicio 4
// Escreva uma função chamada multiply que receba dois valores e imprima na consola o
// resultado da multiplicação dos mesmos



//funcao que retorna a multiplicacao dos parametros(aceita qualquer numero de parametros)
function multiply()
{
    let valores = document.getElementById("valoresEnviados").value;
    let valoresDivididos = valores.split(",");

    let value = 1;

    for(var i in valoresDivididos)
    {
        value *= valoresDivididos[i];
    }

    document.getElementById("textPresented").innerText = "O valor da multiplicação do elemento é " + value;
}
