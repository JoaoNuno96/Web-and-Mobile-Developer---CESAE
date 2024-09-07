package src;

public class Product implements IAccountMethods
{
    public String name;
    public float price;
    public int quantity;
    public Category category;
    public String details;

    public Product() { }

    public Product(String n, float p, int q,Category c, String d)
    {
        this.name = n;
        this.price = p;
        this.quantity = q;
        this.category = c;
        this.details = d;
    }

    public void showProduct()
    {
        System.out.println("__________PRODUCT DETAILS__________");
        System.out.println("Name: " + name);
        System.out.println("Price: " + price);
        System.out.println("Quantity: " + quantity);
        System.out.println("Category: " + category);
        System.out.println("Details: " + details);
    }

    public void applyDiscount(int percentage)
    {
        this.price *= (percentage / 100);
    }

    public void decreaseQuantity(int q)
    {
        this.quantity -= q;
    }

}
