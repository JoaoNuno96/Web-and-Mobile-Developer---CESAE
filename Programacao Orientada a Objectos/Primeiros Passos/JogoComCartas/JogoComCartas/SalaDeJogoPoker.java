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
    public boolean flagFlop = true;
    
    public SalaDeJogoPoker()
    {
        
    }
    
    //Adicionar Jogador
    public void adicionarJogador()
    {
        id++;
        jogador = new Jogador();
        jogador.nomeNoJogador = "Player_" + id;
        
        listaJogador.add(jogador);
        
        System.out.println("Entrou na sala o " + jogador.nomeNoJogador);
    }
    
    //Adicionar varios Jogadores
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
        
    //Contar os Jogadores
    public void contarJogadores()
    {
        System.out.println("Existem " + listaJogador.size() + " jogadores");
    }
    
    //Remover Jogadores (parametro Jogador)
    public void removerJogador(Jogador j)
    {
        listaJogador.remove(j);
    } 

    //Remover Jogadores (parametro indice do Jogador)
    public void removerJogador(int index)
    {
        listaJogador.remove(index-1);
    }
    
    //Apresentar Lista Jogadores
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
    
    //Selecionar o Jogador(parametro indice)
    public Jogador selecionarDetalhesJogador(int index)
    {
        return listaJogador.get(index);
    }
    
    //Comparar Jogadores com mais cartas (indice Jogador1, indice Jogador2)
    public String compararCartasJogadores(int player1, int player2)
    {
        return (selecionarDetalhesJogador(player1).maoJogador.size() < selecionarDetalhesJogador(player2).maoJogador.size() ) ? "Jogador 1 tem mais cartas!" : "Jogador 2 tem mais cartas!!";
    }
    
    //Comparar Jogadores com mais cartas (Jogador1,Jogador2)
    public String compararCartasJogadores(Jogador player1, Jogador player2)
    {
        return ( player1.maoJogador.size() < player1.maoJogador.size() ) ? "Jogador 1 tem mais cartas!" : "Jogador 2 tem mais cartas!!";
    }
    
    //Criar um baralho
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
    
    //Tirar uma carta do baralho
    private Carta tirarUmaCarta()
    {
        Carta cardRandom = baralho.get(rand.nextInt(baralho.size()));
        baralho.remove(cardRandom);
        return cardRandom;
    }
    
    //Tire 3 cartas do baralho e apresente (só pode ser usado uma vez)
    public void funcaoFlop()
    {
        if(flagFlop)
        {
            for(int i = 0; i<3;i++)
            {
                System.out.println(tirarUmaCarta().naipe + " " + tirarUmaCarta().rank);
            }
            flagFlop = false;
        }
        else
        {
            System.out.println("Flop já usado");
        }
        
    }
    
    //jogadores compram uma carta
    public void todosOsJogadoresCompramUmaCarta()
    {
        for(int i = 0; i<listaJogador.size();i++)
        {
            listaJogador.get(i).comprarCarta(tirarUmaCarta());
        }
        System.out.println("Cada Jogador comprou uma carta!");
    }
    
}