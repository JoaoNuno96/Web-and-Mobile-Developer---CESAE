import java.util.Scanner;

public class Exercicio2
{
    public Exercicio2()
    {
        this.calcularArea();
    }
    
    public void calcularArea()
    {
        Scanner sc = new Scanner(System.in);
        double raio = sc.nextDouble();
        
        double area = 3.14159 * (raio * raio);
        
        System.out.println("O valor da área é " +  area);
    }
}