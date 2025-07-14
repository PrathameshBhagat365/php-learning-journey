<?php
$username = "admin";
$password = "1234";

$input_user = "admin";
$input_pass = "1234";

if ($input_user == $username && $input_pass == $password) {
    echo "Login Successful!";
} else {
    echo "Invalid Credentials.";
}
?>
