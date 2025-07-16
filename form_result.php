<?php
// Check if the form is submitted
if (isset($_GET['username']) && isset($_GET['message'])) {
    $name = $_GET['username'];
    $msg = $_GET['message'];

    echo "<h2>Form Submitted</h2>";
    echo "Hello, <strong>$name</strong>!<br>";
    echo "Your message: <em>$msg</em>";
} else {
    echo "No data received.";
}
?>
