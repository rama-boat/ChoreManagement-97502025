<?php
//include a connection file
include "../settings/connection.php";


//collection of form data
if(isset($_POST["registrationForm"])){
    $first_name = mysqli_real_escape_string( $con, $_POST["fname"]);
    $last_name = mysqli_real_escape_string( $con, $_POST["lname"]);
    $gender = mysqli_real_escape_string( $con, $_POST["gender"]);
    $role = mysqli_real_escape_string( $con, $_POST["fam-role"]);
    $dob = mysqli_real_escape_string( $con, $_POST["dob"]);
    $contact = mysqli_real_escape_string( $con, $_POST["phoneNumber"]);
    $email = mysqli_real_escape_string( $con, $_POST["email"]);
    $first_pass = mysqli_real_escape_string( $con, $_POST["password"]);
    $second_pass = mysqli_real_escape_string( $con, $_POST["confirmPassword"]);


    //check if the two passwords are the same or not
    if($first_pass != $second_pass){
        header("Location:../login/register_view.php");
        exit();
    }

    //encrypt our password
    //we will use the php password_hash function
    $encrypted_pass = password_hash($first_pass, PASSWORD_DEFAULT);


    //write a query
    //using a default number of 3 for rid
    $rid=3;
    
    $create_query = "INSERT INTO People (rid, fid, fname, lname,gender,dob,tel,email,passwd) VALUE ('$rid','$role','$first_name','$last_name','$gender','$dob','$contact','$email','$encrypted_pass')";

    // check if query worked
    if ($con->query($create_query) === true) {
        
    //redirect to login page for user to now log in
        echo "Success!";
        header("Location:../login/login_view.php");

    } 
    else {
    //echo error 
        header("Location:../login/register_view.php");
        echo "Error: " ;
    }

    //close database connection
    $con->close();

}








?>