import java.util.Scanner;

public class UsernamePassword
{
    public Scanner sc = new Scanner(System.in);
    public String username;
    public String password;
    public int contador = 1;
    
    public UsernamePassword()
    {
        this.receberDados();
        this.tentativas();
    }
    
    public void autenticar()
    {
        if(username.equals("utilizador") && password.equals("abz"))
        {
            System.out.println("Autenticação Completa");
        }
        else
        {
            System.out.println("Username ou palavra-chave incorreta");
            contador++;
            this.receberDados();
            this.tentativas();
        }
    }
    
    public void tentativas()
    {
        if(contador == 3)
        {
            System.out.println("Esta mensagem vai-se auto-destruir!");
        }
        else
        {
            this.autenticar();
        }
    }
    
    public void receberDados()
    {
        System.out.println("Digite o utilizador: ");
        username = sc.nextLine();
        
        System.out.println("Digite a palavra-chave: ");
        password = sc.nextLine();
        
    }
}