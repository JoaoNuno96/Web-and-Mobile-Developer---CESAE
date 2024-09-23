import java.util.ArrayList;
import java.util.Scanner;
import java.util.Random;

public class Curso
{
    public Scanner sc = new Scanner(System.in);
    public Random rand = new Random();
    public ArrayList<Aluno> turma = new ArrayList<Aluno>();
    public ArrayList<Aluno> listaNova = new ArrayList<Aluno>();
    
    public Curso()
    {
        System.out.println("Bem-vindo/a à Aplicação de operações sobre o curso!");
    }
    
    //Inserir Alunos
    public void inserirAluno(String nome, float nota)
    {   
        turma.add(new Aluno(nome,nota));
    }
    
    //Apresentar Alunos Random
    public void ordenacaoAleatoriaDeAlunos()
    {
        this.criarListaRandom();
        
        if(turma.size() == 0)
        {
            System.out.println("Não existem ainda alunos no curso!");
        }
        else
        {
            for(int i = 0; i<turma.size();i++)
            {
                Aluno a = this.returnAlunoRand();
                listaNova.remove(a);
                listaNova.add(a);
            }
            
            this.listarAlunosListaNova();
            listaNova = new ArrayList<Aluno>();
        }
    }
    
    //Criar Lista Alunos Nova
    public void criarListaRandom()
    {
        for(int i = 0; i<turma.size();i++)
        {
            listaNova.add(turma.get(i));
        }
    }
    
    //Retornar aluno random
    public Aluno returnAlunoRand()
    {
        return listaNova.get(rand.nextInt(turma.size()));
    }
    
    //Lista media turma
    public void mediaNotaDaTurma()
    {
        if(turma.size() == 0)
        {
            System.out.println("Não existem ainda alunos no curso!");
        }
        else
        {
           float calculo = 0;
           float alunos = turma.size();
           
           for(int i = 0;i<turma.size();i++)
           {
               calculo += turma.get(i).nota;
           }
        
           float media = calculo / alunos;
           System.out.println("A média da turma foi " + media); 
        }
    }
    
    //Lista Alunos Turma
    public void listarAlunos()
    {
        for(int i = 0; i<turma.size();i++)
        {
            System.out.println("Nome: " + turma.get(i).nome + ", " + " Nota: " + turma.get(i).nota);
        }
    }
    
    //Lista Alunos Turma Randomizado
    public void listarAlunosListaNova()
    {
        for(int i = 0; i<listaNova.size();i++)
        {
            System.out.println("Nome: " + listaNova.get(i).nome + ", " + " Nota: " + listaNova.get(i).nota);
        }
    }
    
}