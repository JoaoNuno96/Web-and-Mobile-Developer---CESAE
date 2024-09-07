package org.kotlinlang.play;

fun main()
{
    /** COMENTARIO
    Exercicio 1
    Escreva um programa onde declara duas variáveis e atribui um valor à sua escolha, seguidamente,
    apresente a soma desses dois valores. Exemplo de execução:

    var b = 10;
    var c = 20;
    var resultado = b + c;

    println(resultado);
    COMENTARIO */


    /** COMENTARIO
     * Exercio 2
     * Escreva um programa que determine a média aritmética de um conjunto de 3 valores escolhidos por
    si. Tendo em consideração os valores introduzidos, deverá também apresentar a média ponderada
    considerando as seguintes ponderações: 20%, 30%, 50%.


    var nota1 = 10;
    var nota2 = 12;
    var nota3 = 15;

    var resultado = ((nota1*0.2) + (nota2 * 0.3) + (nota3 * 0.5)) / (0.2 + 0.3 + 0.5)
    println(resultado)
    COMENTARIO*/

    /** COMENTARIO
    Exercicio 3
    Escreva um programa que leia dois valores inteiros e os armazene na variáveis valor1 e valor2. Permute
    o valor das variáveis e apresente o resultado. De seguida, verifique se consegue efetuar esta troca sem
    criar variáveis adicionais.


    var valor1 = 20;
    var valor2 = 30;

    valor1 = (valor2 * valor1) / valor1;
    valor2 = (valor2 + valor2) / (valor2 / 10);

    println("Valor 1 = " + valor1);
    println("Valor 2 = " + valor2);
    COMENTARIO*/

    /** COMENTARIO
    Exercicio 4
    Escreva um programa que requisite ao utilizador o preço de 3 produtos adquiridos. Apresente o valor
    a pagar, considerando que deverá ter um desconto de 10% sobre o total dos produtos.

    var produto1 = 10
    var produto2 = 20
    var produto3 = 30

    var somaPreco = produto1 + produto2 + produto3
    var resultado = somaPreco - somaPreco*0.1

    println(resultado);
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 5
    Declare duas variáveis inteiras, e apresente na consola a maior das duas.



    var valor1 = 10;
    var valor2 = 20;

    if(valor1>valor2)
    {
    println(valor1)
    }
    else
    {
    println(valor2)
    }
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 6
    Crie um programa que mostre o menor de três números inteiros.

    var flagVarible = true;
    var index = 0;

    var numeroInteiro1 = 10;
    var numeroInteiro2 = 20;
    var numeroInteiro3 = 30;



    while(flagVarible)
    {
    if(numeroInteiro1>index)
    {
    index = numeroInteiro1;
    }

    if(numeroInteiro2>index)
    {
    index = numeroInteiro2;
    }

    if(numeroInteiro3>index)
    {
    index = numeroInteiro3;
    }
    flagVarible = false;
    }

    println(index);
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 7
    Escreva um programa que com 3 números, seguidamente deve colocar os números no ecrã por ordem
    crescente.


    var valor1 = 70;
    var valor2 = 4;
    var valor3 = 34;

    if(valor1 > valor2 && valor1 > valor3)
    {
        if(valor2 > valor3)
        {
            var result = valor3.toString() + " " + valor2.toString() + " " + valor1.toString();
            println(result);
        }
        else
        {
            var result2 = valor2.toString() + " " + valor3.toString() + " " + valor1.toString();
            println(result2);
        }
    }

    if(valor2 > valor1 && valor2 > valor3)
    {
        if(valor1 > valor3)
        {
            var result3 = valor3.toString() + " " + valor1.toString() + " " + valor2.toString();
            println(result3);
        }
        else
        {
            var result4 = valor1.toString() + " " + valor3.toString() + " " + valor2.toString();
            println(result4);
        }
    }

    if(valor3 > valor1 && valor3 > valor2)
    {
        if(valor2 > valor1)
        {
            var result5 = valor1.toString() + " " + valor2.toString() + " " + valor3.toString();
            println(result5);
        }
        else
        {
            var result6 = valor2.toString() + " " + valor1.toString() + " " + valor3.toString();
            println(result6);
        }
    }
    COMENTARIO*/
    /**COMENTARIO
    Exercicio 8
    Faça um programa que imprima os números no intervalo de 1 a 250 inclusive.


    var index = 1;

    for(index in 1..250)
    {
        println(index);
    }
    COMENTARIO*/
    /**COMENTARIO
    Exercicio 9
    Faça um programa que imprima os números pares no intervalo de 1 a 400 inclusive.


    for(index in 1..400)
    {
        if(index % 2 == 0 || index == 1)
        {
            println(index);
        }
    }
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 10
    Faça um programa que imprima os números ímpares no intervalo de 531 a 750 inclusive.


    var index = 531;

    for(index in 531..750)
    {
        if(index % 2 != 0 || index == 750)
        {
            println(index);
        }
    }
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 11
    Faça um programa que imprima os números inteiros de 1 a 100 inclusive, e no final imprima também o
    valor do seu somatório.


    var index = 1;
    var soma = 0;

    for(index in 1..100)
    {
        soma += index;
        println("$index");
    }

    println("A soma total é $soma");
    COMENTARIO*/

    /**COMENTARIO
    Exercicio 12
    Escreva um programa que calcule e imprima o fatorial de um número inteiro não-negativo n

    //numero factorial escolhido
    var numeroFactorial = 8;
    var index = 1;
    var valor = 1;

    if(numeroFactorial < 0)
    {
        println("Numero factorial escolhido não pode ser negativo!");
    }
    else
    {
        while(index <= numeroFactorial)
        {
            if(index == 1)
            {
                valor *= 1;
            }
            valor *= index;

            index++;
        }
        println(valor);
    }
    COMENTARIO*/
}

main();
