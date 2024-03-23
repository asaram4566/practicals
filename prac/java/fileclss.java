import java.io.File;

public class FileInfoExample {
    public static void main(String[] args) {
        // Specify the file path
        String filePath = "example.txt";

        // Create a File object
        File file = new File(filePath);

        // Check if the file exists
        if (file.exists()) {
            // Display file information
            System.out.println("File Name: " + file.getName());
            System.out.println("Absolute Path: " + file.getAbsolutePath());
            System.out.println("File Size (in bytes): " + file.length());
            System.out.println("Is Directory? " + file.isDirectory());
            System.out.println("Is File? " + file.isFile());
            System.out.println("Last Modified: " + file.lastModified());
        } else {
            System.out.println("File does not exist.");
        }
    }
}
