//Exercicio 1
//Crie um script que despolete um alerta com a string “A turma de Web é dinâmica e tem as
//características essenciais para brilhar numa empresa”. Na consola deve imprimir;
//Primeira ocorrência da letra “U” (posição).
//Primeira ocorrência da letra “X”: (posição).
//Tamanho da string.

document.getElementById("botaoAprender").addEventListener("click",loadWhenNeeded);

function loadWhenNeeded()
{
    let text = "A turma de Web é dinâmica e tem as características essenciais para brilhar numa empresa";
    alert(text);

    document.getElementById("texto1").innerHTML = `Primeira ocorrência da letra “U” - ${verificarOcorrencia("u",text)}`;
    document.getElementById("texto2").innerHTML = `Primeira ocorrência da letra “X” - ${verificarOcorrencia("x",text)}`;

    function verificarOcorrencia(letter,phrase)
    {
        if(phrase.indexOf(letter) != "-1")
        {
            return phrase.indexOf(letter);
        }
        else
        {
            return "Não contem a letra na string";
        }
    }
}