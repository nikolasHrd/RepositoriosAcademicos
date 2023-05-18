AS = int(input("Ingrese el porcentaje de asistencias: "))
CAL = int(input("Ingrese la calificación: "))
APROBACION = 80

if AS >= APROBACION:
    if CAL >= 70:
        print("Aprobado")
    else:
        print("Reprobado")
else:
    print("Reprobado")
