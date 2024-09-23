import java.util.Scanner;
import java.util.Random;

public class PagamentoETroco
{
    public Random rand = new Random();
    public Scanner sc = new Scanner(System.in);
    
    public int precoPerfume;
    public int dinheiroRecebido;
    
    //flag
    public boolean compra = true;
    
    public PagamentoETroco()
    {
        System.out.println("Bem-vindo ao programa Pagamento e Troco");
        this.verificarPagamento();
    }
    
    public void gerarPrecoPerfume()
    {
        this.precoPerfume = rand.nextInt(20) + 1;
        System.out.println("O preço do perfume é " + this.precoPerfume + " euros.");
    }
    
    public void receberDinheiroUser()
    {
        System.out.println("Digite quanto dinheiro vai enviar: ");
        this.dinheiroRecebido = sc.nextInt();
    }
    
    public void verificarPagamento()
    {
        this.gerarPrecoPerfume();
        this.receberDinheiroUser();
        
        while(compra)
        {
            if(dinheiroRecebido > precoPerfume)
            {
                int troco = dinheiroRecebido - precoPerfume;
                System.out.println("Pagamento finalizado!");
                System.out.println("Troco de " + troco + " euros");
                break;
            }
            else if(dinheiroRecebido < precoPerfume)
            {
                int valorEmFalta = precoPerfume - dinheiroRecebido;
                System.out.println("Ainda falta valor por pagar " + valorEmFalta + " euros.");
                this.dinheiroEmFalta(sc.nextInt());
            }
            else if(dinheiroRecebido == precoPerfume)
            {
                System.out.println("Pagamento finalizado!");
                break;
            }
        }
        
    }
    
    public void dinheiroEmFalta(int valor)
    {
        dinheiroRecebido += valor;
    }

}