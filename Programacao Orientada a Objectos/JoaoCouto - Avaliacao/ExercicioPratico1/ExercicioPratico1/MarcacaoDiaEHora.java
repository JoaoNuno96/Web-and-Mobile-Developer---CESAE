import java.util.Random;
import java.util.Scanner;

public class MarcacaoDiaEHora
{
    public Random rand = new Random();
    public Scanner sc = new Scanner(System.in);
    
    public String[] diasSemSabado = {"Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira"};
    public String[] diasComSabado = {"Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"};
    public String[] horario = {"09:00","10:00","11:00","14:00","15:00","16:00"};
    
    public MarcacaoDiaEHora()
    {
        System.out.println("Bem-vindo ao programa Marcação de dia e hora aleatória");
        System.out.println("Deseja que o Sábado seja considerado como dia aleatório? (sim/nao)");
        this.apresentaDataAleatória();
    }
    
    public void apresentaDataAleatória()
    {
        String choice = sc.nextLine();
        System.out.println("Data gerada: " + this.apresentarHoraAleatoria() + " " + this.apresentarDiaAleatorio(choice));
    }
    
    public String apresentarHoraAleatoria()
    {
        return horario[rand.nextInt(horario.length-1)];
    }
    
    public String apresentarDiaAleatorio(String respostaUser)
    {
        if(respostaUser.equals("sim"))
        {
            return diasComSabado[rand.nextInt(diasComSabado.length-1)];
        }
        else
        {
            return diasComSabado[rand.nextInt(diasSemSabado.length-1)];
        }
    }
}