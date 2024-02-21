<?php

echo "<div class=\"dropdown\">
        <button>Home</button>
        <div class=\"dropdown-content\">
            <p><a href=\"welcome.php\"> Welcome </a></p>
        </div>
    </div>";

echo "<div class=\"dropdown\">
        <button>Rental</button>
        <div class=\"dropdown-content\">
            <a href=\"booking.php\"> Add Booking  </a>
            <a href=\"search_booking_page.php\"> Search Booking </a>
            <a href=\"update_booking.php\"> Update Booking </a>
            <a href=\"delete_booking.php\"> Delete Booking </a>
	</div>
    </div>";

echo "<div class=\"dropdown\">
        <button>Back Office</button>
        <div class=\"dropdown-content\">
            <a href=\"staff.php\">Add Staff</a>
            <a href=\"car.php\">Add Car</a>
	    <a href=\"customer.php\"> Add Customer </a>
            <a href=\"search_customer_page.php\"> Search Customer </a>
            <a href=\"search_car_page.php\"> Search Car </a>
        </div>
    </div>";

echo "<div class=\"dropdown\">
        <button>About Us</button>
        <div class=\"dropdown-content\">
            <a href=\"profile.php\">Profile</a>
        </div>
    </div>";

?>
