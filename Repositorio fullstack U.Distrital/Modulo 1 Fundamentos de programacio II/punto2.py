""" 1. Leer el número de respuestas correctas (RC)
2. Leer el número de respuestas incorrectas (RI)
3. Leer el número de respuestas en blanco (RB)
4. Calcular el puntaje de respuestas correctas (PRC) = RC * 4
5. Calcular el puntaje de respuestas incorrectas (PRI) = RI * (-1)
6. Calcular el puntaje final (PF) = PRC + PRI
7. Mostrar el puntaje final (PF)"""

RC = int(input("Ingrese el número de respuestas correctas: "))
RI = int(input("Ingrese el número de respuestas incorrectas: "))
RB = int(input("Ingrese el número de respuestas en blanco: "))

PRC = RC * 4
PRI = RI * (-1)

PF = PRC + PRI

print("El puntaje final es:", PF)
