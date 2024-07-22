// VARIAVEIS GLOBAIS
var valorFinal;
var valorA;
var valorB;
var op;
var lista = []; 
var listaValores = [];

//GUARDAR DADOS NO ARRAY GLOBAL LISTA
function apresentarTexto(btn)
{
    document.getElementById("textoR").value += btn.value + " ";
    lista.push(document.getElementById("textoR").value);
}

//CLEAR
function deleteAll()
{
    document.getElementById("textoR").value = "";
}

//FUNÇAO PARA REALIZAR CALCULO
function calcular(v,o,vb)
{
    if(o === "+")
    {
        valorFinal = v + valorB;
    }
    if(o === "-")
    {
        valorFinal = v - vb;
    }
    if(o === "*")
    {
        valorFinal = v * vb;
    }
    if(o === "/")
    {
        valorFinal = v / vb;
    }
}

//FUNÇAO PARA APRESENTAR VALOR NO INPUT
function apresentarValor()
{   
    listaValores = lista[2].split(" ");
    
    valorB = parseInt(listaValores[0]);
    op = listaValores[1];
    valorA = parseInt(listaValores[2]);

    calcular(valorA,op,valorB);

    document.getElementById("textoR").value = "";
    document.getElementById("textoR").value = valorFinal;

    //Eliminar automaticamente
    setTimeout(function(){
        window.location.reload();
        document.getElementById("valorA").value = "";
        document.getElementById("valorB").value = "";
        document.getElementById("operadorAritmetico").value = "";
    },3000);

}

function processInfo()
{
    lista.unshift();
    lista.unshift();
}
