<?php
// Define the username and hashed password
$username = "user1"; // Replace with your desired username
$hashedPassword = password_hash("password123", PASSWORD_DEFAULT); // Replace with your desired password

// Create a string with the username and hashed password
$userData = "$username,$hashedPassword";

// Open the users.txt file in append mode
$file = fopen("users.txt", "a");

if ($file) {
    // Write the user data to the file
    fwrite($file, $userData . PHP_EOL);

    // Close the file
    fclose($file);

    echo "User '$username' has been initialized with a hashed password and stored in users.txt.";
} else {
    echo "Error: Unable to create the user.";
}
?>
