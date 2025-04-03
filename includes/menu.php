<div class="navigation-strip">
	<a href="#"><img src="images/logo.png" class="img-responsive" alt="" style="display: inline-block; padding: 0 0; margin: 0 0;" /> </a>
	<?php
        error_reporting(0);
        if ($user_type == 'driver') 
        {
    ?>
    		<div class="top-menu">
                <ul class="megamenu skyblue">
					<li><a href="updatedriver.php">Update Profile</a></li>
					<li><a href="viewrequests.php">View Requests</a></li>
                	<li><a href="logout.php">Logout</a></li>
                </ul>
        	</div>
					
	<?php 
        }
        else if($user_type == 'user')
        {
    ?>
    		<div class="top-menu">
                <ul class="megamenu skyblue">
                	<li><a href="viewrides.php">View Rides</a></li>
                	<li><a href="viewrequests.php">View Requests</a></li>
                	<li><a href="logout.php">Logout</a></li>
                </ul>
        	</div>
	<?php
        }
        else
        {
    ?>
    		<div class="top-menu">
                <ul class="megamenu skyblue">
                	<li><a href="index.php">Home</a></li>
                	<li><a href="login.php">Login</a></li>
					<li><a href="registration.php">Registration</a></li>
					<li><a href="aboutus.php">About us</a></li>
					<li><a href="contactus.php">Contact us</a></li>
                </ul>
        	</div>
	<?php
        }
    ?>
    <div class="clearfix"></div>
</div>