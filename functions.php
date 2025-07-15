<?php
// Basic Function
function sayHello() {
    echo "Hello from a function!<br>";
}

sayHello();

// Function with Parameters
function greetUser($name) {
    echo "Welcome, $name!<br>";
}

greetUser("Prathamesh");

// Function with Return Value
function add($a, $b) {
    return $a + $b;
}

$sum = add(10, 20);
echo "Sum is: " . $sum . "<br>";
?>
