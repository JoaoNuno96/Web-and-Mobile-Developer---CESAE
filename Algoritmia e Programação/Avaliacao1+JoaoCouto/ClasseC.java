//import Scanner e Random
import java.util.Scanner;
import java.util.Random;

public class ClasseC
{
    //Variaveis globais da funcao
    public Random rand = new Random();
    public Scanner sc = new Scanner(System.in);
    public int numeroRandom;
    public int numeroUtilizador;
    public int count = 1;
    
    //Variavel de controlo
    public boolean first = true;
    
    //função construtora da ClasseC
    public ClasseC()
    {
        System.out.println("Programa para adivinhar o numero random!");
        this.processarDado();
        this.compararValores();
        System.out.println("Parabéns! Você acertou o numero em " + count + " tentativas.");
    }
    
    //funcao para receber e processar numero random
    public void processarDado()
    {
        if(first)
        {
            numeroRandom = rand.nextInt(7) + 2;
            first = false;
        }
        
        System.out.println("Digite o numero: ");
        numeroUtilizador = sc.nextInt();
        
        this.compararValores();
    }
    
    //funcao comparar os valores
    public void compararValores()
    {
        
        if(numeroUtilizador != numeroRandom)
        {
            System.out.println("Ups fallhou!");
            if(numeroUtilizador < numeroRandom)
            {
                System.out.println("Uma dica, o seu numero é mais pequeno que o numero do dado");
            }
            else
            {
                System.out.println("Uma dica, o seu numero é maior que o numero do dado");
            }
            count++;
            this.processarDado();
        }
    
    }
    
    
}