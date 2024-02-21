<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Search for customer by Name</h1>
    </header>

    <div class="navbar">
        <?php include("navbar.php"); ?>
    </div>

    <div>
    <form action="search_customer_script.php" method="post">

    <label for="name">Enter first name:</label>
    <input type="text" name="name"><br>

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
