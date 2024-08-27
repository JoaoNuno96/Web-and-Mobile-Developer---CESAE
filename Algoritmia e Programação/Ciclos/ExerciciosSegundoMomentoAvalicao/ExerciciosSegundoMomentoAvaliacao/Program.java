import java.util.Scanner;
import java.util.Random;
import java.util.ArrayList;

public class Program
{
    Scanner sc = new Scanner(System.in);
    Random rand = new Random();
    int dadoUtilizador;
    int dadoGeradoAutomaticamente = rand.nextInt(0,9) + 1;
    boolean run = true;
    ArrayList<Integer> listNumeros = new ArrayList<Integer>();

    
    
    public Program()
    {
        System.out.println("Bem-vindo eu sou o programa adivinha!");
        System.out.println("Você irá apresentar um numero (1-10) e tentar adivinhar o numero que eu escolho");
        
        while(run)
        {
            System.out.print("Digite o numero: ");
            dadoUtilizador = sc.nextInt();
            this.verificarDado();
        }
        
    }
    
    public void verificarDado()
    {
        if(dadoUtilizador == dadoGeradoAutomaticamente)
        {
            System.out.println("Dados foram iguais!");
            run = false;
        }
        else
        {
            System.out.println("Dados não foram iguais! Tente novamente!");
        }
    }
}