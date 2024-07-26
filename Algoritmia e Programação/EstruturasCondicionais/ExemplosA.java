class ExemplosA
{
    String username = new String("abc");
    String password = new String("xyz");
    
    ExemplosA()
    {
    
        if( username.equals("abc") == true && password.equals("xyp") == true)
        {
            System.out.println("Username e Pass Correctas!");

        }
        else
        {
            System.out.println("Alguma coisa falhou!");
        }
        
        
        
        if( 6>9 || 4==3 && (9<=0 || 3>=1) || retornoBool() == true )
        {
            System.out.println("Aprendizagem sobre precedência do &&!");
        }
        
        
        //SWITCH CASE
        int notaAvaliacao = 7;
        
        switch(notaAvaliacao)
        {
            case 1:
                System.out.println("Que nota é esta? Tu estudaste?");
                break;
            
            case 2:
                System.out.println("Tu não deves ter estudado!");
                break;
            
            case 3:
                System.out.println("Uma nota mediana!");
                break;
                
            case 4:
                System.out.println("Assim sim, para a próxima é sempre a esgalhar até aos 5!");
                break;
                
            case 5:
                System.out.println("Caramba! Até pareces pro!");
                break;
                
            default:
                System.out.println("Que dado enviaste? Estamos a medir notas, mete um dado válido!");
                break;
        }
        
        String diaSemana = new String("quarta");
        
        switch(diaSemana)
        {
            case "segunda":
                System.out.println("O Horário é das 9:00 às 18:00");
                break;
            
            case "terca":
                System.out.println("O Horário é das 11:00 às 20:00");
                break;
                
            case "quarta":
                System.out.println("O Horário é das 10:00 às 19:00");
                break;
                
            case "quinta":
                System.out.println("O Horário é das 8:00 às 17:00");
                break;
                
            case "sexta":
                System.out.println("O Horário é das 13:00 às 21:00");
                break;
                
            case "sábado":
            case "domingo":
                System.out.println("Fechado");
                break;
                
            default:
                System.out.println("Dia da semana não identificado!");
                break;
                
            
        }
        
    }
    
    boolean retornoBool()
    {
        return true;
    }
    
    
}