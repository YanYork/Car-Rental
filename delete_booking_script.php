<?php
        session_start(); // Start the session if not started already

        // Assuming you have a mechanism to identify the currently logged-in staff member
        // and retrieve their user_id. In this example, I'm using a session variable.
        if (isset($_SESSION['user_id'])) {
            $logged_in_user_id = $_SESSION['user_id'];
        } else {
            // Redirect to the login page or handle the case where the user is not logged in.
            header("Location: login.php");
            exit();
        }

        $mysql_username = "traj3660";
        $mysql_password = "eirahxae5W";
        $server = "vlamp.cs.uleth.ca";
        $db = "traj3660"; 

        // Connect to the database
        $conn = mysqli_connect($server,$mysql_username,$mysql_password,$db);

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking all values from the form data(input)
        // Note: Assuming customer_id is an auto-increment column, no need to specify it in the insert query.
        $rental_id = $_POST['rental_id'];
        
        if (empty($rental_id)) {
            $_SESSION['message'] = "Please enter rental id";
        } else {
            // Performing select query execution
            $sql = "DELETE FROM rental_records WHERE rental_id = $rental_id";
            try {
                $conn->query($sql);
                if ($conn->affected_rows > 0) {
                    $_SESSION['message'] = 'Record deleted!';
                } else {
                    $_SESSION['message'] = "Nothing was deleted.";
                }
            } catch (Exception $e) {
                $_SESSION['message'] = "Error: " . $e->getMessage();
            }
        }
        
        mysqli_close($conn);

        header("Location:delete_booking.php");

?>






