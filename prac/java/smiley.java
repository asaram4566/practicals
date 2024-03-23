import java.applet.Applet;
import java.awt.Color;
import java.awt.Graphics;

public class Smiley extends Applet {
    public void paint(Graphics g) {
        // Set face color to yellow
        g.setColor(Color.YELLOW);
        // Draw face
        g.fillOval(50, 50, 200, 200);

        // Set eye color to white
        g.setColor(Color.WHITE);
        // Draw eyes
        g.fillOval(90, 120, 40, 40);
        g.fillOval(170, 120, 40, 40);

        // Set inner circle color to black
        g.setColor(Color.BLACK);
        // Draw inner circles of eyes
        g.fillOval(110, 140, 10, 10);
        g.fillOval(190, 140, 10, 10);

        // Set nose color to black
        g.setColor(Color.BLACK);
        // Draw nose (line)
        g.drawLine(150, 160, 150, 180);

        // Set mouth color to red
        g.setColor(Color.RED);
        // Draw mouth
        g.fillArc(100, 130, 120, 100, 180, 180);

        // Set eyebrow color to black
        g.setColor(Color.BLACK);
        // Draw eyebrows (curves)
        g.drawArc(80, 100, 60, 30, 0, 180);
        g.drawArc(160, 100, 60, 30, 0, 180);
    }
}
