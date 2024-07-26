import java.util.Random;

public class ExercicioPratico1
{
    public Random rand = new Random();
    public String message;
    
    public ExercicioPratico1()
    {
        this.processMessageNew(this.processNumber());
    }
    
    public int processNumber()
    {
        return rand.nextInt(41);
    }
    
    public void processMessage(int number)
    {
        if(number>=0 && number <=10)
        {
            message = "Está um frio de diabos";
        }
        else if(number>=11 && number <=20)
        {
            message = "Está um tempo ameno";
        }
        else if(number>=21 && number <=30)
        {
            message = "Está quentinho";
        }
        else
        {
            message = "Está muito hot!";
        }
        System.out.println("GRAUS: " + number + " " + message);
    }
    
    public void processMessageNew(int number)
    {
        switch(number)
        {
            case 0,1,2,3,4,5,6,7,8,9,10:
                message = "Está um frio de diabos";
                break;
            
            case 11,12,13,14,15,16,17,18,19,20:
                message = "Está um tempo ameno";
                break;
                
            case 21,22,23,24,25,26,27,28,29,30:
                message = "Está quentinho";
                break;
                
            case 31,32,33,34,35,36,37,38,39,40:
                message = "Está muito hot quentinho!";
                break;
                
        }
        System.out.println("GRAUS: " + number + " " + message);
    }
    
    public void processMessageNewNew(int number)
    {
        message = (number >= 0 && number <= 10) ? "Está um frio de diabos" : ((number >= 11 && number <= 20) ? "Está um tempo ameno" : ((number >= 21 && number <= 30) ? "Está quentinho" : "Está muito hot!")); 
    }
    
    
}