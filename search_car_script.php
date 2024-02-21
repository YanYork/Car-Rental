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
		$brand = $_POST['brand'];

        // Performing insert query execution
        if (empty($brand)) {

            $sql = "SELECT * FROM car";
            $result = $conn->query($sql);

            if($result->num_rows != 0) 
            { 	
               $_SESSION['message'] = "<table border=1>
                    <tr><td><b>Car ID</b></td>
                    <td><b>Brand</b></td>
                    <td><b>Model</b></td>
                    <td><b>Type</b></td>
                    <td><b>Price</b></td></tr>";
               while($rec = $result->fetch_assoc()) {
                    $_SESSION['message'] = $_SESSION['message'] . "<tr>
                    <td>$rec[car_id]</td>
                    <td>$rec[brand]</td>
                    <td>$rec[model]</td>
                    <td>$rec[type]</td>
                    <td>$rec[price]</td>
                    </tr>";
                }
                $_SESSION['message'] = $_SESSION['message'] . "</table>";
            }

        } else {
            // Performing insert query execution
            $sql = "SELECT * FROM car WHERE brand = '$brand'";
            $result = $conn->query($sql);

            if($result->num_rows != 0) 
            { 	
                $_SESSION['message'] = "<table border=1>
                <tr><td><b>Car ID</b></td>
                <td><b>Brand</b></td>
                <td><b>Model</b></td>
                <td><b>Type</b></td>
                <td><b>Price</b></td></tr>";
           while($rec = $result->fetch_assoc()) {
                $_SESSION['message'] = $_SESSION['message'] . "<tr>
                <td>$rec[car_id]</td>
                <td>$rec[brand]</td>
                <td>$rec[model]</td>
                <td>$rec[type]</td>
                <td>$rec[price]</td>
                </tr>";
            }
                $_SESSION['message'] = $_SESSION['message'] . "</table>";
            } else {
                $_SESSION['message'] = "<p>No car from that brand.</p>"; 
            }
        }
        // Close connection
        mysqli_close($conn);

        header("Location:search_car_page.php");
        ?>
