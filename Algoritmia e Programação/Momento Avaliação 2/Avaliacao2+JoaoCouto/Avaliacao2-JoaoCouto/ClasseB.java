//import Classes
import java.util.Random;
import java.util.Scanner;

public class ClasseB
{
    //variavéis globais
    public Scanner sc = new Scanner(System.in);
    public Random rand = new Random();
    public String nomeClube;
    
    public int simuladorGolosClube;
    public int simuladorGolosAdversario;
    
    //função constructora
    public ClasseB()
    {
        System.out.println("Programa Simulador de jogos de futebol!");
        this.receberDados();
        this.comecarSimulador();
        
    }
    
    //função para receber dado de utilizador e gerar os numeros de golos randomizados;
    public void receberDados()
    {
        simuladorGolosClube = rand.nextInt(5);
        simuladorGolosAdversario = rand.nextInt(5);
        
        System.out.println("Digite o seu clube: ");
        nomeClube = sc.nextLine();
        
    }
    
    //função para processar e começar o simulador;
    public void comecarSimulador()
    {
        if(simuladorGolosClube > simuladorGolosAdversario)
        {
            System.out.println("O " + nomeClube + " ganhou!");
        }
        else if(simuladorGolosClube == simuladorGolosAdversario)
        {
            System.out.println("O " + nomeClube + " empatou!");
        }
        else
        {
            System.out.println("O " + nomeClube + " perdeu!");
        }
    }
}