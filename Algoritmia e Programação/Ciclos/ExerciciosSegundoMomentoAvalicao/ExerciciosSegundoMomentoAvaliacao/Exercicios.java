import java.util.Scanner;

public class Exercicios
{
    public Scanner sc = new Scanner(System.in);
    
    public Exercicios()
    {
        float soma = 0.0f;
        for(int i = 0; i<2;i++)
        {
           System.out.println("Por favor, digite os numeros");
            String[] numeros = sc.nextLine().split(" ");
            
            Peca peca = new Peca(
            Integer.parseInt(numeros[0]),
            Integer.parseInt(numeros[1]),
            Float.parseFloat(numeros[2])
            );
            
            soma += peca.calculoValorPeca();
        }
        
        System.out.println("Valor a pagar: " + soma);
        
        
    }
}