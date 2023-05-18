let AS = prompt("Ingrese el porcentaje de asistencias: ");
let CAL = prompt("Ingrese la calificación: ");
const APROBACION = 80;

if (AS >= APROBACION) {
    if (CAL >= 70) {
        console.log("Aprobado");
    } else {
        console.log("Reprobado");
    }
} else {
    console.log("Reprobado");
}
