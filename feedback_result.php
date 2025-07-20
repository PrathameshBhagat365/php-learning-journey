<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean & validate input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    // Check for errors
    if (empty($name) || empty($email) || empty($message)) {
        echo "<p class='error'>❌ All fields are required!</p>";
        echo "<a href='feedback_form.php'>Go back</a>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p class='error'>❌ Invalid email format!</p>";
        echo "<a href='feedback_form.php'>Go back</a>";
    } else {
        // Show result
        echo "<h2>✅ Thank You for Your Feedback!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong><br>$message</p>";
    }
} else {
    echo "⚠️ No data received.";
}
?>
