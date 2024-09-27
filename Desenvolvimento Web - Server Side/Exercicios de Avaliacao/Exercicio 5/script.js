//Exercicio 5
// O tempo está incerto e eu não sei se deva vestir calções ou calças, ajude-me a decidir. Escreva
// uma função chamada isShortsWeather que aceite um argumento a que podemos chamar
// temperature. Se a temperatura for maior que 25, imprime verdadeiro. Se não, imprime falso.

function isShortsWeather()
{
    let temperatura = parseInt(document.getElementById("valoresEnviados").value);

    if(temperatura > 25)
    {
        document.getElementById("textPresented").innerHTML = "true - Está bom tempo de Verão";
    }
    else
    {
        document.getElementById("textPresented").innerHTML = "false - Está tempo de Inverno";
    }
}