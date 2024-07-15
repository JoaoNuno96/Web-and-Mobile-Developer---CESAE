//Importe de package para permitir uso do objecto Random;
import java.util.Random;

class App
{   
    //Função construtora
    App()
    {
        apresentarMensagem();
    }
    
    //Função com número randomizado para lançar dado
    int lancarDados()
    {
        Random numeroAleatorio = new Random();
        return numeroAleatorio.nextInt(6) + 1;
    }
    
    //Função para apresentação de mensagem
    void apresentarMensagem()
    {
        System.out.println("No dado saiu o número: " + lancarDados());
        System.out.println("No dado saiu o número: " + lancarDados());
        System.out.println("No dado saiu o número: " + lancarDados());
        System.out.println("No dado saiu o número: " + lancarDados());
        System.out.println("No dado saiu o número: " + lancarDados());
    }
}