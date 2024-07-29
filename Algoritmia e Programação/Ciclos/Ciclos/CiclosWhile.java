import java.util.Scanner;

public class CiclosWhile
{
    public Scanner sc = new Scanner(System.in);
    
    public CiclosWhile()
    {
        System.out.println("Digite um numero de 30 e 40");
        
        int n = sc.nextInt();
        
        while(!(n>30 && n<40))
        {
            System.out.println("Digite um numero de 30 e 40, outra vez");
            n = sc.nextInt();
        }
        System.out.println("Valor recebido!");
    }
}