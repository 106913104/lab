<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    include 'header.inc';
    ?>

    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="hidden" name="token" value="something12345">
        <input type="submit" value="Login">
    </form>

    <?php
    include 'footer.inc';
    ?>
</body>
</html>