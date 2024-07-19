import java.util.Scanner;

public class Aventura
{
    public String direccao;
    public Scanner sc = new Scanner(System.in);
    
    public Aventura()
    {
       this.comecarHistoria(); 
    }
    
    public void comecarHistoria()
    {
        System.out.println("A aventura começou quando José ia em caminho do trabalho, e depara-se na estrada com um impasse. Existe 4 caminhos que pode ir: norte, sul,este ou oeste. (Escreve a direcção que pretende seguir.)");
        direccao = sc.nextLine();
        
        if(direccao.equalsIgnoreCase("norte"))
        {
            System.out.println("Segui para norte. Ao subir a estrada encontrou um cão abandonado. Decidiu levar, para casa.");
        }
        else if(direccao.equalsIgnoreCase("sul"))
        {
            System.out.println("Segui para sul. Ao desviar do caminho, assistiu a um acidente entre um carro e uma moto. Decidiu parar e ligar o 112.");
        }
        else if(direccao.equalsIgnoreCase("este"))
        {
            System.out.println("Segui para este. Ao passar pela entrada do shopping, assistiu a uma discussão entre dois homens bebados. Decidiu seguir em frente.");
        }
        else if(direccao.equalsIgnoreCase("oeste"))
        {
            System.out.println("Segui para oeste. Ao desviar para oeste, viu que era o caminho mais seguro para casa e avançou sem problemas.");
        }
        
    }
}