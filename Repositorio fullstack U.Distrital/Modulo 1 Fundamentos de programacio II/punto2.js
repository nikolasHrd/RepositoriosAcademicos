let RC = prompt("Ingrese el número de respuestas correctas: ");
let RI = prompt("Ingrese el número de respuestas incorrectas: ");
let RB = prompt("Ingrese el número de respuestas en blanco: ");

let PRC = RC * 4;
let PRI = RI * (-1);

let PF = PRC + PRI;

console.log("El puntaje final es:", PF);
