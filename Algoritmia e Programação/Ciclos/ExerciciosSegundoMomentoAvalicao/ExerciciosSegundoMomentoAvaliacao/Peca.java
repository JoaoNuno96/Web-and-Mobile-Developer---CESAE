public class Peca
{
    public int codigoPeca;
    public int qntPeca;
    public float valorPeca;
    
    public Peca(){}
    
    public Peca(int c, int q, float v)
    {
        codigoPeca = c;
        qntPeca = q;
        valorPeca = v;
    }
    
    public float calculoValorPeca()
    {
        return qntPeca * valorPeca;
    }
}