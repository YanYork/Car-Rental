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
        <form action="insert_customer.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name"><br>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name"><br>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone"><br>

            <label for="address">Address:</label>
            <input type="text" name="address"><br>

            <label for="email">Email:</label>
            <input type="email" name="email"><br>

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

