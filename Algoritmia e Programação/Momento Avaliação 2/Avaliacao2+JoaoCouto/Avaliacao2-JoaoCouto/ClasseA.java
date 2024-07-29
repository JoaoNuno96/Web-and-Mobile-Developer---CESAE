//import de Classes
import java.util.Scanner;

public class ClasseA
{
    //variaveis globais / atributos
    public Scanner sc = new Scanner(System.in);
    public int idadeUsuario;
    
    //construtor da Classe
    public ClasseA()
    {
        System.out.println("Programa para verificar se pode tirar carta condução!");
        System.out.println("Digite a sua idade: ");
        idadeUsuario = sc.nextInt();
        this.verificarIdade();
    }
    
    //função verifica idade de usuario;
    public void verificarIdade()
    {
        if(idadeUsuario >= 18)
        {
            System.out.println("Já pode tirar carta de condução!");
        }
        else
        {
            int anosEmFalta = 18 - idadeUsuario;
            System.out.println("Faltam " + anosEmFalta + " anos para tirar carta de condução!");
        }
    }
}