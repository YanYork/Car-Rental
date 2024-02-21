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
    <form action="insert_booking.php" method="post">

    <label for="beginning_date">Beginning Date:</label>
    <input type="datetime-local" name="beginning_date"><br>

    <label for="end_date">End Date:</label>
    <input type="datetime-local" name="end_date"><br>

    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01"><br>

    <label for="car_id">Car ID:</label>
    <input type="text" name="car_id" maxlength="6"><br>

    <label for="customer_id">Customer ID:</label>
    <input type="number" name="customer_id"><br>

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

