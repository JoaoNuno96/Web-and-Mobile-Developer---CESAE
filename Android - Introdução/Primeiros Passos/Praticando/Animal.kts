package Praticando;

class Animal(var name : String, var size : String, var weight : String)
{
    public var name;
    public var size;
    public var weight;

    public fun details() : String
    {
        return "Name: ${name}; Size: ${size}; Weight: ${weight}; ";
    }

    public fun run() : Unit
    {
        println("Correndooooo!");
    }

}