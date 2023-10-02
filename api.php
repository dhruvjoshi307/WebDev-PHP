<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rest_api_db";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST requests to add user data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        $response = [
            "success" => true,
            "message" => "User data has been successfully added."
        ];
        echo json_encode($response);
    } else {
        $response = [
            "success" => false,
            "message" => "Error: " . $conn->error
        ];
        echo json_encode($response);
    }
}

// Close the database connection
$conn->close();
?>
