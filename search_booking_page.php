<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bookings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Search and Update/Delete for bookings by ID</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

    <div>
    <form action="search_booking_script.php" method="post">

    <label for="staff_id">Enter staff ID to search:</label>
    <input type="text" name="staff_id"><br>
    <input type="submit" name="submit" value="Submit"><br>

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
