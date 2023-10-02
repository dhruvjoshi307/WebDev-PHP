<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password match a stored record
    $validUser = false;
    $file = fopen("users.txt", "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {
            list($storedUsername, $storedPassword) = explode(",", trim($line));
            if ($username === $storedUsername && password_verify($password, $storedPassword)) {
                $validUser = true;
                break;
            }
        }

        fclose($file);
    }

    if ($validUser) {
        echo "Login successful! Welcome, $username!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
