import java.util.Scanner;

public class EntradaCinema
{
    public Scanner sc = new Scanner(System.in); 
    
    public EntradaCinema()
    {
        this.processarVerificacaoIdade();
    }
    
    public void processarVerificacaoIdade()
    {
        System.out.println("Digite a sua idade, por favor");
        int idade = sc.nextInt();
        
        if(idade<18)
        {
            System.out.println("Proibido entrada a pessoas com menos de 18 anos.");
        }
        else
        {
            System.out.println("Permitida a Entrada!");
        }
    }
}