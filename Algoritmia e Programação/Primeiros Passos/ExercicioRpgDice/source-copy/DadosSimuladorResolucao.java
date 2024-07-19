//Objecto para recuperar dados de utilizador
import java.util.Scanner;

//Objecto para fazer dados randomizados;
import java.util.Random;

public class DadosSimuladorResolucao
{
    //Variavél Global
    public int numeroLadosDados;
    public Scanner scanNumeros = new Scanner(System.in);
    public Scanner scanTexto = new Scanner(System.in);
    public Random randomNumber = new Random();
    
    //Variavél Controlo
    public boolean run = true;
    
    public DadosSimuladorResolucao()
    {
        this.recuperarDados();
        this.lancamentoDado();
        
    }
    
    public void lancamentoDado()
    {
        if(numeroLadosDados == 4 || numeroLadosDados == 6 || numeroLadosDados == 8)
        {
            int dadoFinal = randomNumber.nextInt(numeroLadosDados) + 1;
            System.out.println("O dado de " + numeroLadosDados + " saiu o numero " + dadoFinal);
            
            //lançar outro dado
            System.out.println("Deseja fazer outro lançamento? Digite 'sim' para lançar outro dado.");
            
            String choice = scanTexto.nextLine();
            
            if(choice.equalsIgnoreCase("sim"))
            {
                System.out.println("Digite outro dado");
                this.recuperarDados();
            }
            else
            {
                this.quit();
            }
            
        }
        else
        {
            System.out.println("Não escolheu um gênero de dado suportado! Tente novamente...");
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
        
        int numeroLadosRecebido = scanNumeros.nextInt();
        numeroLadosDados = numeroLadosRecebido;
        this.lancamentoDado();
    }
    
    public void quit()
    {
        System.out.println("Obrigado pela sua comparência. Volte Sempre!");
        System.exit(1);
    }
}
