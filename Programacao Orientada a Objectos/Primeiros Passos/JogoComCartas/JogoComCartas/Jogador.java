//Extendes é uma keyword que implementa o conceito de Herança(Inheritance)
import java.util.ArrayList;
import java.util.Random;

public class Jogador extends Utilizador
{
    public Random rand;
    private int pontos;
    public String nomeNoJogador;
    
    public Carta instanciaCarta;
    public JogoComCartas jc;
    
    public static ArrayList<Carta> maoJogador;
    
    public Jogador()
    {
        pontos = 0;
        maoJogador = new ArrayList<Carta>();
        JogoComCartas jc = new JogoComCartas();
        jc.CriarNovoBaralho();
    }

    //Metodo Getter dos pontos
    public int getPontos()
    {
        return pontos;
    }
    
    //Metodo Setter dos pontos
    public void setPontos(int p)
    {
        if(p <= 0)
        {
            pontos = 0;
        }
        
        pontos = p;
    }
    
    //Jogador compra Carta
    public void comprarCarta(Carta cartaParam)
    {
        maoJogador.add(cartaParam);
    }
    
    //Jogador descarta Carta
    public void descartaCarta(Carta cartaParam)
    {
        if(maoJogador.size() == 0)
        {
            System.out.println("Não tem cartas para descartar");
        }
        else
        {
           maoJogador.remove(cartaParam); 
        }        
    }
    
    //Jogador Mostra a mão
    public void mostrarMao()
    {
        if(maoJogador.size() == 0)
        {
            System.out.println("O Jogador " + nomeNoJogador + " não tem cartas na mão.");
        }
        else
        {
           for(int i = 0; i < maoJogador.size();i++)
           {
               System.out.println(maoJogador.get(i).naipe + " " + maoJogador.get(i).rank);
           } 
        }
       
    }
}