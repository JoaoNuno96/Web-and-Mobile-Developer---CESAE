import java.util.Scanner;
import java.util.Random;

public class LancamentoDados
{
    //variavel global
    public Scanner sc = new Scanner(System.in);
    public Random rand = new Random();
    public int dadoUtilizadorSoma;
    public int dadoUm;
    public int dadoDois;
    
    //Vairavel controlo
    public boolean input = false;
    
    public LancamentoDados()
    {
        this.jogar();
    }
    
    public int somarDadosAleatorios()
    {
        return dadoUm + dadoDois;
    }
    
    public void lancamentoDados()
    {
        dadoUm = rand.nextInt(6) + 1;
        System.out.println("Numeros do dado-1: " + dadoUm);
        
        dadoDois = rand.nextInt(6) + 1;
        System.out.println("Numeros do dado-2: " + dadoDois);
    }
    
    public void receberDadosUtilizador()
    {
        System.out.println("Digite o numero: ");
        dadoUtilizadorSoma = sc.nextInt();
        
        if(dadoUtilizadorSoma>2 && dadoUtilizadorSoma<12)
        {
            System.out.println("Utilizador escolheu o numero: " + dadoUtilizadorSoma);
        }
        else
        {
            System.out.println("Dados Inválido!");
            this.receberDadosUtilizador();
        }
        
    }
    
    public void jogar()
    {
        this.receberDadosUtilizador();
        this.lancamentoDados();
        
        int somarAleatorios = somarDadosAleatorios();
        System.out.println("Soma dos dados: " + somarAleatorios);
        
        if(dadoUtilizadorSoma == somarAleatorios)
        {
            System.out.println("Ganhou 100 euros!");
        }
        else
        {
            System.out.println("Tem que pagar 10 euros!");
        }
    }
    
    
}