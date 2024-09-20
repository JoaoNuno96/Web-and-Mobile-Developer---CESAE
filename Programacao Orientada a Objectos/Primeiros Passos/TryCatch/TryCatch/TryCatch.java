import java.util.Scanner;


public class TryCatch
{
    public Scanner sc = new Scanner(System.in);
    public boolean run = true;
    
    public TryCatch()
    {
        while(run)
        {
           try
            {
                System.out.println("Por favor, insira um numero inteiro!");
                int valorInteiro = sc.nextInt();
                run = false;
            }
            catch(Exception e)
            {
                System.out.println("Você não escreveu um inteiro, por favor escreva outra vez");
                sc.nextLine();
            } 
        }
        
        
        
        
    }
}