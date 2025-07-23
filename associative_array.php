<?php
// Create associative array
$student = [
    "name" => "Amit",
    "age" => 21,
    "course" => "PHP",
    "grade" => "A"
];

// Display student data
echo "<h3>👨‍🎓 Student Details</h3>";
echo "<ul>";
foreach ($student as $key => $value) {
    echo "<li><strong>$key</strong>: $value</li>";
}
echo "</ul>";
?>
