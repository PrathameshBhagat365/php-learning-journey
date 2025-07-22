<!DOCTYPE html>
<html>
<head>
    <title>📬 All Feedbacks</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .feedback-box {
            background: #f1f1f1;
            padding: 15px;
            border-left: 5px solid #2196F3;
            margin-bottom: 20px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h2>📬 Submitted Feedbacks</h2>
    <?php
    $filename = "feedbacks.txt";

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $feedbacks = explode("---\n", $content);

        foreach ($feedbacks as $feedback) {
            $trimmed = trim($feedback);
            if (!empty($trimmed)) {
                echo "<div class='feedback-box'>" . htmlspecialchars($trimmed) . "</div>";
            }
        }
    } else {
        echo "<p>No feedbacks found.</p>";
    }
    ?>
</body>
</html>
