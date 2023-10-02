<!-- form2.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <h1>Form 2</h1>

    <!-- Second Form -->
    <form action="process2.php" method="post">
        <label for="displayedValue">Value from Form 1:</label>
        <!-- Display the value from Form 1 here -->
        <?php
            if (isset($_GET["valueToPass"])) {
                $valueToPass = urldecode($_GET["valueToPass"]);
                echo "<input type='text' id='displayedValue' name='displayedValue' value='$valueToPass' readonly>";
            }
        ?>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
