<?php

//start the session
session_start();

//function to check if the user is logged in

function isLoggedIn(){
    //we will check if the user id session exists
    if(isset($_SESSION['user_id'])){
        return true;
    } 
    else{
        //redirect to login
        header("Location:login_view.php");
        die();
    }

    }
?>