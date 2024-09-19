import java.util.ArrayList;

public class ExercicioBAppGestao
{
    public ArrayList<ExercicioBProduto> listaProdutos;
    
    public ExercicioBAppGestao()
    {
        listaProdutos = new ArrayList<ExercicioBProduto>();
        System.out.println("Bem-vindo/a à Aplicação de Gestão!");
    }
    
    public void inserirProduto(String n, float p)
    {
        listaProdutos.add(new ExercicioBProduto(n,p));
    }
    
    public void listarProdutos()
    {
        if(listaProdutos.size() == 0)
        {
            System.out.println("Não existem produtos!");
        }
        else
        {
            for(ExercicioBProduto p : listaProdutos)
            {
                System.out.println("Nome: " + p.nome + ", Preco: " + p.preco);
            }
        }
        
    }
    
    public void totalPrecos()
    {
        if(listaProdutos.size() == 0)
        {
            System.out.println("Não existem produtos!");
        }
        else
        {
            float totalizador = 0;
        
            for(int i = 0; i<listaProdutos.size();i++)
            {
                totalizador+=listaProdutos.get(i).preco;
            }
            
            System.out.println("O preço final é " + totalizador);
        }
        
    }
}