<?php
// While Loop
$count = 1;
while ($count <= 5) {
    echo "Count is: $count <br>";
    $count++;
}

// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "For Loop iteration: $i <br>";
}

// Foreach Loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
?>
