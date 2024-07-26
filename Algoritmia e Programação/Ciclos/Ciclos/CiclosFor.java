import java.util.Random;

public class CiclosFor
{
    public Random rand = new Random();
    
    public CiclosFor()
    {
        
        //PRIMEIRA PARTE - Declarar e iniciar variável
        //SEGUNDA PARTE - Condição
        //TERCEIRA PARTE - Controlo (incremento ou descremento)
        
        this.numerosAleatorios();
    }
    
    public void numerosAleatorios()
    {
        for(int j = 0; j<20;j++)
        {
            System.out.println(rand.nextInt(101));
        }
    }
}