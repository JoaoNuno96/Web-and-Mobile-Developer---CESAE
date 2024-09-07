package src.orders;
import src.entities.Product;
import src.enums.InvoiceProcess;
import src.services.IPayment;

import java.util.ArrayList;

public class ListProducts
{
    public int id = 1;
    public ArrayList<Product> listProducts;
    public InvoiceProcess state;
    public String invoiceDataDetails;
    private IPayment _payment;

    public ListProducts() { }

    public ListProducts(int id, String inD,IPayment payment)
    {
        this.processOrder();
        listProducts = new ArrayList<Product>();
        this.invoiceDataDetails = inD;
        this._payment = payment;
    }

    public void addNewProduct(Product p)
    {
        listProducts.add(p);
    }

    public void removeProduct(Product p)
    {
        listProducts.remove(p);
    }

    public void processOrder()
    {
        id++;
        state = InvoiceProcess.begin;
    }

}
