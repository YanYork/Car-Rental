<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Search for cars by Brand</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

    <div>
    <form action="search_car_script.php" method="post">

    <label for="brand">Enter car's brand:</label>
    <input type="text" name="brand"><br>

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

    </div>
</body>
</html>
