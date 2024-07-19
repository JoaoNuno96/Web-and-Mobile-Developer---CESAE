import java.util.Scanner;

public class IndiceMassaCorporal
{
    public Scanner sc = new Scanner(System.in);
    public float altura;
    public float peso;
    
    public IndiceMassaCorporal()
    {
        this.receberDados();
        
        System.out.println("O valor do IMC é " + calculoIMC());
    }
    
    public float calculoIMC()
    {
        return peso / (altura * altura);
    }
    
    public void receberDados()
    {
        System.out.print("Digite a sua altura");
        altura = sc.nextFloat();
        
        System.out.print("Digite o seu peso");
        peso = sc.nextFloat();
    }
    
    
}