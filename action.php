<?php include 'config/db.php'; ?>

<form method="POST" action="actions/add.php">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="class" placeholder="Class" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Add Student</button>
</form>
