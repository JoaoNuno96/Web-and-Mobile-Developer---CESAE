public class AnimalVoador extends Animal
{
    public String temperamento;
    public String velocidade;
    
    public AnimalVoador(String n,String s,String w,String t,String v)
    {
        super(n,s,w); 
        this.temperamento = t;
        this.velocidade = v;
    }
    
    public void printData()
    {
        System.out.println("Name: " + this.name);
        System.out.println("Size: " + this.size);
        System.out.println("Weight: " + this.weight);
        System.out.println("Temper: " + this.temperamento);
        System.out.println("Speed: " + this.velocidade);
    }
}