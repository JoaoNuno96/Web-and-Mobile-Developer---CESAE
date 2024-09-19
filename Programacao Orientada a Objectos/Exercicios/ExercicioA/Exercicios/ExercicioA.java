import java.util.Random;
import java.util.ArrayList;

public class ExercicioA
{
    public Random rand = new Random();
    
    public ArrayList<Integer> listaNumeros;
    public ArrayList<Integer> listaEstrelas;
    
    public int numero;
    public int estrela;
    
    public ExercicioA()
    {
        listaNumeros = new ArrayList<Integer>();
        listaEstrelas = new ArrayList<Integer>();
        this.gerarNumeroRandomizado();
        this.gerarEstrelaRandomizado();
        this.listarCartao();
    }
    
    public void gerarNumeroRandomizado()
    {
        for(int i = 0; i<5;i++)
        {
            numero = rand.nextInt(50) + 1;
            if(!this.verificaNumeros(numero))
            {
               listaNumeros.add(numero); 
            }
        }
    }
    
    public void gerarEstrelaRandomizado()
    {
        for(int i = 0; i<2;i++)
        {
            estrela = rand.nextInt(12) + 1;
            if(!this.verificarEstrela(estrela))
            {
               listaEstrelas.add(estrela);
            }
        }
    }
    
    public void gerarChave()
    {
    }
    
    public boolean verificaNumeros(int numero)
    {
        for(int i = 0; i < listaNumeros.size();i++)
        {
            if(numero == listaNumeros.get(i))
            {
                return true;
            }
        }
        return false;
    }
    
    public boolean verificarEstrela(int estrela)
    {
        for(int i = 0; i < listaEstrelas.size();i++)
        {
            if(estrela == listaEstrelas.get(i))
            {
                return true;
            }
        }
        return false;
    }
    
    public void listarCartao()
    {
        System.out.println("Chave de Euromilhões: ");
        
        System.out.print("Números:"); 
        for(int i : listaNumeros)
        {
            System.out.print(i + " ") ;
        }
        System.out.println("");
        System.out.print("Estrelas:"); 
        for(int l : listaEstrelas)
        {
            System.out.print(l + " ");
        }
    }
}