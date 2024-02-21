<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        // Performing insert query execution
        if (empty($first_name) || empty($last_name) || empty($phone) || empty($address) || empty($email)) {
            $_SESSION['message'] = "Please fill in all fields.";
        } else {
            // Performing insert query execution
            $sql = "INSERT INTO customer (first_name, last_name, phone, address, email, user_id) VALUES ('$first_name','$last_name','$phone','$address','$email', '$logged_in_user_id')";
            try {
                $conn->query($sql);
                $_SESSION['message'] = "Data stored in the database successfully.";
            }
            catch (Exception $e) {
                    $_SESSION['message'] = "Error: " . $e->getMessage();
            }
        }

        // Close connection
        mysqli_close($conn);

        header("Location:customer.php");
        ?>
    </center>
</body>

</html>
