<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the value from the first form
    $valueToPass = $_POST["valueToPass"];

    // Redirect to the second form with the value as a query parameter
    header("Location: form2.php?valueToPass=" . urlencode($valueToPass));
    exit;
}
?>
