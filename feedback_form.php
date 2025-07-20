<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input, textarea { width: 300px; padding: 10px; margin: 10px 0; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="post" action="feedback_result.php">
        Name: <br><input type="text" name="name" required><br>
        Email: <br><input type="text" name="email" required><br>
        Message: <br><textarea name="message" rows="5" required></textarea><br>
        <input type="submit" value="Send Feedback">
    </form>
</body>
</html>
