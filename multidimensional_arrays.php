<!DOCTYPE html>
<html>
<head>
    <title>🎓 Student Marks</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 30px auto; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">📊 Student Marks Table</h2>
    <?php
    $students = [
        ["name" => "Riya", "marks" => 85],
        ["name" => "Aman", "marks" => 78],
        ["name" => "Sneha", "marks" => 92],
        ["name" => "Prathamesh", "marks" => 88]
    ];

    echo "<table>";
    echo "<tr><th>Student Name</th><th>Marks</th></tr>";

    foreach ($students as $student) {
        echo "<tr><td>{$student['name']}</td><td>{$student['marks']}</td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
