package src.services.paymentService;

import src.services.IPayment;

public class Mbway implements IPayment
{
    public double value;

    public Mbway(double v)
    {
        this.value = v;
    }

    public double taxes()
    {
        return this.value *= 0.1;
    }
    public double fees()
    {
        return this.value *= 0.1;
    }
}
