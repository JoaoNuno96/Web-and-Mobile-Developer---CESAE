function multiply(valor1,valor2)
{
    return valor1 * valor2;
}

function isShortsWeather(temperature)
{
    if(temperature > 25)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function lastElement(arry)
{
    return arry[arry.length-1];
}

function capitalize(arg)
{
    let novoArg = arg.replace(arg[0],arg[0].toUpperCase());
    return novoArg;
}

function sumArray(arr)
{
    let sum = 0;

    for(var i in arr)
    {
        sum += arr[i];
    }

    return sum;
}

function returnDay(day)
{
    if(day >= 1 && day <= 7)
    {
        switch(day)
        {
            case 1: return "Segunda"; break;
            case 2: return "Terca"; break;
            case 3: return "Quarta"; break;
            case 4: return "Quinta"; break;
            case 5: return "Sexta"; break;
            case 6: return "Sabado"; break;
            case 7: return "Domingo"; break;
        }
    }
    else
    {
        return "null";
    }
}

console.log(returnDay(7));