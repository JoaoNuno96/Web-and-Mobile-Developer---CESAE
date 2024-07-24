import java.util.Scanner;

public class UP
{   
    //variaveis globais
    public Scanner sc = new Scanner(System.in);
    public String adminUsername = "utilizador";
    public String adminPass = "abz";
    
    public String userUsername;
    public String userPass;
    
    public int count = 2;
    
    //variavel controlo
    public boolean status = true;
    
    public UP()
    {
        System.out.println("Bem-vindo ao programa!");
        System.out.println("Caso falhe na autentícação terá 3 tentativas, caso falhe o programa irá desligar.");
        this.receberDadosUtilizador();
    }
    
    public void receberDadosUtilizador()
    {
        System.out.println("Digite username: ");
        userUsername = sc.nextLine();
        
        System.out.println("Digite password: ");
        userPass = sc.nextLine();
        
        this.verificarDados();
        
    }
    
    public void verificarDados()
    {
        if(count > 0)
        {
            if(userUsername == adminUsername && userPass == adminPass)
            {
                System.out.println("Autenticação Completa");
            }
            else
            {
                System.out.println("Autenticação Errada, tente novamente!");
                --count;
                this.receberDadosUtilizador();
                
            }    
        }
        else
        {   
            System.out.print("Este computador será autodestruído em 5 segundos!");
            System.exit(1);
        }
    }
    
}