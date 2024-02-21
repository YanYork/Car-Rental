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
        <h1>Delete booking by ID</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

    <div>
    <form action="delete_booking_script.php" method="post">

    <label for="rental_id">Booking ID:</label>
    <input type="number" name="rental_id"><br>

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
