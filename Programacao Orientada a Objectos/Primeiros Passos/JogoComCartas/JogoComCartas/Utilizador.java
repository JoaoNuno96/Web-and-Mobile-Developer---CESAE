public class Utilizador
{
    int id;
    String username;
    String email;
    
    public Utilizador(String u, String e)
    {
        this.id++;
        this.username = u;
        this.email = e;
    }
}