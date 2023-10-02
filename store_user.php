<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from the form
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phone"];

// SQL query to insert user data into the database
$sql = "INSERT INTO users (name, address, email, phone) VALUES ('$name', '$address', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "User information has been successfully stored in the database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
