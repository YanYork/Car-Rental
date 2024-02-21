<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $mysql_username = "traj3660";
    $mysql_password = "eirahxae5W";
    $server = "vlamp.cs.uleth.ca";
    $db = "traj3660"; 
    $cno = $_POST['cno'];
    $cname = $_POST['cname'];
    $crhrs = $_POST['crhrs'];
    $dname = $_POST['dname'];

    // Connect to the database
    $conn = mysqli_connect($server,$mysql_username,$mysql_password,$db);

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Perform a query to check the username and password
    $sql = "SELECT user_id, username FROM staff WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if a row is returned
        if (mysqli_num_rows($result) == 1) {
            // Fetch the user_id and username
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];
            $username = $row['username'];

            // Store user information in session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;

            // Redirect to a dashboard or home page
            header("Location: welcome.php");
            exit();
        } else {
            // Invalid username or password
            echo "Invalid username or password. <a href='login.php'>Click here</a> to go back to the login page.";
        }
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

