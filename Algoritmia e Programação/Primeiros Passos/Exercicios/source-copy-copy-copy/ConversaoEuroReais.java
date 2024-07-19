import java.util.Scanner;

public class ConversaoEuroReais
{
    public float euro;
    public Scanner sc = new Scanner(System.in);
    
    public ConversaoEuroReais()
    {
        this.receberDado();
        this.conversao();
    }
    
    public void receberDado()
    {
        System.out.println("Digite o seu valor em euros: ");
        euro = sc.nextFloat();
    }
    
    public void conversao()
    {
        float resultado = euro * 6.04f;
        System.out.println("Esse valor em reais é: " + resultado);
    }
}