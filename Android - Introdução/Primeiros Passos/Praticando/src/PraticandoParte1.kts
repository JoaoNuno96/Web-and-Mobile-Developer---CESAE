package src;


//Functions : Type and : Unit (void)
//Variables: var (normal varible), val (constant varible), sem inicializar
//Classes

class Product(var nome : String, var preco : Float)

fun main()
{
    //var a = Animal("papagia","dca","awd");
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
   var index = 10;
    for(index in 10..100)
    {
        println(index);
    }
}

main();