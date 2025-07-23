<?php
// Create indexed array
$fruits = ["Apple", "Banana", "Cherry", "Date"];

// Display all fruits
echo "<h3>🍎 List of Fruits</h3>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Count number of fruits
echo "<p>Total Fruits: " . count($fruits) . "</p>";
?>
