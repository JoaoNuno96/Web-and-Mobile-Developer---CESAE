import java.util.Scanner;
import java.util.Random;

public class MediaNotasAvaliacao
{
    public Scanner sc = new Scanner(System.in);
    
    public float primeiraNota;
    public float segundaNota;
    public float terceiraNota;
    
    public MediaNotasAvaliacao()
    {
        this.receberDados();
        System.out.println("A media dos dados é: " + this.media());
    }
    
    public void receberDados()
    {
        System.out.println("Digite primeira nota: ");
        primeiraNota = sc.nextFloat();
        
        System.out.println("Digite segunda nota: ");
        segundaNota = sc.nextFloat();
        
        System.out.println("Digite terceira nota: ");
        terceiraNota = sc.nextFloat();
        
        verificarNotas(primeiraNota);
        verificarNotas(segundaNota);
        verificarNotas(terceiraNota);
        
    }
    
    public void verificarNotas(float nota)
    {
        if(nota>0 && nota<20)
        {
            System.out.println("Nota " + nota + " Dado Verificado! ");
        }
        else
        {
            System.out.println("Um dos dados passou limites de nota entre 0 e 20 valores! Digite os dados outra vez!");
            this.receberDados();
        }
    }
    
    public float media()
    {
        return (primeiraNota + segundaNota + terceiraNota) / 3;
    }
    
}