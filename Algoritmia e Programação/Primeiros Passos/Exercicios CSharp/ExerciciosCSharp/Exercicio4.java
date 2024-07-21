import java.util.Scanner;

public class Exercicio4
{
    Scanner sc = new Scanner(System.in);
    
    int numeroFuncionario;
    int numeroHorasTrabalhadas;
    float valorPorHora;
    
    public Exercicio4()
    {
        this.processData();
    }
    
    public void retrieveData()
    {
        numeroFuncionario = sc.nextInt();
        numeroHorasTrabalhadas = sc.nextInt();
        valorPorHora = sc.nextFloat();
    }
    
    public void processData()
    {
        this.retrieveData();
        
        System.out.println("Number = " + numeroFuncionario);
        System.out.println("Salary = U$ " + this.salary());
    }
    
    public float salary()
    {
        return numeroHorasTrabalhadas * valorPorHora;
    }
    
    
}