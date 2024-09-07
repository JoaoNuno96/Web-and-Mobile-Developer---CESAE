package src.entities;
import java.lang.Object;

public class Costumer
{
    public String name;
    public String email;
    public String phone;
    public String address;
    public String city;

    public Costumer() { }
    public Costumer(String n, String e, String p, String a, String c)
    {
        this.name = n;
        this.email = e;
        this.phone = p;
        this.address = a;
        this.city = c;
    }

    public void costumerDetails()
    {
        StringBuilder sb = new StringBuilder();
        sb.append("Name: " + this.name + "\n");
        sb.append("Email: " + this.email + "\n");
        sb.append("Phone: " + this.phone + "\n");
        sb.append("Address: " + this.address + "\n");
        sb.append("City: " + this.city + "\n");
        System.out.println("Costumer: " + sb.toString());
    }
}
