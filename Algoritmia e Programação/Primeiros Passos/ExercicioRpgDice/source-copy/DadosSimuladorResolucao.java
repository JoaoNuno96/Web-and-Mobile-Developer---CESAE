//Objecto para recuperar dados de utilizador
import java.util.Scanner;

//Objecto para fazer dados randomizados;
import java.util.Random;

public class DadosSimuladorResolucao
{
    public int nrLadosDados;
    public boolean run = true;
    
    public DadosSimuladorResolucao()
    {
        this.recuperarDados();
        this.lancamentoDado();
    }
    
    public void lancamentoDado()
    {
        if(nrLadosDados == 4 || nrLadosDados == 6 || nrLadosDados == 8)
        {
            Random r = new Random();
            int finalDado = r.nextInt(nrLadosDados) + 1;
            System.out.println("O dado de " + nrLadosDados + " saiu o numero " + finalDado);
        }
        else
        {
            System.out.println("Não escolheu um gênero de dado suportado!");
            this.recuperarDados();
        }
        
    }
    
    public void recuperarDados()
    {   
        if(run)
        {
            System.out.println("Bem-vindo ao Simulador de Lançamentos!");
            System.out.println("Este programa permite lançar dados de varios lados.");
            System.out.println("Por favor, escreva o numero de lados do quadrado");
           run = false;
        }
        
        Scanner sc = new Scanner(System.in);
        
        int nrLadosRecebido = sc.nextInt();
        nrLadosDados = nrLadosRecebido;
        this.lancamentoDado();
    }

    
}
