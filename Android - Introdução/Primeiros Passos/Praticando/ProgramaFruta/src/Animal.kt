package src;

class Animal(var n : String, var s : String, var w : String)
{
    public var name = n;
    public var size = s;
    public var weight = w;

    public fun details() : String
    {
        return "Name: ${name}; Size: ${size}; Weight: ${weight}; ";
    }

    public fun run() : Unit
    {
        println("Correndooooo!");
    }

}