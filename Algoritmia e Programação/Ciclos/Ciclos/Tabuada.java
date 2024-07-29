import java.util.Scanner;

public class Tabuada
{
    public Scanner sc = new Scanner(System.in);
    
    public Tabuada()
    {
        System.out.println("Apresente um número para fazer a sua tabuada");
        int numeroUtilizado = sc.nextInt();
        System.out.println("Tabuada dos " + numeroUtilizado);
        
        for(int i = 1 ; i<=10;i++)
        {
            System.out.println(numeroUtilizado + " x " + i + " = " + (numeroUtilizado * i));
        }
        
    }
}