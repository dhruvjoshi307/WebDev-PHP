<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="store_user.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
