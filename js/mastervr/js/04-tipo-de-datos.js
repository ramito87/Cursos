// 1. String - Cadenas de texto
let texto = "Hola Mundo";
let nombre = 'John Doe';
console.log('--- Strings ---');
console.log(texto, typeof texto);
console.log(`Concatenación: ${nombre}, ${texto}`);

// 2. Number - Números
let numero = 42;
let decimal = 3.14;
console.log('--- Numbers ---');
console.log(numero, typeof numero);
console.log(decimal, typeof decimal);

// 3. Boolean - Valores lógicos
let verdadero = true;
let falso = false;
console.log('--- Booleans ---');
console.log(verdadero, typeof verdadero);
console.log('Ejemplo: 5 > 3 =', 5 > 3);

// 4. Undefined - Valor no definido
let sinDefinir;
console.log('--- Undefined ---');
console.log(sinDefinir, typeof sinDefinir);

// 5. Null - Valor nulo intencionalmente
let nulo = null;
console.log('--- Null ---');
console.log(nulo, typeof nulo);

// 6. Object - Objetos
let persona = {
  nombre: "Ana",
  edad: 25
};
console.log('--- Object ---');
console.log(persona, typeof persona);

// 7. Array - Arrays (tipo de objeto)
let colores = ["rojo", "verde", "azul"];
console.log('--- Array ---');
console.log(colores, typeof colores);
console.log('Es Array:', Array.isArray(colores));

// 8. Symbol - Símbolo (ES6)
let simbolo = Symbol("mi simbolo");
console.log('--- Symbol ---');
console.log(simbolo, typeof simbolo);

// 9. BigInt - Números grandes (ES2020)
let numeroGrande = BigInt(9007199254740991);
console.log('--- BigInt ---');
console.log(numeroGrande, typeof numeroGrande);