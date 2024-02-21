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
    <form action="insert_car.php" method="post">


    <label for="brand">Brand:</label>
    <input type="text" name="brand"><br>

    <label for="model">Model:</label>
    <input type="text" name="model"><br>

    <label for="type">Type:</label>
    <select name="type">
        <option value="Sedan">Sedan</option>
        <option value="SUV">SUV</option>
	<option value="Coupe">Coupe</option>
    </select><br>

    <label for="price">Price:</label>
    <input type="number" name="price"><br>

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

