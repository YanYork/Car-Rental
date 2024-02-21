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
        $staff_id = $_POST['staff_id'];
    
                if (empty($staff_id)) {
                    $_SESSION['message'] = "Please enter staff id";
                } else {
                    // Performing insert query execution
                    $sql = "SELECT rr.rental_id, rr.beginning_date, rr.end_date, rr.price, 
                                CONCAT(brand,' ', model) as car_name, 
                                CONCAT(first_name,' ', last_name) as customer_name, username
                            FROM customer, staff, rental_records rr, car
                            WHERE customer.customer_id = rr.customer_id
                                AND staff.user_id = rr.staff_id
                                AND rr.car_id = car.car_id
                                AND rr.staff_id = '$staff_id'";
                    try {
                        $result = $conn->query($sql);
                        if($result->num_rows != 0) 
                        {   
                        $_SESSION['message'] = "<table border=1>
                                <tr><td><b>Rental ID</b></td>
                                <td><b>Beginning Date </b></td>
				<td><b>End Date</b></td>
                                <td><b>Price</b></td>
                                <td><b>Car Name</b></td>
                                <td><b>Customer Name</b></td>
                                <td><b>Staff Name</b></td></tr>";
                        while($rec = $result->fetch_assoc()) {
                                $_SESSION['message'] = $_SESSION['message'] . "<tr>
                                <td>$rec[rental_id]</td>
				<td>$rec[beginning_date]</td>
                                <td>$rec[end_date]</td>
                                <td>$rec[price]</td>
                                <td>$rec[car_name]</td>
                                <td>$rec[customer_name]</td>
                                <td>$rec[username]</td>
                                </tr>";
                            }
                            $_SESSION['message'] = $_SESSION['message'] . "</table>";
                        } else {
                            $_SESSION['message'] = "<p>No booking record with that staff.</p>"; 
                        }
                    }
                    catch (Exception $e) {
                        $_SESSION['message'] = "Error: " . $e->getMessage();
                    }            
                }

        
        // Close connection
        mysqli_close($conn);

        header("Location:search_booking_page.php");
?>
