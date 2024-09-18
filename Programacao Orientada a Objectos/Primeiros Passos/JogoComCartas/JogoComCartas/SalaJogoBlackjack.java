import java.util.Random;
import java.util.ArrayList;

public class SalaJogoBlackjack extends SalaDeJogoPoker
{
    public ArrayList<Carta> baralhoBlack;
    
    public SalaJogoBlackjack()
    {
        
    }
    
    public void criarBaralho()
    {
        baralhoBlack = new ArrayList<Carta>();
        
        for(int k = 0; k<6; k++)
        {
            for(int i = 0; i< carta.arrayNaipes.length;i++)
            {
                for(int j = 0; j < carta.arrayRanks.length;j++)
                {
                    baralhoBlack.add(new Carta(i,j));
                }
            }
        }
        
        System.out.println("Um novo baralho foi criado! " + baralhoBlack.size());
    }
    
    public void chamarFuncaoCriarBaralho()
    {
        super.criarBaralho();
        
        criarBaralho();
    }
    
    
}