<?php
$age = 20;

if ($age < 18) {
    echo "You are a minor.";
} elseif ($age == 18) {
    echo "Just became an adult!";
} else {
    echo "You are an adult.";
}

echo "<br>";

// Switch Case
$grade = "B";
switch ($grade) {
    case "A":
        echo "Excellent!";
        break;
    case "B":
        echo "Good job!";
        break;
    default:
        echo "Keep trying!";
}
?>
