package src;
import java.util.ArrayList;

public class ListProducts
{
    public int id = 1;
    public ArrayList<Product> listProducts;
    public String invoiceDataDetails;

    public ListProducts() { }

    public ListProducts(int id, ArrayList<Product> lP, String inD)
    {
        this.id = id++;
        this.listProducts = lP;
        this.invoiceDataDetails = inD;

    }

}
