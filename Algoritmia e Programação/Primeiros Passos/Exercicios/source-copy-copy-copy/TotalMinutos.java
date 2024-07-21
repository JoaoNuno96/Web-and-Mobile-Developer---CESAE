import java.util.Scanner;

public class TotalMinutos
{
    Scanner sc = new Scanner(System.in);
    
    public TotalMinutos()
    {
        this.processData();
    }
    
    public void processData()
    {
        int dias = sc.nextInt();
        int minutosPorDia = 24 * 60;
        int resultado = dias * minutosPorDia;
        
        System.out.println("Dias = " + dias);
        System.out.println("Minutos = " + resultado);
    }
}