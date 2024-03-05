import javax.swing.*;

public class AppLauncher {
    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new WD().setVisible(true);

                // Systesm.out.println(weatherAppAPi.getLocationData("Tokyo"));
                // Systesm.out.println(WeatherAppAPi.getCurrentTime());

            }
        });
    }
}