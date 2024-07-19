import java.util.Scanner;

public class EntradaCinema
{
    public int idade;
    public Scanner sc = new Scanner(System.in);
    
    public EntradaCinema()
    {
        this.receberDados();
        this.verificarIdade();
    }
    
    public void receberDados()
    {
        System.out.println("Digite a sua idade:");
        idade = sc.nextInt();
    }
    
    public void verificarIdade()
    {
        if(idade<18)
        {
            System.out.println("Proibido entrar!");
        }
        else
        {
            System.out.println("Permitida a entrada!");
        }
    }
}