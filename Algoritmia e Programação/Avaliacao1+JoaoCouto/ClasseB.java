//import Scanner
import java.util.Scanner;

public class ClasseB
{
    //Variaveis globais da ClasseB
    public String decisao;
    public int primeiroNumero;
    public int segundoNumero;
    public Scanner sc = new Scanner(System.in);
    
    //Funcao Construtora da ClasseB
    public ClasseB()
    {
        System.out.println("Programa para somar ou subtrair números.");
        this.receberDados();
        System.out.println("O resultado é " + this.calcular(primeiroNumero,segundoNumero));
    }
    
    //funcao para receber dados do utilizador
    public void receberDados()
    {
        System.out.println("Deseja fazer soma ou subtracao? ");
        decisao = sc.nextLine();
        
        System.out.println("Digite primeiro numero: ");
        primeiroNumero = sc.nextInt();
        
        System.out.println("Digite segundo numero: ");
        segundoNumero = sc.nextInt();
    }
    
    //funcao para calcular
    public int calcular(int primeiroNumero,int segundoNumero)
    {
        if(decisao.equalsIgnoreCase("soma"))
        {
            return primeiroNumero + segundoNumero;
        }
        else
        {
            return primeiroNumero - segundoNumero;
        }
    }
    
}