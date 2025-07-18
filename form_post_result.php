<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Basic Validation
    if (empty($user) || empty($pass)) {
        echo "❌ Both fields are required!";
    } else {
        echo "<h2>✅ Login Successful</h2>";
        echo "Welcome, <strong>$user</strong>";
    }
} else {
    echo "No form submitted.";
}
?>
