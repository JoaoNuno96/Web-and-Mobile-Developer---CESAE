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
    
    public static ArrayList<Carta> maoJogador;
    public Jogador()
    {
        maoJogador = new ArrayList<Carta>();
        JogoComCartas jc = new JogoComCartas();
        jc.CriarNovoBaralho();
    }
    
    public void comprarCarta(Carta cartaParam)
    {
        maoJogador.add(cartaParam);
    }
    
    public void descartarCartas(int nr)
    {
        
    }
    
    public void mostrarMao()
    {
       
    }
}