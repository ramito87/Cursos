// Variables de diferentes tipos de datos
let numero = 42; // Número
let texto = "Hola, mundo"; // Cadena de texto
let booleano = true; // Booleano
let objeto = { nombre: "Juan", edad: 30 }; // Objeto
let arreglo = [1, 2, 3, 4, 5]; // Arreglo
let nulo = null; // Nulo
let indefinido; // Indefinido

// Mostrar las variables en la consola
console.log("Número:", numero);
console.log("Texto:", texto);
console.log("Booleano:", booleano);
console.log("Objeto:", objeto);
console.log("Arreglo:", arreglo);
console.log("Nulo:", nulo);
console.log("Indefinido:", indefinido);

// Concatenar todas las variables y mostrarlas en un alert
let mensaje = "Número: " + numero + "\n" +
        "Texto: " + texto + "\n" +
        "Booleano: " + booleano + "\n" +
        "Objeto: " + JSON.stringify(objeto) + "\n" +
        "Arreglo: " + arreglo + "\n" +
        "Nulo: " + nulo + "\n" +
        "Indefinido: " + indefinido;

alert(mensaje);