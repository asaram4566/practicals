import java.applet.*;
import java.awt.*;

public class AddApplet extends Applet {
    int num1, num2, sum;

    public void init() {
        // Retrieve parameters passed from HTML
        String num1Str = getParameter("num1");
        String num2Str = getParameter("num2");

        // Parse parameters to integers
        num1 = Integer.parseInt(num1Str);
        num2 = Integer.parseInt(num2Str);

        // Perform addition
        sum = num1 + num2;
    }

    public void paint(Graphics g) {
        // Display the addition result
        g.drawString("The sum of " + num1 + " and " + num2 + " is: " + sum, 20, 20);
    }
}
