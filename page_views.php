<?php
// Start a PHP session or resume the existing session
session_start();

// Check if the page views count is already set in the session
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1; // Initialize the count to 1 if it doesn't exist
} else {
    $_SESSION['page_views']++; // Increment the count on each refresh
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Views Count</title>
</head>
<body>
    <h1>Page Views Count</h1>
    <p>This page has been viewed <?php echo $_SESSION['page_views']; ?> times.</p>
</body>
</html>
