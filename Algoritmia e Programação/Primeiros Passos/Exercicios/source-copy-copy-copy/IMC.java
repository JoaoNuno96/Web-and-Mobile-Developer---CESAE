import java.util.Scanner;

public class IMC
{
    public IMC()
    {   
        Scanner sc = new Scanner(System.in);
        System.out.println("CALCULADORA DE INDICE DE MASSA CORPORAL");
        System.out.println("Apresente o valor do peso: (kilogramas) ");
        float peso = sc.nextFloat();
        
        System.out.println("Apresente o valor da altura: (metros )");
        float altura = sc.nextFloat();
        
        float resultadoIMC = peso / (altura * altura);
        System.out.println("O valor do seu IMC é " + resultadoIMC);
    
        
    }
    
    
}