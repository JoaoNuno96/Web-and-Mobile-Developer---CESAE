import java.util.Scanner;
import java.util.Random;

public class PesoIdeal
{
    public Scanner sc = new Scanner(System.in);
    public String genero;
    public float alturaUser = 0;
    
    
    public PesoIdeal()
    {
        System.out.println("Bem-vindo ao programa Peso Ideal!");
        System.out.println("Primeiramente diga-nos se é homem ou mulher: ");
        this.guardarGenero();
        System.out.print("Digite a sua altura: ");
        this.guardarAltura();
        System.out.println("Calculo Final: " + this.calculo());
    }
    
    public float calculo()
    {        
        while(alturaUser == 0)
        {
            System.out.println("Altura não definida, por favor digite outra vez.");
            this.guardarAltura();
        }
        
        return (genero.equals("homem")) ? alturaUser * 72.7f - 58f : alturaUser * 62f - 44.7f;
    }
    
    public void guardarGenero()
    {
        genero = sc.nextLine();
    }
    
    public void guardarAltura()
    {
        alturaUser = sc.nextFloat();
    }
    
}