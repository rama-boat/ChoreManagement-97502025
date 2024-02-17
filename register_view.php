<?php 
session_start();
include "../functions/select_role_fxn.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="../css/register_view.css">
	<script src="register_view.js"></script>
</head>
<body>
	<div class="registration-box">
        <h1>Register Here</h1>
        <form action="../action/register_user_action.php" method="POST" id="registrationForm" name="registrationForm">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required">
           
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required">
           

            <div class="radio-group">
                <label for="male">Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div>

            <!-- <label for="fam-role">Choose your Family Role:</label>
            <select id="fam-role" name="fam-role" required>
                <option value="0">Select</option>
                <option value="1">Father</option>
                <option value="2">Mother</option>
                <option value="3">Son</option>
                <option value="4">Daughter</option>
            </select> -->

            <label for="fam-role">Choose your Family Role:</label>
            <?php
            if(!empty($roles)){
                echo '<select id="fam-role" name = "fam-role" required>';
                echo 'option value="0"> Select</option>';
                foreach($roles as $row){
                    echo '<option value="' . $row['fid'] . '">' . $row['fam_name'] . '</option>';
                }
                echo '</select>';
            } else {
                echo 'Data not available.';
            }
            ?>
    

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required pattern="\d{4}-\d{2}-\d{2}">

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required pattern="[0-9]{10}">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email here" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required pattern=".{8,}}">

            <label for="confirmPassword">Re-enter Password:</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter your password again" required pattern=".{8,}">
            

            <button type="submit" name="registrationForm"> Register</a></button>

        </form>
        <p class="paragraph">Already have an account? <a href="../login/login_view.php">Login Here</a></p>
    </div>
		
		


</body>
</html>

