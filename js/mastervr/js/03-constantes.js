// Declaring constants - once declared, they cannot be modified
const PI = 3.1416;
const GRAVITY = 9.8;
const USERNAME = "john_doe";

// Array constant - the reference cannot be changed, but elements can be modified
const COLORS = ["red", "blue", "green"];

// Object constant - the reference cannot be changed, but properties can be modified
const USER = {
  name: "John",
  age: 30
};

// Displaying constants in console
console.log("Mathematical constant PI:", PI);
console.log("Gravity constant:", GRAVITY);
console.log("Username constant:", USERNAME);
console.log("Colors array constant:", COLORS);
console.log("User object constant:", USER);

// This would cause an error - cannot reassign a constant
// PI = 3.14; 

// But we can modify arrays and objects
COLORS.push("yellow");
USER.age = 31;

console.log("Modified colors:", COLORS);
console.log("Modified user:", USER);