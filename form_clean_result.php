<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "❌ All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email format!";
    } else {
        echo "<h2>✅ Message Received</h2>";
        echo "Thank you, <strong>$name</strong>!<br>";
        echo "We will reply to <strong>$email</strong><br><br>";
        echo "<em>Your Message:</em> $message";
    }
}
?>
