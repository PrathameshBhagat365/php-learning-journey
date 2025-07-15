<?php
// Indexed Array
$colors = ["Red", "Green", "Blue"];
echo "First color: " . $colors[0] . "<br>";
echo "Total colors: " . count($colors) . "<br>";

// Associative Array
$person = [
    "name" => "Prathamesh",
    "age" => 21,
    "city" => "Pune"
];
echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "<br>";

// Multidimensional Array
$students = [
    ["name" => "Amit", "marks" => 85],
    ["name" => "Sneha", "marks" => 92],
    ["name" => "Ravi", "marks" => 78]
];

foreach ($students as $student) {
    echo $student["name"] . " scored " . $student["marks"] . "<br>";
}

// Array Functions
array_push($colors, "Yellow");
sort($colors);

echo "<br>Sorted Colors:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>
