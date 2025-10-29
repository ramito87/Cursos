// 05-operadores.js

// 1. Operadores Aritméticos
// Se utilizan para realizar operaciones matemáticas.

let a = 10;
let b = 5;

console.log(a + b); // Suma: 15
console.log(a - b); // Resta: 5
console.log(a * b); // Multiplicación: 50
console.log(a / b); // División: 2
console.log(a % b); // Módulo: 0 (resto de la división)

// 2. Operadores de Asignación
// Se utilizan para asignar valores a variables.

let x = 10; // Asignación simple
x += 5; // Asignación con suma: x = x + 5
console.log(x); // 15

// 3. Operadores de Comparación
// Se utilizan para comparar dos valores.

console.log(a == b); // Igualdad: false
console.log(a === b); // Igualdad estricta: false
console.log(a != b); // Desigualdad: true
console.log(a !== b); // Desigualdad estricta: true
console.log(a > b); // Mayor que: true
console.log(a < b); // Menor que: false

// 4. Operadores Lógicos
// Se utilizan para combinar expresiones booleanas.

let c = true;
let d = false;

console.log(c && d); // AND: false
console.log(c || d); // OR: true
console.log(!c); // NOT: false

// 5. Operadores Bit a Bit
// Se utilizan para realizar operaciones a nivel de bits.

let e = 5; // 0101 en binario
let f = 3; // 0011 en binario

console.log(e & f); // AND bit a bit: 1 (0001)
console.log(e | f); // OR bit a bit: 7 (0111)
console.log(e ^ f); // XOR bit a bit: 6 (0110)
console.log(~e); // NOT bit a bit: -6 (en complemento a dos)
console.log(e << 1); // Desplazamiento a la izquierda: 10 (1010)
console.log(e >> 1); // Desplazamiento a la derecha: 2 (0010)

// 6. Operadores de Tipo
// Se utilizan para obtener el tipo de una variable.

console.log(typeof a); // "number"
console.log(typeof "Hola"); // "string"
console.log(typeof true); // "boolean"

// 7. Operadores de Identidad
// Se utilizan para verificar si dos referencias apuntan al mismo objeto.

let obj1 = { name: "objeto" };
let obj2 = obj1;

console.log(obj1 === obj2); // true
console.log(obj1 === { name: "objeto" }); // false

// 8. Operador Ternario
// Es una forma concisa de escribir una declaración if-else.

let edad = 18;
let esMayor = (edad >= 18) ? "Mayor de edad" : "Menor de edad";
console.log(esMayor); // "Mayor de edad"