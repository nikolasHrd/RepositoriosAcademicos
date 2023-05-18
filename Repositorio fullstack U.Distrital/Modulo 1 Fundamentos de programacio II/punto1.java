import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el porcentaje de asistencias: ");
        int AS = sc.nextInt();

        System.out.print("Ingrese la calificación: ");
        int CAL = sc.nextInt();

        final int APROBACION = 80;

        if (AS >= APROBACION) {
            if (CAL >= 70) {
                System.out.println("Aprobado");
            } else {
                System.out.println("Reprobado");
            }
        } else {
            System.out.println("Reprobado");
        }
    }
}
