import java.util.Scanner;

public class Exercicio3
{
    public Exercicio3(int primeiroV, int segundoV, int terceiroV, int quartoV)
    {
        System.out.println("Diferença = " + diferencaValores(primeiroV,segundoV,terceiroV,quartoV));
    }
    
    public int diferencaValores(int v1, int v2, int v3, int v4)
    {
        return (v1 * v2 - v3 * v4);
    }
    
}