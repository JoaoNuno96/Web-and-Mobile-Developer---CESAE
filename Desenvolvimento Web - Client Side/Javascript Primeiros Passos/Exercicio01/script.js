
function calcular(operator)
{
    let valorA = parseInt(document.getElementById("valorA").value);
    let valorB = parseInt(document.getElementById("valorB").value);
    
    let res;

    if(operator === "+")
    {
        res = valorA + valorB;
    }
    if(operator === "-")
    {
        res = valorA - valorB;
    }
    if(operator === "*")
    {
        res = valorA * valorB;
    }
    if(operator === "/")
    {
        res = valorA / valorB;
    }

    document.getElementById("resultado").innerHTML = "Resultado: " + res;

    setTimeout(function(){
        window.location.reload();
        document.getElementById("valorA").value = "";
        document.getElementById("valorB").value = "";
        document.getElementById("operadorAritmetico").value = "";
    },3000);
}



//funçao comparar tipos de dados que recebe
function dataTypeCompare()
{
    let op = document.getElementById("operadorAritmetico").value;

    if(op === "somar")
    {
        calcular("+");
    }

    if(op === "subtracao")
    {
        calcular("-")
    }
    
    if(op === "multiplicacao")
    {
        calcular("/")
    }
    
    if(op === "divisao")
    {
        calcular("*")
    }
}