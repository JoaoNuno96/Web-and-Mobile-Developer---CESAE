package src.services.paymentService;

public class Paypal
{
    public double value;

    public Paypal(double v)
    {
        this.value = v;
    }

    public double taxes()
    {
        return this.value *= 0.2;
    }
    public double fees()
    {
        return this.value *= 0.2;
    }
}
