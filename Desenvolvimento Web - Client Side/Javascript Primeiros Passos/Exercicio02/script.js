let msg = " ";
let fbResp = [];
let soma = 0;
let lastItem;

function numerosParesCiclo(inicio,fim)
{
    for(let i = inicio; i<fim;i++)
    {
        if(i % 2 === 0)
        {
            msg += i + ", ";
        }
    }
    console.log(msg);
}

//APRESENTAR NUMEROS PARES
function apresentarValor()
{   
    let inicio = parseInt(document.getElementById("valorA").value);
    let fim = parseInt(document.getElementById("valorB").value);

    numerosParesCiclo(inicio,fimFinal);
    document.getElementById("resultado").innerText = msg;
}

//APRESENTAR NUMEROS FIBONACCI
function fibonacci()
{
    let inicio = parseInt(document.getElementById("valorA").value); 
    let fim = parseInt(document.getElementById("valorB").value); 

    cicloFinobacci(inicio,fim);
    let fibonacciFiltrado = fbResp.filter(function(d){return d < 10});

    document.getElementById("resultado").innerHTML = fibonacciFiltrado.toString();
   
}

function cicloFinobacci(inicio,ff)
{
    fbResp[0] = 1;
    fbResp[1] = 1;
    fbResp[2] = 2;

    for(let i = inicio; i < ff; i++)
    {
        soma = fbResp[i + 1] + fbResp[i + 2];
        fbResp.push(soma);
    }

}




