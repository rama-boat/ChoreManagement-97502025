<?php
// Start the session
session_start();

// Include a connection file
include "../settings/connection.php";

// Collection of form data
if (isset($_POST["loginForm"])) {
    // Storing
    $log_mail = mysqli_real_escape_string($con, $_POST["email"]);
    $log_pass = mysqli_real_escape_string($con, $_POST["password"]);

    // Query to select a record
    $sql = "SELECT pid, rid, passwd FROM People WHERE email ='$log_mail'";

    // Execute SQL
    $execute = mysqli_query($con, $sql);

    // Check if rows were returned
    if (mysqli_num_rows($execute) > 0) {
        // Fetch the record
        $row = mysqli_fetch_assoc($execute);

        // Verify password user provided against database record
        if (password_verify($log_pass, $row["passwd"])) {

            // Create a session for user id and role id
            $_SESSION['pid'] = $row['pid'];
            $_SESSION['rid'] = $row['rid'];

            // Redirect to login page for user to now log in
            header("Location:../view/welcome_dashboard.php");
            exit();
        } else {
            
            echo "Incorrect username or password";
        }
    } else {
        
        echo "Incorrect username or password";
    }
} else {
    
    header("location:../login/login_view.php");
}
?>
