<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lethbridge Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Lethbridge Car Rental</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

    <div>
    <form action="insert_staff.php" method="post">

    <label for="username">Username:</label>
    <input type="text" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br>

    <!--<label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password"><br> -->

    <input type="submit" value="Submit">

    <div>
        <?php
        // Start the session
        session_start();

        // Display the message if it exists
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            // Optionally, clear the message after displaying it
            unset($_SESSION['message']);
        }
        ?>
    </div>
</form>

    </div>
</body>
</html>

