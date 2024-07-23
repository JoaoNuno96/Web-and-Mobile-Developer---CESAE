import java.util.Scanner;

public class ConversaoEuroReais
{
    public ConversaoEuroReais()
    {   
        Scanner sc = new Scanner(System.in);
        System.out.println("CONVERSOR DE EURO PARA REAIS");
        System.out.println("Apresente o valor (euros):");
        float numeroRecebido = sc.nextFloat();
        
        float valorConvertido = numeroRecebido * 6.04F;
        
        System.out.println("O valor de " + numeroRecebido + "€ são " + valorConvertido + " reais.");
        
    }
}