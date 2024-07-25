//import de Scanner
import java.util.Scanner;


public class ClasseA
{
    //variaveis globais
    public float valorRecebido;
    public Scanner sc = new Scanner(System.in);
    
    //função construtora
    public ClasseA()
    {
        System.out.println("Programa converter quilómetros para milhas");
        System.out.println("Digite o numero de quilómetros: ");
        valorRecebido = sc.nextFloat();
        System.out.println("O resultado da conversão para milhas é: " + conversao() );
    }
    
    //função calculo conversao
    public float conversao()
    {
        return valorRecebido * 0.62f;
    }
    
}