import java.util.Scanner;

public class TotaldeMinutos
{
    public int dias;
    Scanner sc = new Scanner(System.in);
    
    public TotaldeMinutos()
    {
        this.pedidoDeDados();
        this.diasParaMinutos(dias);
        
    }
    
    public void pedidoDeDados()
    {
        System.out.println("Digite o numero de dias: ");
        dias = sc.nextInt();
    }
    
    public void diasParaMinutos(int dias)
    {
        int numeroMinutoPorDia = 60*24;
        int resultado = numeroMinutoPorDia * dias;
        
        System.out.println("O numero de dias em minutos é: " + resultado);
    }
}
    