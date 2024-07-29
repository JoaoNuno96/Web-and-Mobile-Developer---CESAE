import java.util.Scanner;

public class CiclosDoWhile
{
    public Scanner sc = new Scanner(System.in);
    int numeroRecebido;
    
    public CiclosDoWhile()
    {
        System.out.println("Programa!");
        System.out.println("Digite um numero de 30 e 40");
        
        do{
            numeroRecebido = sc.nextInt();
            
            if(numeroRecebido<30 || numeroRecebido > 40)
            {
                System.out.println("Valor não reconhecido, digite novamente!");
            }
            
        }while(!(numeroRecebido>30 && numeroRecebido<40));
    }
}