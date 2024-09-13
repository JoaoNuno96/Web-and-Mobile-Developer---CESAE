public class Utilizador
{
    public int id;
    public String username;
    public String email;
    public String password;
    
    public boolean autenticado = false;
    
    public Utilizador()
    {
        this.id++;
        this.username = "Visitante";
    }
    
    public void fazerLogin(String u,String p)
    {
        //Supondo um eventual acesso à BD;
        this.username = "John Flyier";
        this.password = "123456";
        
        //Verificar Utilizador
        if(u.equals(this.username) && p.equals(this.password))
        {
            this.autenticado = true;
        }
        
        this.verificarAutenticacao();
    }
    
    public void fazerLogout()
    {
        this.autenticado = false;
    }
    
    public void fazerRegisto()
    {
        
    }
    
    public void verificarAutenticacao()
    {
        if(this.autenticado)
        {
            System.out.println("Autenticado com Sucesso!");
        }
        else
        {
            System.out.println("Erro na autenticação!");
        }
    }
}