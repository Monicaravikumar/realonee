<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy credentials for demonstration
    $valid_username = 'admin';
    $valid_password = 'password123';

    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>