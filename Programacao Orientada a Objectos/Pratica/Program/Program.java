import java.util.Scanner;
import java.util.ArrayList;

public class Program
{
    public Scanner sc = new Scanner(System.in);
    
    public Program()
    {
        System.out.println("RECEBER DADOS DO ANIMAL!");
        String name = sc.nextLine();
        String size = sc.nextLine();
        String weight = sc.nextLine();
        String temper = sc.nextLine();
        String speed = sc.nextLine();
        AnimalVoador av = new AnimalVoador(name,size,weight,temper,speed);
        
        System.out.println("");
        av.printData();
    }
}