//Extendes é uma keyword que implementa o conceito de Herança(Inheritance)
import java.util.ArrayList;
import java.util.Random;

public class Jogador extends Utilizador
{
    public Random rand;
    public int pontos;
    public String nomeNoJogador;
    
    public Carta instanciaCarta;
    public JogoComCartas jc;
    
    public static ArrayList<Carta> maoJogador = new ArrayList<Carta>();
    
    public Jogador()
    {
        JogoComCartas jc = new JogoComCartas();
        jc.CriarNovoBaralho();
    }
    
    public void comprarCarta(int nr)
    {
        for(int i = 0; i<nr;i++)
        {
            rand = new Random();
            maoJogador.add(jc.listaBaralho.get(nr));
            jc.listaBaralho.remove(nr);
        }
    }
    
    public void descartarCartas(int nr)
    {
        
    }
    
    public void mostrarMao()
    {
       
    }
}