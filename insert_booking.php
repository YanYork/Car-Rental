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
        $beginning_date = $_POST['beginning_date'];
        $end_date = $_POST['end_date'];
        $price = $_POST['price'];
        $car_id = $_POST['car_id'];
        $customer_id = $_POST['customer_id'];


        // Performing insert query execution

        if (empty($beginning_date) || empty($end_date) || empty($price) || empty($car_id) || empty($customer_id)) {
            $_SESSION['message'] = "Please fill in all fields.";
        } else {
            $sqlCheckCusId = "Select customer_id FROM customer WHERE customer_id = $customer_id";
            $result = mysqli_query($conn, $sqlCheckCusId);
            if (mysqli_num_rows($result) == 0){
                $_SESSION['message'] = "Customer ID does not exist.";
            }
            else {	
                $sql = "INSERT INTO rental_records (beginning_date, end_date, price, car_id, customer_id, staff_id) VALUES ('$beginning_date','$end_date','$price','$car_id','$customer_id', '$logged_in_user_id')";
		try {
			$conn->query($sql);
			$_SESSION['message'] = "Data stored in the database successfully.";
		}
		catch (Exception $e) {
			$_SESSION['message'] = "Error: " . $e->getMessage();
		}
                // Close connection
            }
        }
        
	mysqli_close($conn);
        header("Location:booking.php");
        ?>
