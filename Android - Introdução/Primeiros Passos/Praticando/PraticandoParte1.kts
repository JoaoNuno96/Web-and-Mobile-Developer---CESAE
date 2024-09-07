package Praticando;
import Praticando.*


//Functions : Type and : Unit (void)
//Variables: var (normal varible), val (constant varible), sem inicializar
//Classes

class Product(var nome : String, var preco : Float)

fun main()
{
    //var animal = Animal("papagaio","20cm","10kgs");
    this.cicles();
}


fun imprimirValores(valores : Int, valores2 : Int) : String
{
   return valores.toString() + " " + valores2.toString();
}

fun varible()
{
    var e : String;
    e = "10";
}

fun cicles()
{
    val index = 1;

    for(index in 1..30)
    {
        println("___${index}___");
    }
}

main();