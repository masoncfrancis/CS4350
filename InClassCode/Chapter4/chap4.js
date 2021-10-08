function helloWorld() {
    document.getElementById('demo').innerHTML = 5 + 6;
}

// Being used to demonstrate datatype properties of javascript
function showH1() {
    var number = 5;
    var word = "Hello";
    document.getElementById('theArea').innerHTML = typeof (word);

}

// Prompts the user for variables found in the quadratic equation
// and solves it, then presents it to the user
function quadraticEquation() {
    // note: Still need to parse user input into integers
    var a = prompt("Enter an a");
    var b = prompt("Enter an b");
    var c = prompt("Enter an c");
    var first = (-b + Math.sqrt(b*b-4*a*c))/(2*a);
    var second = (-b - Math.sqrt(b*b-4*a*c))/(2*a);
    document.getElementById('quadEqResult').innerHTML = `The results are ${first} and ${second}`;

}

// Demonstrates creating an Object with a function
function Book(title, chapters, color){
    this.title = title;
    this.chapters = chapters;
    this.color = color;
}


