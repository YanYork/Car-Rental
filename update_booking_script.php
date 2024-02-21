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
        $price = $_POST['price'];
        $car_id = $_POST['car_id'];
        $customer_id = $_POST['customer_id'];
        
        if (!empty($price) || !empty($car_id) || !empty($customer_id)) {
	$sql = "update rental_records set price=$price,car_id=$car_id,customer_id=$customer_id where rental_id=$rental_id"; 
            try {
                $conn->query($sql);
		if($conn->affected_rows > 0) {
                	$_SESSION['message'] = 'Update persisted!';
                } else {
			$_SESSION['message'] = 'Nothing is updated';
		}
	    } catch (Exception $e) {
                $_SESSION['message'] = "Error: " . $e->getMessage();
            }
        } else if (empty($rental_id)) {
            $_SESSION['message'] = "Please enter rental id";
        } else {
            // Performing select query execution
            $sql = "SELECT * FROM rental_records WHERE rental_id = $rental_id";
            try {
                $result = $conn->query($sql);
                if ($result->num_rows != 0) {
                    $row = $result->fetch_assoc();
        
                    $_SESSION['message'] = '
                        <form action="update_booking_script.php" method="POST">
                            Price: <input type="number" required name="price" step="0.01" value="' . $row['price'] . '"><br>
                            Car ID: <input type="text" required name="car_id" maxlength="6" value="' . $row['car_id'] . '"><br>
                            Customer ID: <input type="number" required name="customer_id" value="' . $row['customer_id'] . '"><br>
                            <input type="hidden" name="rental_id" value="' . $row['rental_id'] .'"><br>
			    <input type="submit" name="submit" value="Update">';
                } else {
                    $_SESSION['message'] = "<p>No booking record with that ID.</p>";
                }
            } catch (Exception $e) {
                $_SESSION['message'] = "Error: " . $e->getMessage();
            }
        }
        
        mysqli_close($conn);

        header("Location:update_booking.php");
?>
