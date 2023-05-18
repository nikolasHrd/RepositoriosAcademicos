///1. Leer el número de respuestas correctas (RC)
///2. Leer el número de respuestas incorrectas (RI)
///3. Leer el número de respuestas en blanco (RB)
///4. Calcular el puntaje de respuestas correctas (PRC) = RC * 4
///5. Calcular el puntaje de respuestas incorrectas (PRI) = RI * (-1)
///6. Calcular el puntaje final (PF) = PRC + PRI
///7. Mostrar el puntaje final (PF)

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese el número de respuestas correctas: ");
        int RC = sc.nextInt();

        System.out.print("Ingrese el número de respuestas incorrectas: ");
        int RI = sc.nextInt();

        System.out.print("Ingrese el número de respuestas en blanco: ");
        int RB = sc.nextInt();

        int PRC = RC * 4;
        int PRI = RI * (-1);

        int PF = PRC + PRI;

        System.out.println("El puntaje final es: " + PF);
    }
}
