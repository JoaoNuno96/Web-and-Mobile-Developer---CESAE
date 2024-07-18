//Objecto para recuperar dados de utilizador
import java.util.Scanner;

//Objecto para fazer dados randomizados;
import java.util.Random;

public class DadosSimulador
{
    public int nrLadosDados;
    
    public DadosSimulador()
    {
        this.messagem();
        this.recuperarDados();
        this.lancamentoDado();
    }
    
    public void lancamentoDado()
    {
        Random r = new Random();
        int finalDado = r.nextInt(nrLadosDados) + 1;
        System.out.println("O dado de " + nrLadosDados + " saiu o numero " + finalDado); 
    }
    
    public void recuperarDados()
    {
        Scanner sc = new Scanner(System.in);
        int nrLadosRecebido = sc.nextInt();
        nrLadosDados = nrLadosRecebido;
    }
    
    public void messagem()
    {
        System.out.println("Bem-vindo ao Simulador de Lançamentos!");
        System.out.println("Este programa permite lançar dados de varios lados.");
        System.out.println("Por favor, escreva o numero de lados do quadrado");
        //int nrLados = Integer.parseInt(System.console().readLine());
    }
}