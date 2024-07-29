//import de Classes
import java.util.Scanner;
import java.util.Random;

public class ClasseC
{
    //variaveis globais / propriedades
    public Scanner sc = new Scanner(System.in);
    public Random rand = new Random();
    
    public int numeroUsuario;
    
    //função construtora
    public ClasseC()
    {
         System.out.println("Programa para fazer somatório de uma sequência de numeros");
         this.processarDados();
         this.inciarSequencia();
    }
    
    //função que processa os dados e verifica o intervalo do dado
    public void processarDados()
    {
        System.out.println("Apresente a quantidade de números aleatórios de 1 a 7: ");
        numeroUsuario = sc.nextInt();
        
        while(!(numeroUsuario >= 1 && numeroUsuario <=7))
        {
            System.out.println("Dado não reconhecido! Apresente numero de 1 a 7");
            numeroUsuario = sc.nextInt();
        }
    }
    
    //função gera uma sequencia consoante o numero do utilizador
    public void inciarSequencia()
    {
        int somar = 0;
        
        System.out.println(numeroUsuario + " numeros aleatórios:");
        
        for(int i = 0; i < numeroUsuario; i++)
        {
            int numeroAleatorio = rand.nextInt(21);
            System.out.println(numeroAleatorio);
            somar += numeroAleatorio;
        }
        
        System.out.println("A soma dos numeros é: " + somar);
    }
}