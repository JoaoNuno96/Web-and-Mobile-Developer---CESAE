import java.util.Random;
import java.util.ArrayList;

public class SalaDeJogoPoker
{
    public Random rand = new Random();
    public Jogador jogador;
    public Carta carta;
    public ArrayList<Jogador> listaJogador = new ArrayList<Jogador>();
    public ArrayList<Carta> baralho;
    public int id = 0;
    
    public ArrayList<Carta> cartasFloop = new ArrayList<Carta>();
    
    public SalaDeJogoPoker()
    {
        
    }
    
    public void adicionarJogador()
    {
        id++;
        jogador = new Jogador();
        jogador.nomeNoJogador = "Player_" + id;
        
        listaJogador.add(jogador);
        
        System.out.println("Entrou na sala o " + jogador.nomeNoJogador);
    }
    
    public void contarJogadores()
    {
        System.out.println("Existem " + listaJogador.size() + " jogadores");
    }
    
    public void adicionarJogadores(int nrJogadores)
    {
        for(int i = 0; i < nrJogadores; i++)
        {
            if(listaJogador.size() == 0)
            {
                this.adicionarJogador();
            }
            else
            {
                jogador = new Jogador();
                jogador.nomeNoJogador = "Player_" + (i + 1);
        
                listaJogador.add(jogador);
                System.out.println("Entrou na sala o " + jogador.nomeNoJogador);
            }
        }
    }
    
    public void removerJogador(Jogador j)
    {
        listaJogador.remove(j);
    } 

    public void removerJogador(int index)
    {
        listaJogador.remove(index-1);
    }
    
    public void apresentarListaJogadores()
    {
        for(int i = 0; i< listaJogador.size(); i++)
        {
            if(listaJogador.size() == 0)
            {
                System.out.println("Neste momento não existem jogadores na sala.");
            }
            System.out.println(listaJogador.get(i).nomeNoJogador); 
        }
    }
    
    public Jogador selecionarDetalhesJogador(int index)
    {
        return listaJogador.get(index);
    }
    
    public String compararCartasJogadores(int player1, int player2)
    {
        return (selecionarDetalhesJogador(player1).maoJogador.size() < selecionarDetalhesJogador(player2).maoJogador.size() ) ? "Jogador 1 tem mais cartas!" : "Jogador 2 tem mais cartas!!";
    }
    
    public String compararCartasJogadores(Jogador player1, Jogador player2)
    {
        return ( player1.maoJogador.size() < player1.maoJogador.size() ) ? "Jogador 1 tem mais cartas!" : "Jogador 2 tem mais cartas!!";
    }
    
    public void criarBaralho()
    {
        baralho = new ArrayList<Carta>();
        
        for(int i = 0; i< carta.arrayNaipes.length;i++)
        {
            for(int j = 0; j < carta.arrayRanks.length;j++)
            {
                baralho.add(new Carta(i,j));
            }
        }
        
        System.out.println("Um novo baralho foi criado!");
    }
    
    //Tire 3 cartas do baralho e apresente
    public void funcaoFlop()
    {
        for(int i = 0; i<3;i++)
        {
            if(baralho.size() <= 0)
            {
                System.out.println("Baralho sem cartas!");
                break;
            }
            cartasFloop.add( baralho.get(rand.nextInt(baralho.size())) );
            System.out.println( baralho.get(rand.nextInt(baralho.size())).naipe + " " + baralho.get(rand.nextInt(baralho.size())).rank);
        }
    }
    
}